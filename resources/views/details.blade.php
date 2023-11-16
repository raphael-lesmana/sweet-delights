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