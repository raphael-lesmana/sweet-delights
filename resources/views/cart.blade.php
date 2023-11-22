@extends('include.navbar')

@section('title', 'Your Cart')

@section('content')

<div style="margin-left: 100px; margin-top: 25px; margin-right: 100px">
    <h1 style="color: gold; margin-bottom: 30px">你的购物车 | Your Cart</h1>
    <?php $total = 0 ?>
    <div class="card" style="text-align: center; background-color: grey">
        <h4 class="mt-3" style="color: gold">Your cart is empty...</h4>
        <p>Looks like your cart is on a diet! Don't worry, our delicious dishes are just a few clicks away. 
            Start filling up your cart and let the feast begin!
        </p>
    </div>
    
    <ul>
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
</div>

@endsection