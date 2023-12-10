<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Rate;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show_author_list() {
        $show_author = Author::all();

        foreach ($show_author as $author) {
            $total_voters = Rate::where('author_id', $author->id)->count();

            $author_info[] = [
                'author' => $author, 
                'total_voters' => $total_voters, 
            ];
        }

        usort($author_info, function($a, $b) {
            return $b['total_voters'] <=> $a['total_voters'];
        });

        return view('authors_list', compact('author_info'));
    }
}
