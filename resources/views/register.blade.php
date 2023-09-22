<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="register.css" rel="stylesheet">
</head>

<body>
    <div class="registerpage">
        <img src="https://media.istockphoto.com/id/545286388/id/foto/latar-belakang-kosong-makanan-cina.jpg?s=612x612&w=0&k=20&c=cP30wn8oY16u-7wAe_vlnDhDNaGpRuFYtDDKDHKLMQk=">
        <h1>Register</h1>
            <form action="/register" method="post">
                <label for = "email">Email Address</label>
                <input type = "email" placeholder = "Has to end with '@gmail.com'" name = "email" required>
                
                <label for = "username">Username</label>
                <input type = "username" placeholder = "Minimum 5 Characters, Maximum 50 Characters">
                
                <label for = "password">Password</label>
                <input type = "password" placeholder = "Minimum 5 Characters, Maximum 255 Characters">
                
                <label for = "conPassword">Confirm Password</label>
                <input type = "conPassword" placeholder = "Has to be the same with Password Field">
                
                <button type = "submit">Register</button>
            </form>
        <p>Already have an account? Login</p>
    </div>
</body>