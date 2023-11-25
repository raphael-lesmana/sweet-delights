<h1>Transactions</h1>
<ul>
    @foreach ($transactions as $transaction)
        <li> TR{{$transaction->transactionHeader->id}} {{date_format($transaction->created_at, "Y-m-d")}} {{$transaction->item->name}} [x{{$transaction->qty}}] ${{$transaction->item->price * $transaction->qty}}</li>
    @endforeach
</ul>