<h1>Search results</h1>
@if (sizeof($products) > 0)
<ul>
@foreach ($products as $product)
    <li>{{ $product->name }}</li>
@endforeach
</ul>
@else
Not found
@endif