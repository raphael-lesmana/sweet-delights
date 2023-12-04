@extends('include.navbar')

@section('title', 'Transaction History')

@section('content')
<div style="margin-left: 100px">
    <h1 style="color: gold; margin-bottom: 30px; padding-top: 20px">交易记录 | Transaction History</h1>
    <ul>
        @if (sizeof($transactions) == 0)
            <div class="card mx-auto" style="width: 70vw; display:flex; align-items: center; background-color: black; color: white; justify-content: center">
                <div class="card-body">
                    <div class="mx-auto" style="font-weight: bold; color: gold; text-align: center; font-size: 30px">
                        There are no transactions yet...
                    </div>
                    <div style="font-size: 20px">
                        Poof! Transaction history gone. Time to make delicious memories all over again. Let's fill this blank page
                        with savory stories and culinary adventures. Bon appétit!
                    </div>
                </div>
            </div>
        @else
            @foreach ($transactions as $transaction)
                <li> TR{{str_pad($transaction->transactionHeader->id, 3, "0", STR_PAD_LEFT)}} {{date_format($transaction->created_at, "Y-m-d")}} {{$transaction->item_name}} [x{{$transaction->qty}}] ${{$transaction->item_price * $transaction->qty}}</li>
            @endforeach
        @endif
    </ul>
</div>
@endsection