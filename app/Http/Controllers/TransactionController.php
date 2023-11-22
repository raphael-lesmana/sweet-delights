<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = DB::table('transaction_details')->join('transaction_headers', 'transaction_headers.id', '=', 'transaction_details.transaction_header_id')
        ->get(['transaction_details.*']);
        return view('transactions', compact('transactions'));
    }
}
