<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">XiAO DiNG DoNG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link active" href="/search">Search Food</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link active" href="/cart">Cart</a>
                </li>
            
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false`">
                        Welcome, Xiao User
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Transaction History</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<body style="color: gold">
    <h1>
        菜单 | Menu
    </h1>
    <button type="button" class="btn btn-secondary" style="font-size: 15px">
        主菜 | Main Course
    </button>
    <button type="button" class="btn btn-secondary" style="font-size: 15px">
        饮料 | Beverages
    </button>
    <button type="button" class="btn btn-secondary" style="font-size: 15px">
        甜点 | Desserts
    </button>

    <div class="d-grid gap-2" style="margin-top: 10px; margin-bottom: 10px">
        <button class="btn btn-dark active" type="button" style="background-color: black; font-size: 20px" disabled>
            主菜 | Main Course
        </button>
    </div>

    <div class=grid>
        <div class=row>
            @foreach ($main_dishes as $main_dish)
            <div class="col-4">
                <a href="/item/{{$main_dish->id}}">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px" >
                    <img src="{{$main_dish->picture}}" style="height: 215px; width: 430px; object-fit: cover">
                    <p style="color: gold; margin: auto; font-size: 20px">{{$main_dish->name}}</p>
                </button>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div class="d-grid gap-2" style="margin-top: 10px; margin-bottom: 10px">
        <button class="btn btn-dark active" type="button" style="background-color: black; font-size: 20px" disabled>
            饮料 | Beverages
        </button>
    </div>

    <div class=grid>
        <div class=row>
            @foreach ($beverages as $beverage)
            <div class="col-4">
                <a href="/item/{{$beverage->id}}">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px" >
                    <img src="{{$beverage->picture}}" style="height: 215px; width: 430px; object-fit: cover">
                    <p style="color: gold; margin: auto; font-size: 20px">{{$beverage->name}}</p>
                </button>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div class="d-grid gap-2" style="margin-top: 10px; margin-bottom: 10px">
        <button class="btn btn-dark active" type="button" style="background-color: black; font-size: 20px" disabled>
            甜点 | Desserts
        </button>
    </div>

    <div class=grid>
        <div class=row>
            @foreach ($desserts as $dessert)
            <div class="col-4">
                <a href="/item/{{$dessert->id}}">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px" >
                    <img src="{{$dessert->picture}}" style="height: 215px; width: 430px; object-fit: cover">
                    <p style="color: gold; margin: auto; font-size: 20px">{{$dessert->name}}</p>
                </button>
                </a>
            </div>
            @endforeach
        </div>
    </div>