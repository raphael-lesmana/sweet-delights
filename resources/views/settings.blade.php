@extends('include.navbar')

@section('title', 'Edit Profile')

@section('content')
<div class="card text-gold col-6 mx-auto mb-3" style="background-color:black; color: gold; font-size: 30px; text-align: center;">
    编辑个人资料 | Edit Profile
</div>

<div>
    <form action="/settings" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="exampleInputEmail1" class="form-label" style="color: gold; background-color:black;">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="col-6 mb-3 mx-auto" style="text-align:left">
            <label for="exampleInputEmail1" class="form-label" style="color: gold; font-size: 20px"><span class="badge bg-dark text-gold">Email address</span></label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <input type="hidden" name="_method" value="PATCH">
        <label for="name">Username</label>
        <input type="text" name="name" placeholder="Minimum 5 characters"> <br>
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Must end with '@@gmail.com'"> <br>
        <label for="phone">Phone Number</label>
        <input type="text" name="phone" placeholder="Must contain 12 digits"> <br>
        <label for="address">Address</label>
        <input type="text" name="address" placeholder="Not mandatory, minimum 5 characters"> <br>
        <label for="picture">Profile picture</label>
        <input type="file" name="picture"><br>
        <label for="newpassword">New Password</label>
        <input type="password" name="newpassword" placeholder="5-255 characters"> <br>
        <label for="conpassword">Confirm Password</label>
        <input type="password" name="conpassword" placeholder=""> <br>
        <label for="curpassword">Current Password</label>
        <input type="password" name="curpassword" placeholder="Has to be the same as the current password"> <br>
        <button>Save</button>
    </form>
</div>
@endsection