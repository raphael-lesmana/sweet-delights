@extends('include.navbar')

@section('title', 'Checkout')

@section('content')
<div class="card text-gold col-6 mx-auto mb-3" style="background-color:black; color: gold; font-size: 30px; text-align: center;">
    查看 | Checkout
</div>

<div>
    <p class="col-6 mx-auto" style="color: white; font-size: 25px">Billing Information</p>
    <form action="/settings" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="row col-6 mx-auto">
            <div class="col-md-6 mb-3" style="text-align:left">
                <label for="name" class="form-label" style="color: gold; font-size: 20px">
                    <div class="card text-gold" style="background-color: black">Username</div>
                </label>
                <input type="text" class="form-control" name="name" placeholder="Minimum 5 characters">
            </div>

            <div class="col-md-6 mb-3" style="text-align:left">
                <label for="email" class="form-label" style="color: gold; font-size: 20px">
                    <div class="card text-gold" style="background-color: black">Email</div>
                </label>
                <input type="email" class="form-control" name="email" placeholder="Must end with '@gmail.com'">
            </div>
        </div>

        <div class="col-4 mb-3 mx-auto" style="text-align:left">
            <label for="phone" class="form-label" style="color: gold; font-size: 20px">
                <div class="card text-gold" style="background-color: black">Phone Number</div>
            </label>
            <input type="text" class="form-control" name="phone" placeholder="Must contain 12 digits">
        </div>
        
        <div class="col-4 mb-3 mx-auto" style="text-align:left">
            <label for="address" class="form-label" style="color: gold; font-size: 20px">
                <div class="card text-gold" style="background-color: black">Address</div>
            </label>
            <input type="text" class="form-control" name="address" placeholder="Not mandatory, minimum 5 characters">
        </div>

        <div class="col-4 mb-3 mx-auto" style="text-align:left">
            <label for="picture" class="form-label" style="color: gold; font-size: 20px">
                <div class="card text-gold" style="background-color: black">Profile picture</div>
            </label>
            <input type="file" class="form-control" name="picture">
        </div>

        <div class="col-4 mb-3 mx-auto" style="text-align:left">
            <label for="currpassword" class="form-label" style="color: gold; font-size: 20px">
                <div class="card text-gold" style="background-color: black">Current Password</div>
            </label>
            <input type="password" class="form-control" name="currpassword" placeholder="Has to be the same as the current password">
        </div>

        <div class="col-4 mb-3 mx-auto" style="text-align:left">
            <label for="newpassword" class="form-label" style="color: gold; font-size: 20px">
                <div class="card text-gold" style="background-color: black">New Password</div>
            </label>
            <input type="password" class="form-control" name="newpassword" placeholder="5-255 characters">
        </div>

        <div class="col-4 mb-3 mx-auto" style="text-align:left">
            <label for="conpassword" class="form-label" style="color: gold; font-size: 20px">
                <div class="card text-gold" style="background-color: black">New Password</div>
            </label>
            <input type="password" class="form-control" name="conpassword" placeholder="Must be the same as the new password">
        </div>
        
        <div class="col-4 mx-auto" style="text-align:right">
            <button class="btn btn-dark" type="submit" style="color: gold; background-color: black">Update Profile</button>
        </div>
    </form>
</div>


<button class="btn btn-dark" style="width: 655px; color: gold; margin-bottom: 30px">查看 | Checkout</button>
<p style="color: white">Billing Information</p>
<form action="/checkout" method="POST">
    @csrf
    <div class="grid">
        <div class="row">
            <div class="col-6">
                <label>Full name</label>
                <input type="text" style="width: 300px; margin-bottom: 10px" name="full_name" placeholder="Min 5 Characters"><br>

                <label>Country</label>
                <input type="text" style="width: 300px; margin-bottom: 10px" name="country" placeholder="Afghanistan"><br>

                <label>Card Name</label>
                <input type="text" style="width: 300px; margin-bottom: 10px" name="card_name" placeholder="Min 3 Characters">
            </div>

            <div class="col-6">
                <label>Phone Number</label>
                <input type="text" style="width: 300px; margin-bottom: 10px" name="phone" placeholder="Has to be 12 numbers"><br>

                <label>City</label>
                <input type="text" style="width: 300px; margin-bottom: 10px" name="city" placeholder="Min 5 Characters"><br>

                <label>Card Number</label>
                <input type="text" style="width: 300px; margin-bottom: 10px" name="number" placeholder="Must be numerical and have 16 characters">
            </div>
        </div>
    </div>
    <p style="color: white">Additional Information</p>
    <label>Address</label>
    <textarea type="text" style="width: 650px; margin-bottom: 10px" placeholder="Min 5 Characters"  name="address"></textarea><br>
    <label>Zip/Postal Code</label>
    <input type="number" style="width: 650px" placeholder="Fill with number only" name="zip"><br>
    <button>Order</button>
</form>
@endsection