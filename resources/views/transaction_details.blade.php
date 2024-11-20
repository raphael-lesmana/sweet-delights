@extends('include.navbar')

@section('title', 'Transaction Detail')

@section('content')
<div class="card text-gold col-8 mx-auto mb-3" style="background-color:black; color: gold; font-size: 30px; text-align: center; font-weight: bold">
    Order
</div>

<div class="col-8 mx-auto">
    <form action="/transactions/{{$id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <p class="mb-1" style="color: white; font-size: 25px;">Delivery Information</p>
    <div class="mb-3 mx-auto" style="text-align:left">
        <label for="address" class="form-label" style="color: gold; font-size: 20px">
            <div class="card text-gold" >Address</div>
        </label>
        <textarea class="form-control" name="address" placeholder=""  disabled>{{$header->destination_address}}</textarea>
    </div>
    
    <div class="mb-3 mx-auto" style="text-align:left">
        <label for="city" class="form-label" style="color: gold; font-size: 20px">
            <div class="card text-gold"  ">City/Regency</div>
        </label>
        <input type="text" class="form-control" name="city" placeholder="" value="{{$header->city}}" disabled>
    </div>

    <div class="row d-flex justify-content-between">
        <div class="mb-3 col" style="text-align:left">
            <label for="zip" class="form-label" style="color: gold; font-size: 20px">
                <div class="card text-gold" >ZIP/Postal Code</div>
            </label>
            <input type="text" class="form-control" name="zip" placeholder="" value="{{$header->zip_code}}" disabled>
        </div>
        <div class="mb-3 col" style="text-align:left">
            <label for="province" class="form-label" style="color: gold; font-size: 20px">
                <div class="card text-gold" >Province</div>
            </label>
            <input type="text" class="form-control" name="province" placeholder="" value="{{$header->province}}" disabled>
        </div>
    </div>

    <div class="row d-flex justify-content-start">
    <div class="mb-3 col col-4" style="text-align:left">
        <label for="quantity" class="form-label" style="color: gold; font-size: 20px">
            <div class="card text-gold" >Quantity</div>
        </label>
        <input type="number" class="form-control" name="quantity" placeholder="" value="{{$transaction->qty}}" disabled>
    </div>
    </div>

    <p class="mb-1" style="color: white; font-size: 25px;">Jelly Art Customization</p>
    <div class="row d-flex justify-content-between">
        <div class="mb-3 col" style="text-align:left">
            <div class="card text-gold" style="background-color: black; color: gold; font-size: 20px">Top Layer</div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="lychee" placeholder="" 
                @if (($transaction->top_layer & 1) == 1)
                    checked
                @endif
                disabled>
                <label for="lychee" class="form-check-label" style="color: white;">Lychee</label>
            </div>
            <div class="card text-gold" style="background-color: black; color: gold; font-size: 20px">Bottom Layer</div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="mango" placeholder=""
                @if (($transaction->bottom_layer & 1) == 1)
                    checked
                @endif
                disabled>
                <label for="mango" class="form-check-label" style="color: white;">Mango</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="strawberry" placeholder=""
                @if (($transaction->bottom_layer & 2) == 2)
                    checked
                @endif
                disabled>
                    <label for="strawberry" class="form-check-label" style="color: white;">Strawberry</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="melon" placeholder=""
                @if (($transaction->bottom_layer & 4) == 4)
                    checked
                @endif
                disabled>
                <label for="melon" class="form-check-label" style="color: white;">Melon</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="grape" placeholder=""
                @if (($transaction->bottom_layer & 8) == 8)
                    checked
                @endif
                disabled>
                <label for="grape" class="form-check-label" style="color: white;">Grape</label>
            </div>
        </div>
        <div class="mb-3 col" style="text-align:left">
            <div class="card text-gold" style="background-color: black; color: gold; font-size: 20px">Petal Colors</div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="dark_pink" placeholder="" 
                @if (($transaction->petal_color & 1) == 1)
                    checked
                @endif
                disabled>
                <label for="dark_pink" class="form-check-label" style="color: white;">Dark Pink</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="light_pink" placeholder=""
                @if (($transaction->petal_color & 2) == 2)
                    checked
                @endif
                disabled>
                <label for="light_pink" class="form-check-label" style="color: white;">Light Pink</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="orange" placeholder="" 
                @if (($transaction->petal_color & 4) == 4)
                    checked
                @endif
                disabled>
                <label for="orange" class="form-check-label" style="color: white;">Orange</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="blue" placeholder="" 
                @if (($transaction->petal_color & 8) == 8)
                    checked
                @endif
                disabled>
                <label for="blue" class="form-check-label" style="color: white;">Blue</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="yellow" placeholder="" 
                @if (($transaction->petal_color & 16) == 16)
                    checked
                @endif
                disabled>
                <label for="yellow" class="form-check-label" style="color: white;">Yellow</label>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-start">
    <div class="mb-3 col col-4" style="text-align:left">
        <label for="sugar" class="form-label" style="color: gold; font-size: 20px">
            <div class="card text-gold" >Sugar Level</div>
        </label>
        <input type="range" class="form-range" step="25" name="sugar" value="{{$transaction->sugar_level}}" disabled>
    </div>
    </div>

    <div class="mb-3 mx-auto" style="text-align:left">
        <label for="notes" class="form-label" style="color: gold; font-size: 20px">
            <div class="card text-gold" >Notes</div>
        </label>
        <textarea class="form-control" name="notes" placeholder="" disabled>{{$header->notes}}</textarea>
    </div>

    <div class="row d-flex justify-content-start">
    <div class="mb-3 col col-4" style="text-align:left">
        <label for="total" class="form-label" style="color: gold; font-size: 20px">
            <div class="card text-gold" >Total</div>
        </label>
        <input type="number" class="form-control" name="total" placeholder="" disabled>
    </div>
    </div>

    <div class="row d-flex justify-content-start">
        <div class="mb-3 col col-4" style="text-align:left">
            <p style="color: white;">Transfer to: 1234567890</p>
            <label for="proof" class="form-label" style="color: gold; font-size: 20px">
                <div class="card text-gold" >Proof of Payment</div>
            </label>
            <img src="/storage/asset/receipt/{{$header->receipt}}" alt="" width="200px">
        </div>
    </div>

    @if (Gate::allows('admin'))
    <div class="row d-flex justify-content-start">
    <div class="mb-3 col col-4" style="text-align:left">
        <label for="status" class="form-label" style="color: gold; font-size: 20px">
            <div class="card text-gold" >Status</div>
        </label>
        <select class="form-select" name="status" placeholder="">
            <option value="pending" 
            @if ($header->status == 'pending')
            selected
            @endif
            >Pending</option>
            <option value="cancelled"
            @if ($header->status == 'cancelled')
            selected
            @endif
            >Cancelled</option>
            <option value="processing"
            @if ($header->status == 'processing')
            selected
            @endif
            >Processing</option>
            <option value="delivery"
            @if ($header->status == 'delivery')
            selected
            @endif
            >Delivery</option>
            <option value="received"
            @if ($header->status == 'received')
            selected
            @endif
            >Received</option>
        </select>
    </div>
    </div>


    <div style="text-align: left">
        <button type="submit" class="btn" style="color:gold; background-color: black">Save</button>
    </div>    
    @endif

</div>

</form>
@endsection