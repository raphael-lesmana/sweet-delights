@extends('include.navbar')

@section ('title', 'Search')

@section('content')

<div style="margin-left: 100px">
    <h1 style="color: gold; margin-bottom: 30px; padding-top: 20px">搜索食物 | Search Foods</h1>
    <form style="margin-bottom: 30px" action="/search" method="get">
        @csrf
        <div class="mb-3">
            <input class="form-control me-2" type="search" placeholder="Search" name="search" style="width: 700px">
        </div>

        <div class = "mb-3 radio-inline" style="color: white">

            <p>Filter By Category</p>

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
@endsection
