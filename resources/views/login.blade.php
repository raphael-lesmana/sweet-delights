<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link href="login.css" rel="stylesheet">
</head>

<body>
    <div class="loginpage">
        <img src="https://media.istockphoto.com/id/545286388/id/foto/latar-belakang-kosong-makanan-cina.jpg?s=612x612&w=0&k=20&c=cP30wn8oY16u-7wAe_vlnDhDNaGpRuFYtDDKDHKLMQk=">
            <div class = "content">
                <h1 class = "title">Login</h1>
                <form>
                    <fieldset>
                        <label for="email">Email Address
                        <input type="email" placeholder = "Has to end with '@gmail.com'" name="email" required>
                        </label>

                        <label for="password">
                            Password
                        <input type = "text" placeholder = "Minimum 5 Characters, Maximum 255 Characters" name = "password" required>
                        </label>
                    </fieldset>
                    <fieldset>
                    <label for = "rememberMe">
                        <input type="checkbox" name="rememberMe" value="Remember Me">Remember Me
                    </label>
                    </fieldset>
                    <input type="submit" value="Login" />
                </form>
            </div>
        </div>
    </body>
</html>
