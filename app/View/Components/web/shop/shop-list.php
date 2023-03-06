<?php

namespace App\View\Components\web\shop;

use App\Models\Book;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class shoplist extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $books = Book::paginate();
        return view('components.web.shop.shop-list', compact('books'));
    }
}
