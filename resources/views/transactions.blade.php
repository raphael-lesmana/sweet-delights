<h1>Transactions</h1>
<ul>
    @if (sizeof($transactions) == 0)
        <img src="http://memegen.link/custom/No Transactions%3F.jpg?alt=https://i.imgflip.com/6aoqqy.jpg" width="200px">
    @else
        @foreach ($transactions as $transaction)
            <li> TR{{$transaction->transactionHeader->id}} {{date_format($transaction->created_at, "Y-m-d")}} {{$transaction->item->name}} [x{{$transaction->qty}}] ${{$transaction->item->price * $transaction->qty}}</li>
        @endforeach
    @endif
</ul>