<h1>Transactions</h1>
<ul>
    @foreach ($transactions as $transaction)
        <li>{{ $transaction->id }} {{ $transaction->item->name }} {{ $transaction->item->qty }}</li>
    @endforeach
</ul>