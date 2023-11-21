@extends('include.navbar')

@section('title', 'Search Foods')

@section('content')

<div style="margin-left: 100px; margin-top: 25px">
    <h1 style="color: gold; margin-bottom: 30px">搜索食物 | Search Foods</h1>
    <form style="margin-bottom: 30px" action="/search" method="get">
        @csrf
        <div class="mb-3">
            <input class="form-control me-2" type="search" placeholder="Search" name="search" style="width: 700px">
        </div>
        <div class = "mb-3 radio-inline" style="color: white">
            <input type="checkbox" id="main-course" class = "form-check-input" style="margin-left: 10px" name="main">
            <label for="main-course" class="form-check-label" >Main Course</label>

            <input type="checkbox" id="beverages" class = "form-check-input" style="margin-left: 10px" name="beverages">
            <label for="beverages">Beverages</label>

            <input type="checkbox" id="dessert" class = "form-check-input" style="margin-left: 10px" name="dessert">
            <label for="dessert">Dessert</label>
        </div>
        <button class="btn btn-dark">Search</button>
    </form> 
</div>

@if (sizeof($products) > 0)
<ul>
@foreach ($products as $product)
    <li>{{ $product->name }}</li>
@endforeach
</ul>
@else

<div class="d-grid gap-2" style="margin-top: 10px; margin-bottom: 10px; margin-left: 100px; margin-right: 100px">
        <button class="btn btn-dark active" type="button" style="background-color: grey; font-size: 20px" disabled>
            Food is not available
        </button>
</div>

@endif

@endsection