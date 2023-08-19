<?php

namespace App\Http\Controllers;

use App\Models\BookLoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookLoanController extends Controller
{
    public function addBookLoanForm()
    {
        return view('book_loan_create');
    }

    public function getLoanedBookCount($member_id)
    {
        $count = BookLoan::where('fk_member_id', $member_id)
            ->whereNull('return_date')
            ->count();
        return $count;
    }

    public function insert(Request $request)
    {

        if ($this->getLoanedBookCount($request->input('member_id')) >= 5) {
            echo "User " . $request->input('fk_member_id') . " currently has 5 books on loan. This book cannot be taken until one is returned.<br/>";
            echo '<a href = "/loan-book">Click Here</a> to go back.';
            return;
        }

        $bookLoan = BookLoan::create([
            'fk_member_id' => $request->input('member_id'),
            'fk_stock_id' => $request->input('stock_id'),
            'loan_date' => $request->input('loan_date'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        $bookLoan->save();

        echo "Record inserted successfully.<br/>";
        echo '<a href = "/loan-book">Click Here</a> to go back.';
    }
}