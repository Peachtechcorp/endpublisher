<?php

namespace App\Http\Controllers\Inv;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactEmail extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('edvission@gmail.com', 'Admin')->subject($request->get('subject'));
        });
        return back()->with('success', 'We have received your message .');
        //
    }
}
