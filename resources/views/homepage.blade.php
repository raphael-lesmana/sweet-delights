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
                    <a class="nav-link active" aria-current="page" href="homepage">Home</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link active" href="search">Search Food</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link active" href="#">Cart</a>
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

<div class="bg-image" style="background-image: url('https://media.istockphoto.com/id/1005545622/id/vektor/batas-mulus-dengan-awan-cina.jpg?s=170667a&w=0&k=20&c=NYFCS0Lv0cSUzLMQlnnQ1D8cH_29OM61978W56KIhCU=');">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);"></div>
</div>

<body style="color: gold">
    
    
    <div style="background-image:  
                background-color: rgba(0, 0, 0, 0.6)"></div>

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
            <div class="col-4">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px" >
                    <img src="https://i0.wp.com/www.angsarap.net/wp-content/uploads/2014/03/sweet-and-sour-pork-wide.jpg?ssl=1" style="height: 215px; width: 430px; object-fit: cover">
                    <p style="color: gold; margin: auto; font-size: 20px">Sweet and Sour Pork</p>
                </button>    

                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGAPgZKK5wf3N0GhXFUk_bdnoD3npOH-HLBQ&usqp=CAU" style="height: 215px; width: 430px; object-fit: cover">
                    <p style="color: gold; margin: auto; font-size: 20px">Mapo Tofu</p>
                </button>   
            </div>

            <div class="col-4">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px">
                    <img src="https://hips.hearstapps.com/del.h-cdn.co/assets/16/15/1280x640/landscape-1460722691-delish-general-tso.jpg?resize=640:*" style="height: 215px; width: 430px; object-fit: cover">
                    <p style="color: gold; margin: auto; font-size: 20px">General Tso's Chicken</p>
                </button>   
                
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px">
                    <img src="https://media.istockphoto.com/id/186858925/photo/orange-chicken.jpg?s=612x612&w=0&k=20&c=g_YfN7x4NKBOwlLZ0iJDAlslWN7eNpGRAJcR3zK6LPg=" style="height: 215px; width: 430px; object-fit: cover">
                    <p style="color: gold; margin: auto; font-size: 20px">Orange Chicken</p>
                </button>  
            </div>
        
            <div class="col-4">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px">
                    <img src="https://www.tasteasianfood.com/wp-content/uploads/2017/02/Mongolian-beef-featured-image.jpg.webp" style="height: 215px; width: 430px; object-fit: cover">
                    <p style="color: gold; margin: auto; font-size: 20px">Mongolian Beef</p>
                </button>   

                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px">
                    <img src="https://media.istockphoto.com/id/1130549566/photo/sesame-chicken-pieces-with-rice-on-a-ceramic-plate-chinese-traditional-dish.jpg?s=612x612&w=0&k=20&c=JCXxNdFzrSn3FFRVBtTgoRTDVhgckHUdBZWDtPtFdW8=" style="height: 215px; width: 430px; object-fit: cover">
                    <p style="color: gold; margin: auto; font-size: 20px">Sesame Chicken</p>
                </button>  
            </div>
        </div>
    </div>

    <div class="d-grid gap-2" style="margin-top: 10px; margin-bottom: 10px">
        <button class="btn btn-dark active" type="button" style="background-color: black; font-size: 20px" disabled>
            饮料 | Beverages
        </button>
    </div>

    <div class=grid>
        <div class=row>
            <div class="col-4">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px" >
                    <img src="https://www.chinesetea4u.com/wp-content/uploads/2020/11/501379033923.jpg" style="height: 215px; width: 430px; object-fit: cover">
                    <p style="color: gold; margin: auto; font-size: 20px">Chinese Tea</p>
                </button>     
            </div>

            <div class="col-4">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px">
                    <img src="https://images.deliveryhero.io/image/fd-my/LH/s8rn-hero.jpg" style="height: 215px; width: 430px; object-fit: cover">
                    <p style="color: gold; margin: auto; font-size: 20px">Liang Tea</p>
                </button>    
            </div>
        
            <div class="col-4">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px">
                    <img src="https://chatelaine.com/wp-content/uploads/2022/05/soy-milk.jpg" style="height: 215px; width: 430px; object-fit: cover">
                    <p style="color: gold; margin: auto; font-size: 20px">Soybean Milk</p>
                </button>  
            </div>
        </div>
    </div>

    <div class="d-grid gap-2" style="margin-top: 10px; margin-bottom: 10px">
        <button class="btn btn-dark active" type="button" style="background-color: black; font-size: 20px" disabled>
            甜点 | Desserts
        </button>
    </div>

    <div class=grid>
        <div class=row>
            <div class="col-4">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px" >
                    <img src="https://christieathome.com/wp-content/uploads/2020/12/Tofu-Pudding-14-scaled.jpg" style="height: 215px; width: 430px; object-fit: cover">
                    <p style="color: gold; margin: auto; font-size: 20px">Silky Tofu Pudding</p>
                </button>     
            </div>

            <div class="col-4">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px">
                    <img src="https://omnivorescookbook.com/wp-content/uploads/2022/09/220907_Chinese-Pumpkin-Cake_2.jpg" style="height: 215px; width: 430px; object-fit: cover">
                    <p style="color: gold; margin: auto; font-size: 20px">Pumpkin Cake</p>
                </button>    
            </div>
        
            <div class="col-4">
                <button class="btn btn-dark active" type="button" style="background-color: black; margin-top: 10px; margin-bottom: 10px">
                    <img src="https://takestwoeggs.com/wp-content/uploads/2022/02/Sesame-Balls-with-red-bean-paste-sq-500x500.jpg" style="height: 215px; width: 430px; object-fit: cover">
                    <p style="color: gold; margin: auto; font-size: 20px">Sesame Balls</p>
                </button>  
            </div>
        </div>
    </div>
</body>

</html>