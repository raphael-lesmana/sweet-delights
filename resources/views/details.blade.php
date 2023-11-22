@extends('include.navbar')

@section('title', 'Food Description')

@section('content')
    <div class="d-grid col-6 mx-auto btn btn-dark active" style="color: gold; font-size: 25px" diasbled>
        食物细节 | Food Detail
    </div>

    <div class="card text-white bg-dark mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="storage/assets/items/{{ $item->picture }}" class="img-fluid rounded-start" alt="No Picture Found" style="object-fit: cover; height: 100%">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text">
                        <ul class="list-unstyled">
                            <li>Category</li>
                            <li>{{ $item->type }}</li>
                        </ul>
                        <ul class="list-unstyled">
                            <li>Description</li>
                            <li>{{ $item->brief_description }}</li>
                        </ul>
                    </p>
                    <p class="card-text"></p>
                    
                </div>
            </div>
        </div>
    </div>

    <h1>{{ $item->name }}</h1>
    <h2>Food Type:</h2>
    <p>{{ $item->type }}</p>
    <h2>Price</h2>
    <p>{{ $item->price }}</p>
    <h2>Brief Description</h2>
    <p>{{ $item->brief_description }}</p>
    <h2>About This Food</h2>
    <p>{{ $item->full_description }}</p>

    @auth
    @if (!Gate::allows('admin'))
    {{-- should use ajax --}}
    <form action="/item/{{$item->id}}" method="POST">
        @csrf
        <button>Order</button>
    </form>
    @endif
    @endauth
@endsection