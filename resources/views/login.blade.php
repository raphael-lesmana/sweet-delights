<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./app.css" rel="stylesheet">
</head>

<body style="background-color: black">
    @if ($errors->any())
    <div class="row justify-content-center">
        <div class="col-4 z-4 position-absolute">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
    @endif
    <div class="grid z-3">
        <div class="row">
            <div class="col-8 guest-background "></div>
            <div class="col-4 mx-auto" style="width:450px; margin-top: 150px; color:white;">
                <h1 class="text-center">Login</h1>
                <form action="/login" method="post">
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
                        <input type="checkbox" style="width: 18px; height:18px" id="rememberMe" class="form-check-input" name="remember">
                        <label for="rememberMe" class="form-check-label">Remember Me</label>
                    </div>
                    <button type="sub`mit" class="btn btn-secondary mb-4" style="width: 400px">Login</button>
                    <div class="mb-4" style="">
                        <p class="text-center">Don't have an account?  <a class="text-decoration-none" style="color: yellow" href="register">Sign up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>