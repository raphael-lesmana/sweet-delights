@extends('include.navbar')

@section('title', 'Order')

@section('content')
@include('include.error')
<div class="card text-gold col-8 mx-auto mb-3" style="background-color:black; color: gold; font-size: 30px; text-align: center; font-weight: bold">
    Order
</div>

<div class="col-8 mx-auto">
    <form action="/" method="POST" enctype="multipart/form-data">
    @csrf
    <p class="mb-1" style="color: white; font-size: 25px;">Delivery Information</p>
    <div class="mb-3 mx-auto" style="text-align:left">
        <label for="address" class="form-label" style="color: gold; font-size: 20px">
            <div class="card text-gold" style="background-color: black">Address</div>
        </label>
        <textarea class="form-control" name="address" placeholder=""></textarea>
    </div>
    
    <div class="mb-3 mx-auto" style="text-align:left">
        <label for="city" class="form-label" style="color: gold; font-size: 20px">
            <div class="card text-gold" style="background-color: black">City/Regency</div>
        </label>
        <select name="city" id="" class="form-select">
            <option value="Jakarta Barat">Jakarta Barat</option>
            <option value="Jakarta Selatan">Jakarta Selatan</option>
            <option value="Jakarta Timur">Jakarta Timur</option>
            <option value="Jakarta Utara">Jakarta Utara</option>
            <option value="Kota Bekasi">Kota Bekasi</option>
            <option value="Kabupaten Bekasi">Kabupaten Bekasi</option>
            <option value="Kota Bogor">Kota Bogor</option>
            <option value="Kabupaten Bogor">Kabupaten Bogor</option>
            <option value="Kota Depok">Kota Depok</option>
            <option value="Kota Tangerang">Kota Tangerang</option>
            <option value="Kota Tangerang">Kota Tangerang Selatan</option>
            <option value="Kabupaten Tangerang">Kabupaten Tangerang</option>
        </select>
    </div>

    <div class="row d-flex justify-content-between">
        <div class="mb-3 col" style="text-align:left">
            <label for="zip" class="form-label" style="color: gold; font-size: 20px">
                <div class="card text-gold" style="background-color: black">ZIP/Postal Code</div>
            </label>
            <input type="text" class="form-control" name="zip" placeholder="">
        </div>
        <div class="mb-3 col" style="text-align:left">
            <label for="province" class="form-label" style="color: gold; font-size: 20px">
                <div class="card text-gold" style="background-color: black">Province</div>
            </label>
            <select name="province" id="" class="form-select">
                <option value="Jakarta">Jakarta</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Tangerang">Tangerang</option>
            </select>
            <input type="text" class="form-control" name="province" placeholder="">
        </div>
    </div>

    <div class="row d-flex justify-content-start">
    <div class="mb-3 col col-4" style="text-align:left">
        <label for="quantity" class="form-label" style="color: gold; font-size: 20px">
            <div class="card text-gold" style="background-color: black">Quantity</div>
        </label>
        <input type="number" class="form-control" name="quantity" placeholder="">
    </div>
    </div>

    <p class="mb-1" style="color: white; font-size: 25px;">Jelly Art Customization</p>
    <div class="row d-flex justify-content-between">
        <div class="mb-3 col" style="text-align:left">
            <div class="card text-gold" style="background-color: black; color: gold; font-size: 20px">Top Layer</div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="lychee" placeholder="">
                <label for="lychee" class="form-check-label" style="color: white;">Lychee</label>
            </div>
            <div class="card text-gold" style="background-color: black; color: gold; font-size: 20px">Bottom Layer</div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="mango" placeholder="">
                <label for="mango" class="form-check-label" style="color: white;">Mango</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="strawberry" placeholder="">
                <label for="strawberry" class="form-check-label" style="color: white;">Strawberry</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="melon" placeholder="">
                <label for="melon" class="form-check-label" style="color: white;">Melon</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="grape" placeholder="">
                <label for="grape" class="form-check-label" style="color: white;">Grape</label>
            </div>
        </div>
        <div class="mb-3 col" style="text-align:left">
            <div class="card text-gold" style="background-color: black; color: gold; font-size: 20px">Petal Colors</div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="dark_pink" placeholder="">
                <label for="dark_pink" class="form-check-label" style="color: white;">Dark Pink</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="light_pink" placeholder="">
                <label for="light_pink" class="form-check-label" style="color: white;">Light Pink</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="orange" placeholder="">
                <label for="orange" class="form-check-label" style="color: white;">Orange</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="blue" placeholder="">
                <label for="blue" class="form-check-label" style="color: white;">Blue</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="yellow" placeholder="">
                <label for="yellow" class="form-check-label" style="color: white;">Yellow</label>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-start">
    <div class="mb-3 col col-4" style="text-align:left">
        <label for="sugar" class="form-label" style="color: gold; font-size: 20px">
            <div class="card text-gold" style="background-color: black">Sugar Level</div>
        </label>
        <input type="range" class="form-range" step="25" name="sugar">
    </div>
    </div>

    <div class="mb-3 mx-auto" style="text-align:left">
        <label for="notes" class="form-label" style="color: gold; font-size: 20px">
            <div class="card text-gold" style="background-color: black">Notes</div>
        </label>
        <textarea class="form-control" name="notes" placeholder=""></textarea>
    </div>

    <div class="row d-flex justify-content-start">
    <div class="mb-3 col col-4" style="text-align:left">
        <label for="total" class="form-label" style="color: gold; font-size: 20px">
            <div class="card text-gold" style="background-color: black">Total</div>
        </label>
        <input type="number" class="form-control" name="total" placeholder="" disabled>
    </div>
    </div>

    <div class="row d-flex justify-content-start">
        <div class="mb-3 col col-4" style="text-align:left">
            <p style="color: white;">Transfer to: 1234567890</p>
            <label for="proof" class="form-label" style="color: gold; font-size: 20px">
                <div class="card text-gold" style="background-color: black">Proof of Payment</div>
            </label>
            <input type="file" class="form-control" name="proof" placeholder="">
        </div>
    </div>

    <div style="text-align: left">
        <button type="submit" class="btn" style="color:gold; background-color: black">Cancel</button>
        <button type="submit" class="btn" style="color:gold; background-color: black">Place Order</button>
    </div>


</div>

</form>
@endsection