<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = DB::table('transaction_details')
            ->join('transaction_headers', 'transaction_details.transaction_header_id', '=', 'transaction_headers.id')
            ->join('users', 'transaction_headers.user_id', '=', 'users.id')->
            where('users.id', '=', auth()->id())->get();
        return view('transactions', compact('transactions'));
        // if (sizeof($transaction_headers) == 0)
        // {
        //     $transactions = [];
        //     return view('transactions', compact('transactions'));    
        // }
        // $transactions = TransactionDetail::whereBelongsTo($transaction_headers)->get();
        // return view('transactions', compact('transactions'));
    }

    public function detail($id)
    {
        $transaction = TransactionDetail::find($id);
        $header = $transaction->transactionHeader;
        if ($transaction->transactionHeader->user_id == auth()->id() || Gate::allows('admin')) 
            return view('transaction_details', compact('transaction', 'header'));
        else
            abort(403);
    }
}
