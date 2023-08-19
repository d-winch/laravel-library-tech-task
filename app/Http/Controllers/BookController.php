<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function addBookForm() {
        return view('book_create');
     }

     public function bookExists($isbn){
        $count = Book::where('isbn', $isbn)
            ->count();
        return $count > 0; 
     }
      
     public function insert(Request $request) {

        if ($this->bookExists($request->input('isbn'))){
            echo "Book with isbn '" . $request->input('isbn') . "' already exists.<br/>";
            echo '<a href = "/add-book">Click Here</a> to go back.';
            return;
        }

        $book = Book::create([
            'isbn' => $request->input('isbn'),
            'title' => $request->input('title'),
            'fk_category_id' => $request->input('category_id'),
            'published_date' => $request->input('published_date'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        
        $book->save();

        echo "Record inserted successfully.<br/>";
        echo '<a href = "/add-book">Click Here</a> to go back.';
     }
}
