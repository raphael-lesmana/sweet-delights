@extends('include.navbar')

@section('title', 'Your Cart')

@section('content')

<div style="margin-left: 100px; margin-top: 25px; margin-right: 100px">
    <h1 style="color: gold; margin-bottom: 30px">你的购物车 | Your Cart</h1>
    <?php $total = 0 ?>
    @if($cart_items==NULL)
    <div class="card" style="text-align: center; background-color: grey">
        <h4 class="mt-3" style="color: gold">Your cart is empty...</h4>
        <p>Looks like your cart is on a diet! Don't worry, our delicious dishes are just a few clicks away. 
            Start filling up your cart and let the feast begin!
        </p>
    </div>
    @else
    <table class="table table-bordered" style="color:white">
        <thead class="table-dark" style="background-color: black">
            <tr class="table-dark" style="text-align: center">
                <th scope="col">Food</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <ul>
            @foreach ($cart_items as $cart_item)
            <tr>
                <td>{{ $cart_item->item->name }}</td>
                <td>{{ $cart_item->item->price }}</td>
                <td>{{ $cart_item->qty }}</td>
                <td>{{ $cart_item->item->price }}*{{ $cart_item->qty }}</td>
                <td><button type="submit" class="btn btn-dark">Remove</button></td>
            </tr>
            $total += {{ $cart_item->item->price }}
            @endforeach
        </ul>
        </tbody>
    </table>

    <span style="text-align: right">Total: {{ $total }}</span>
    <a href="/checkout"><button>Proceed to Checkout</button></a>
    <br>
    <ul style="color:white">
    <?php
    foreach ($cart_items as $cart_item)
    {
        echo '<li>'. $cart_item->item->name . ' ' . $cart_item->item->price . ' ' . $cart_item->qty . '</li>';
        $total += $cart_item->item->price;
    }
    ?>
    </ul>
    <span>Total: <?php echo $total ?></span>

    <a href="/checkout"><button>Proceed to Checkout</button></a>
    @endif
</div>

@endsection