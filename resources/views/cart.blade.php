Test
<ul>
@foreach ($cart_items as $cart_item)
    <li>{{ $cart_item->name }} {{ $cart_item->price }} {{ $cart_item->qty }} </li>
@endforeach
</ul>