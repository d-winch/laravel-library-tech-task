<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookLoanController extends Controller
{
    public function addBookLoanForm() {
        return view('book_loan_create');
     }
      
     public function insert(Request $request) {
        // TODO Check that a LibraryStock has copies of the book available before commiting
        $fk_member_id = $request->input('member_id');
        $fk_stock_id = $request->input('stock_id');
        $loan_date = $request->input('loan_date');
        $created_at = date("Y-m-d H:i:s");
        $updated_at = date("Y-m-d H:i:s");
        DB::insert('insert into book_loans (fk_member_id, fk_stock_id, loan_date, created_at, updated_at) values(?, ?, ?, ?, ?)',
            [$fk_member_id, $fk_stock_id, $loan_date, $created_at, $updated_at]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/loan-book">Click Here</a> to go back.';
     }
}
