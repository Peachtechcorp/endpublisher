<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("welcome", compact("categories"));
    }
    public function shop()
    {
        $books = Book::paginate(15);
        return view("shop", compact('books'));
    }

    public function category()
    {
        return view("category");
    }

    public function showBook($book)
    {
        $books = Book::find($book);
        return view("shop-single", compact("books"));
    }
}
