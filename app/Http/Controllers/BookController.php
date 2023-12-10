<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Rate;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show_book_list() {
        $show_books = Book::all();

        $average_ratings = [];

        foreach ($show_books as $book) {
            $average_rating = Rate::where('book_id', $book->id)->avg('rate');
            $total_voters = Rate::where('book_id', $book->id)->count();

            $formatted_rating = number_format($average_rating, 2);

            $author_name = $book->author->name;
            $book_category = optional($book->book_category)->name;

            $books_info[] = [
                'book' => $book,
                'average_rating' => $formatted_rating,
                'total_voters' => $total_voters,
                'author_name' => $author_name,
                'book_category' => $book_category
            ];

        }
        usort($books_info, function($a, $b) {
            return $b['average_rating'] <=> $a['average_rating'];
        });

        return view('books_list', compact('books_info'));
    }
}
