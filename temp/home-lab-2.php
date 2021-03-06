<?php
require_once("../db_connect.php");
$sql="SELECT * FROM shop_products WHERE valid=1 ORDER BY id ASC";
$result = $conn->query($sql);
$products=$result->fetch_all(MYSQLI_ASSOC);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>首頁 | Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- boostrap icon cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">



    <style>
        body{
           font-family: 'Noto Sans SC', sans-serif;
            background-color: #eee;
            color: #121212;
        }

        header{
            width: 70%;
            height: 100%;
        }

        section{
            background-color: #FFF;
        }



    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo.svg" alt="" width="30" height="30"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <div class="m-1">
                    <!-- 登入前顯示 -->
                    <a href="#" class="btn btn-danger mx-1">登入</a>
                    <a href="#" class="btn btn-danger mx-1">註冊</a>
                    <!-- 登入後顯示 -->
                    <a href="#" class="btn btn-danger mx-1"><i class="bi bi-cart-fill"></i> 購物車</a>
                    <a href="#" class="btn btn-danger mx-1">登出</a>
                </div>
            </div>
            

        </div>
    </nav>

<div class="container">

    <!-- bannerc幻燈片 -->
    <header class="container p-3 col-10 ">
        <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/banner_1.png"  class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/banner_2.png"  class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/banner_3.png"  class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/banner_4.png"  class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/banner_5.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <!-- bannerc幻燈片 -->

    <!-- <div class="row p-3 container"> -->
        <!-- 側邊分類欄 -->
        <!-- <aside class="col-md-3">
            <div class="card-header">
            商品分類
            </div>
            <div class="col">
            <ul class="list-group list-group-flush col">
                <li class="list-group-item">男性服飾</li>
                <li class="list-group-item">女性服飾</li>
                <li class="list-group-item">包包配件</li>
                <li class="list-group-item">男女鞋</li>
                <li class="list-group-item">化妝品</li>
                <li class="list-group-item">運動健身用品</li>
                <li class="list-group-item">戶外用品</li>
                <li class="list-group-item">書籍雜誌期刊</li>
                <li class="list-group-item">美食</li>
                <li class="list-group-item">電玩用品</li>
                <li class="list-group-item">家電影音</li>
                <li class="list-group-item">手機周邊</li>
                <li class="list-group-item">電腦周邊</li>
                <li class="list-group-item">寵物用品</li>
            </ul>
            </div>
        </aside> -->
        <!-- 側邊分類欄 -->
        
        <!-- 商品區 -->
        <section class=" container-fluid p-2 card shadow-sm">
            <div class="gx-5 ">
                    <h2 >活動商品</h2>
                    <div class="row-cols-1 row-cols-lg-4 row-cols-md-2 card-group">
                    
                    <?php foreach($products as $product): ?>
                        <div class="col p-1">
                            <div class="card p-1"> 
                                <img src=<?=$product["image"]?> class="d-block w-100">
                                <h5><?=$product["name"]?></h5>
                                <h6>$<?=$product["price"]?></h6>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    
                    </div>

            </div>

            <div class="pt-2">
                    <h2>熱門商品</h2>
                    <div class="row-cols-1 row-cols-lg-4 row-cols-md-2 card-group">
                        <div class="col p-1">
                            <div class="card p-1">
                                <img src="https://fakeimg.pl/300x300/?retina=1&text=活動banner1" class="d-block w-100" alt="...">
                                <h5>商品名稱</h5>
                                <h6>商品價錢</h6>
                            </div>
                        </div>
                        <div class="col p-1">
                            <div class="card p-1">
                                <img src="https://fakeimg.pl/300x300/?retina=1&text=活動banner1" class="d-block w-100" alt="...">
                                <h5>商品名稱</h5>
                                <h6>商品價錢</h6>
                            </div>
                        </div>
                        <div class="col p-1">
                            <div class="card p-1">
                                <img src="https://fakeimg.pl/300x300/?retina=1&text=活動banner1" class="d-block w-100" alt="...">
                                <h5>商品名稱</h5>
                                <h6>商品價錢</h6>
                            </div>
                        </div>
                        <div class="col p-1">
                            <div class="card p-1">
                                <img src="https://fakeimg.pl/300x300/?retina=1&text=活動banner1" class="d-block w-100" alt="...">
                                <h5>商品名稱</h5>
                                <h6>商品價錢</h6>
                            </div>
                        </div>
                    
                    </div>

            </div>

            <div class="pt-2">
                    <h2>最新上架</h2>
                    <div class="row-cols-1 row-cols-lg-4 row-cols-md-2 card-group">
                        <div class="col p-1">
                            <div class="card p-1">
                                <img src="https://fakeimg.pl/300x300/?retina=1&text=活動banner1" class="d-block w-100" alt="...">
                                <h5>商品名稱</h5>
                                <h6>商品價錢</h6>
                            </div>
                        </div>
                        <div class="col p-1">
                            <div class="card p-1">
                                <img src="https://fakeimg.pl/300x300/?retina=1&text=活動banner1" class="d-block w-100" alt="...">
                                <h5>商品名稱</h5>
                                <h6>商品價錢</h6>
                            </div>
                        </div>
                        <div class="col p-1">
                            <div class="card p-1">
                                <img src="https://fakeimg.pl/300x300/?retina=1&text=活動banner1" class="d-block w-100" alt="...">
                                <h5>商品名稱</h5>
                                <h6>商品價錢</h6>
                            </div>
                        </div>
                        <div class="col p-1">
                            <div class="card p-1">
                                <img src="https://fakeimg.pl/300x300/?retina=1&text=活動banner1" class="d-block w-100" alt="...">
                                <h5>商品名稱</h5>
                                <h6>商品價錢</h6>
                            </div>
                        </div>
                    
                    </div>
            </div>
        </section>
        <!-- 商品區 -->
    </div>

<div class="container-fluid mt-3 card">
    <footer class="py-5">
        <div class="row">
            <div class="col-2">
                <h6>客服中心</h6>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQ</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">招商專區</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">徵才資訊</a></li>
                </ul>
            </div>

            <div class="col-2">
                <h6>關於我們</h6>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">品牌故事</a></li>
                </ul>
            </div>

            <div class="col-2">
                <h6>金流服務</h6>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                </ul>
            </div>

            <div class="col-4 offset-1">
                <form>
                    <h6>聯絡我們</h6>
                    <div>
                        <p>電子信箱：test@test.com</p>
                        <p>電話：02-1234-5678</p>
                        <p>傳真：02-1234-5678</p>
                        <p>通訊地址：台北市信義區OOOOOOOOOOOOO</p>
                    </div>
                    <div class="d-flex w-100 ">
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-github"></i>
                        <i class="bi bi-line"></i>
                        <i class="bi bi-envelope-fill"></i>
                        <br />
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p>&copy; 2021 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter" />
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram" />
                        </svg></a></li>
                <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook" />
                        </svg></a></li>
            </ul>
        </div>
    </footer>
</div>


</div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

  </body>
</html>