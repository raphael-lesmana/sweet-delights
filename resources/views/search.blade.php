<!DOCTYPE html>
<html>

<head>
    <title>Search Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: black; margin-left: 100px; margin-top: 100px">
    <h1 style="color: gold; margin-bottom: 30px">搜索食物 | Search Foods</h1>
    <form style="margin-bottom: 30px" action="/search" method="get">
        @csrf
        <div class="mb-3">
            <input class="form-control me-2" type="search" placeholder="Search" name="search" style="width: 700px">
        </div>
        <div class = "mb-3 radio-inline" style="color: white">
            <input type="checkbox" id="main-course" class = "form-check-input" style="margin-left: 10px" name="main">
            <label for="main-course" class="form-check-label" >Main Course</label>

            <input type="checkbox" id="beverages" class = "form-check-input" style="margin-left: 10px" name="beverages">
            <label for="beverages">Beverages</label>

            <input type="checkbox" id="dessert" class = "form-check-input" style="margin-left: 10px" name="dessert">
            <label for="dessert">Dessert</label>
        </div>
        <button class="btn btn-dark">Search</button>
    </form>
    
</body>


</html>