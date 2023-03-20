<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Nette\Utils\Random;

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

    public function category(Category $category)
    {
        $categories = $category->load("books");
        return view("shop-category", compact("categories"));
    }

    public function showBook($book)
    {
        $book = Book::find($book);
        return view("shop-single", compact("book"));
    }

    public function cart()
    {
        return view("cart");
    }

    public function checkout()
    {
        return view("checkout");
    }

    public function about()
    {
        return view("about");
    }

    public function contact()
    {
        return view("contact");
    }

    public function rand()
    {
        $value = [12];
        for ($i = 0; $i <= 12; $i++) {
            $rand = rand(1, 3);
            $value[$i] = $rand;
        }
        print_r($value);
    }
}
