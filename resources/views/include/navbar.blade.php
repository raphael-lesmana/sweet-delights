<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar" style="font-weight: bold;">
        <div class="container-fluid"> 
            <img src="/storage/asset/img/logo-entre.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            <a class="navbar-brand" href="/" style="color:black; font-weight: bold">
                Sweet Delights
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    @auth
                    @if (!Gate::allows('admin'))
                    <li class="nav-item">
                        <a class="nav-link active" href="/order">Order</a>
                    </li>
                
                    <!-- <li class="nav-item">
                        <a class="nav-link active" href="/cart">Cart</a>
                    </li> -->
                    @else
                    <li class="nav-item">
                        <a class="nav-link active" href="/history">Transaction History</a>
                    </li>
                    @endif
                </ul>
            </div>  
                    
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav" style="margin-left:auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false`" style="color: black;">
                            Welcome, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink" style="background-color: white">
                            <li><a class="dropdown-item" href="/profile" style="color: black">Profile</a></li>
                            @if (!Gate::allows('admin'))
                            <li><a class="dropdown-item" href="/history" style="color: black">Transaction History</a></li>
                            @endif
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/logout" style="color: black">Sign Out</a></li>
                        </ul>
                    </li>
                    @endauth
                    @guest
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="/login" style="color:black">Log In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/register" style="color:black">Register</a>
                            </li>
                        </ul>
                    @endguest
                </ul>
            </div>
        </div>
    </nav> 
    
<div class="bg-image" 
    style="background-image: url(/storage/asset/img/background.png); height: 100vh; overflow: scroll; background-repeat: no-repeat;
  background-size: cover;">
    <div class="mask">
        <div style="margin-top: 25px; margin-left: 100px; margin-right: 100px">
            @yield('content')
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>