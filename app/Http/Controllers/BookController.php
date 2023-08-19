<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function addBookForm() {
        return view('book_create');
     }
      
     public function insert(Request $request) {
        $isbn = $request->input('isbn');
        $title = $request->input('title');
        $fk_category_id = $request->input('category_id');
        $published_date = $request->input('published_date');
        $created_at = date("Y-m-d H:i:s");
        $updated_at = date("Y-m-d H:i:s");
        DB::insert('insert into books (isbn, title, fk_category_id, published_date, created_at, updated_at) values(?, ?, ?, ?, ?, ?)',
            [$isbn, $title, $fk_category_id, $published_date, $created_at, $updated_at]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/add-book">Click Here</a> to go back.';
     }
}
