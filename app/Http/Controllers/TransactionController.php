<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = DB::table('transaction_details')
            ->join('transaction_headers', 'transaction_details.transaction_header_id', '=', 'transaction_headers.id')->get();
        return view('transactions', compact('transactions'));
        // if (sizeof($transaction_headers) == 0)
        // {
        //     $transactions = [];
        //     return view('transactions', compact('transactions'));    
        // }
        // $transactions = TransactionDetail::whereBelongsTo($transaction_headers)->get();
        // return view('transactions', compact('transactions'));
    }
}
