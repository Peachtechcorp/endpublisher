<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Utility;
use App\Models\Book;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::all();

        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.books.create', compact('brands', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'author' => 'required',
            'year_published' => 'required',
            'isbn' => 'required',
            'pages' => 'required',
            'price' => 'required',
            'featured_image' => 'required',
        ]);
        DB::beginTransaction();
        $book = new Book();
        $book->fill($request->input());
        if (request()->hasFile('featured_image')) {
            $book->featured_image = Utility::UploadFile('featured_image');
        }
        $book->save();
        $book->brands()->sync($request->input('brand_id'));
        $book->categoryies()->sync($request->input("category_id"));

        DB::commit();

        return redirect()->route('books.index')
            ->with('Success' . 'Book created successfully');
    }

    /**
     * Display the specified resource.
     * 
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.books.show', compact('book', 'categories', 'brands'));
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $products = Product::all();
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.books.create', compact('book', 'products', 'brands', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(Request $request, Book $book)
    {
        //

        $book->fill($request->input());
        if (request()->hasFile('featured_image')) {
            $book->featured_image = Utility::UploadFile('featured_image');
        }
        $book->brands()->sync($request->input('brand_id'));
        $book->categoryies()->sync($request->input("category_id"));
        $book->update();

        return redirect()->route('books.index')
            ->with('Success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * 
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     * 
     */
    public function destroy(Book $book)
    {
        //
        $book->delete();

        return redirect()->route('books.index')
            ->with('Success', 'Book delete Successfully');
    }
}
