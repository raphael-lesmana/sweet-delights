@extends('include.navbar')

@section('title', 'Transaction History')

@section('content')
<div style="margin-left: 100px">
    <h1 style="color: gold; margin-bottom: 30px; padding-top: 20px">Transaction History</h1>
    <ul>
        @if (sizeof($transactions) == 0)
            <div class="card mx-auto" style="width: 70vw; display:flex; align-items: center; background-color: black; color: white; justify-content: center">
                <div class="card-body">
                    <div class="mx-auto" style="font-weight: bold; color: gold; text-align: center; font-size: 30px">
                        There are no transactions yet...
                    </div>
                </div>
            </div>
        @else
        <table class="table table-bordered" style="border-color:black; ">
            <thead class="table" style="background-color: black">
                <tr class="table" style="background-color: black; text-align: center; color: gold; border-color:black">
                    <th scope="col">Transaction ID</th>
                    <th scope="col">Price</th>
                    <th scope="col">Purchase Date</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                <tr class="align-middle" style="background-color: dimgrey; color: white; text-align: center; font-weight: bold">
                    <td>TR{{str_pad($transaction->transaction_header_id, 3, "0", STR_PAD_LEFT)}}</td> 
                    <td>{{$transaction->total_price}}</td>
                    <td>{{$transaction->created_at}}</td>
                    <td>{{$transaction->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </ul>
</div>
@endsection