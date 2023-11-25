<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction_headers = TransactionHeader::whereBelongsTo(auth()->user())->get();
        $transactions = TransactionDetail::whereBelongsTo($transaction_headers)->get();
        return view('transactions', compact('transactions'));
    }
}
