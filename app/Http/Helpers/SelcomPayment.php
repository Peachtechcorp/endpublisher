<?php

namespace App\Http\Helpers;

use App\Models\Ads\AdsModel;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Payment\PackageModel;
use App\Models\Payment\PremiumModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as FacadesRequest;

class SelcomPayment
{
    public static function sendJSONPost($url, $isPost, $json, $authorization, $digest, $signed_fields, $timestamp)
    {
        $headers = array(
            "Content-type: application/json;charset=\"utf-8\"", "Accept: application/json", "Cache-Control: no-cache",
            "Authorization: SELCOM $authorization",
            "Digest-Method: HS256",
            "Digest: $digest",
            "Timestamp: $timestamp",
            "Signed-Fields: $signed_fields",
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        if ($isPost) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_TIMEOUT, 90);
        $result = curl_exec($ch);
        curl_close($ch);
        $resp = json_decode($result, true);
        return $resp;
    }

    public static function computeSignature($parameters, $signed_fields, $request_timestamp, $api_secret)
    {
        $fields_order = explode(',', $signed_fields);
        $sign_data = "timestamp=$request_timestamp";
        foreach ($fields_order as $key) {
            $sign_data .= "&$key=" . $parameters[$key];
        }
        return base64_encode(hash_hmac('sha256', $sign_data, $api_secret, true));
    }

    /**
     * $premiable_type
     * $premiable
     * $package
     */
    public static function createPayment(Request $request)
    {


        try {
            $user = auth()->user();
            $request->merge([
                "email" => $user->email,
                "fname" => $user->fname,
                "lname" => $user->lname,
                "phone" => $user->phone,
            ]);

            $premium = Payment::create(
                [
                    "payable_type" => Order::class,
                    "payable_id" => $request->payable,
                    "amount" => $request->amount,
                ]
            );
            //Set your appropirate timezone
            date_default_timezone_set('Africa/Dar_es_Salaam');
            $apiKey         = 'VISIONED-RBlgkNU9Ahky1yr';
            $apiSecret      = 'Vs62pbqYIHLEO3d6wRBlgkNU9Ahky1yr';
            $baseURL        = "https://apigw.selcommobile.com/v1";
            $apiEndpoint    = "/checkout/create-order";
            $url            = $baseURL . $apiEndpoint;
            $isPost         = true;
            $req            = array(
                "vendor"        => "TILL61052676", // Replace with your Vendor TILL No.
                "order_id"      => $premium->id, //  Generate your own unique order_id
                "buyer_email"   => $request->email,
                "buyer_name"    => $request->fname,
                "buyer_phone"   => str_replace("+", "", $request->phone),
                "amount"        => $request->amount,
                "currency"      => "TZS",
                "payment_methods"   => "ALL", // Choose one preferred method or ALL
                "webhook"           => base64_encode("https://matangazo.co.tz/"),
                "redirect_url"      => base64_encode("https://matangazo.co.tz/"), // Optional
                "cancel_url"        => base64_encode("https://matangazo.co.tz/"), // Optional
                "billing.firstname" => $request->fname,
                "billing.lastname"  => $request->lname,
                "billing.address_1" => "Address 1",
                "billing.city"      => "Dar es Salaam",
                "billing.state_or_region"   => "Dar es Salaam",
                "billing.postcode_or_pobox" => "14113",
                "billing.country"           => "TZ",
                "billing.phone"             => $request->phone,
                "no_of_items"               => 1,
            );
            // return $req;
            $authorization  = base64_encode($apiKey);
            $timestamp      = date('c'); //2019-02-26T09:30:46+03:00
            $signed_fields  = implode(',', array_keys($req));
            $digest         = self::computeSignature($req, $signed_fields, $timestamp, $apiSecret);
            $response       = self::sendJSONPost($url, $isPost, json_encode($req), $authorization, $digest, $signed_fields, $timestamp);
            if ($response['resultcode']  == '000') {
                $paymentURL     = base64_decode($response['data'][0]['payment_gateway_url']);
                if (FacadesRequest::is('api*')) {
                    // return SystemHelper::response(compact('paymentURL'), "done", true);
                }
                return Redirect::to($paymentURL);
            } else {
                $error = $response['resultcode'] . ': Cann\'t process payment now, please try after sometime.';
                if (FacadesRequest::is('api*')) {
                    // return redirect()->back()->withErrors(['error' => $error]);
                }
                return redirect()->back()->withErrors(['danger' => $error]);
            }
        } catch (Exception $e) {
            $error = 'Internal Server Error.';
            if (FacadesRequest::is('api*')) {
            }
            return redirect()->back()->withErrors(['danger' => $error]);
        }
    }
}
