<?php

namespace App\Http\Controllers\Inv;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class CarRemoveController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Book $book)
    {
        //$cart[] = session()->get('cart', []);
        //dd($cart[$book->id]);
        $request->session()->forget('cart');
        $request->session()->forget('total');
        return redirect(route('cart'));
        //
    }
}
