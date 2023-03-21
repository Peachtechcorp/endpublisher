<?php

namespace App\Http\Controllers\Inv;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class AssignBrandController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Book $book)
    {
        $book->brands()->sync($request->input('brand_id'));
        return redirect(route("books.show", ["book" => $book]));
    }
}
