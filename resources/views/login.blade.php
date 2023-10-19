<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: black">
    <div class="grid">
        <div class="row">
            <div class="col-8">
                <img src="https://media.istockphoto.com/id/545286388/id/foto/latar-belakang-kosong-makanan-cina.jpg?s=612x612&w=0&k=20&c=cP30wn8oY16u-7wAe_vlnDhDNaGpRuFYtDDKDHKLMQk=" style="height: 620px; width: 800px; object-fit:cover">
            </div>
                
            <div class="col-4" style="margin-top: 150px; color:white; margin-left: -20px">
                <h1 style="color: white; text-align: center">Login</h1>
                <form>
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control" placeholder="Has to end with @gmail.com" name="email" required style="width: 400px">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control" placeholder="Minimum 5 Characters, Maximum 255 Characters" name="password" required style="width: 400px">
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" style="width: 18px; height:18px" id="rememberMe" class="form-check-input">
                        <label for="rememberMe" class="form-check-label">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-secondary mb-4" style="width: 400px">Login</button>
                    <div class="mb-4" style="text-align: center">
                        <p>Don't have an account?  <a class="text-decoration-none" style="color: yellow" href="register">Sign up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>