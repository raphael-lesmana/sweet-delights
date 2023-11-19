<h1>Search results</h1>
@if (sizeof($products) > 0)
<form action="/manage" method="POST">
@csrf
<ul>
@foreach ($products as $product)
    <li>{{ $product->name }} <button name="delete" value="{{ $product->id }}">Delete</button> <a href="/update/{{ $product->id }}"><button>Update</button></a></li>
@endforeach
</ul>
</form>
@else
Not found
@endif