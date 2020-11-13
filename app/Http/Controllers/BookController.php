<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function createbook(Request $request){
        $book = new Book;
        $input = $request->all();
        $book->title = $input["title"];
        $book->excerpt = $input["excerpt"];
        $book->isbn = $input["isbn"];
        $book->pages = $input["pages"]; 
        $book->cost = $input["cost"]; 
        $book->value = $input["value"]; 
        $book->released = "2020-11-13 15:28:57";


        $book->save();

        return $book->toArray();

    }
}
