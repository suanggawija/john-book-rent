<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Rate;
use App\Models\Author;
use Illuminate\Http\Request;

class RateController extends Controller
{
    public function show_rate_form() {
        $show_rate = Rate::all();
        $show_authors = Author::all();
        $show_books = Book::all();

        return view('rating_form', compact('show_rate', 'show_authors', 'show_books'));
    }

    public function store_rating(Request $request){
        $request->validate([
            'author_id' => 'required|exists:author,id',
            'book_id' => 'required|exists:book,id',
            'rate' => 'required|numeric|min:1|max:10',
        ]);

        Rate::create([
            'author_id' => $request->input('author_id'),
            'book_id' => $request->input('book_id'),
            'rate' => $request->input('rate'),
        ]);

        return redirect()->route('books_list')->with('success', 'Rating successfully added.');
    }
}
