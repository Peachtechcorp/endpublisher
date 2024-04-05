<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order\OrderItem;
use App\Models\Product;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {

            $books = Book::count();
            $categories = Category::count();
           // $products = Product::count();
            $orders = OrderItem::count();
            return view('/home', compact('books', 'categories', 'orders'));
        } else {
            return view('/welcome');
        }
    }
}
