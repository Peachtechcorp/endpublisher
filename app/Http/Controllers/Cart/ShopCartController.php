<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class ShopCartController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Book $book)
    {
        $cart = session()->get("cart", []);
        $total = session()->get('total', 0);
        if (isset($cart[$book->id])) {
            $cart[$book->id]['quantity']++;
        } else {
            $cart[$book->id] = [
                "name" => $book->name,
                "quantity" => 1,
                "price" => $book->price,
                "image" => $book->featured_image,
                "book_id" => $book->id,
            ];
        }
        foreach ($cart as $item) {
            $total += $item['quantity'] * $item['price'];
        }

        session()->put('total', $total);
        session()->put('cart', $cart);
        return redirect()->back();


        //
    }
}
