<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log In</title>
        <link href="login.css" rel="stylesheet">
    </head>
    <body>
        <div class = "loginpage">
            <div class = "image">
                <img src = "https://media.istockphoto.com/id/545286388/id/foto/latar-belakang-kosong-makanan-cina.jpg?s=612x612&w=0&k=20&c=cP30wn8oY16u-7wAe_vlnDhDNaGpRuFYtDDKDHKLMQk=">
            </div>
            <div class = "content">
                <form>
                    <h2 class = "title">Login</h2>
                    <p>
                        Email Address
                    </p>
                    <input class = "fillIn" type = "text" placeholder = "Has to end with '@gmail.com'" name = "email" required>
                    <p>
                        Password
                    </p>
                    <input class = "fillIn" type = "text" placeholder = "Minimum 5 Characters, Maximum 255 Characters" name = "password">
                    
                    <div class = "remember">
                        <input type = "checkbox">
                        <p class = "rememberMe">Remember Me</p>
                    </div>  
                    <button type = "submit">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </body>
</html>