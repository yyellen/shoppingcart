<?php
require_once("../db_connect.php");
$id = $_GET["id"];
$sql = "SELECT * FROM shop_products WHERE id=$id AND valid=1";
$result = $conn->query($sql);
$product = $result->fetch_assoc();
?>

<!doctype html>
<html lang="en">

<head>
    <title>商品 | product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- boostrap icon cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">


    <style>
    body {
        color: #121212;
        font-family: 'Noto Sans SC', sans-serif;
        background-color: #EEE;
    }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php"><img src="img/logo.svg" alt="" width="30" height="30"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
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


    <header class="container m-3 card shadow-sm mx-auto">
        <div class="container">
            <div class="row">
                <!-- 相片 -->
                <div class="col-md-4 p-3 d-flex align-items-center">
                    <img class="card-img-top d-block mx-auto" src=<?= $product["image"] ?>>
                </div>
                <!-- 相片 -->

                <!-- 商品內容 -->
                <div class="col-md-8 ">

                    <!-- 商品資訊 -->
                    <div class="mt-3">
                        <h1 class="fs-1 fw-bolder">
                            <?= $product["name"] ?>
                        </h1>

                        <div class="fs-6">
                            <p class="text-decoration-line-through"> 原價 $
                                <?= $product["o-price"] ?>
                            </p>
                            <p class="fs-5 text-danger fw-bolder">優惠價$
                                <?= $product["price"] ?>
                            </p>
                        </div>

                    </div>
                    <!-- 商品資訊 -->

                    <!-- 訂購按鈕 -->
                    <label class="small fw-bolder pt-5">購買數量</label>

                    <div>
                        <div class="input-group" role="group" aria-label="Basic mixed styles example">
                            <button id="min" class="btn border-danger text-danger col-1" type="button" value="-">-
                            </button>
                            <input id="num" name="num" class="btn border-danger text-dark col-2 " type="text" value="1"
                                readonly>
                            <buttont id="add" class="btn border-danger text-danger col-1" value="+">+
                            </buttont>
                            <label class="px-3 d-flex align-items-bottom"><small>庫存數量：<?= $product["qty"] ?></small>
                            </label>
                        </div>
                        <button class="btn btn-danger mt-3 add-btn">加入購物車</button>
                    </div>

                    </p>
                    <p id="message" class="text-success"></p>

                </div>
                <!-- 訂購按鈕 -->

            </div>
            <!-- 商品內容 -->

        </div>
        </div>
    </header>

    <section>
        <div class="container card shadow-sm p-3">
            <hr>
            <div class="container pt-2 pb-5">
                <h2 class="fs-3 fw-bolder text-danger">商品詳細介紹</h2>
                <div class="align-items-center justify-content-center ">
                    <?= $product["desc"] ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 頁尾資訊 -->
    <div class="container-fluid mt-3 card">
        <footer class="py-1 container">
            <div class="row p-3">
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

                <div class="col-4">
                    <h6>聯絡我們</h6>
                    <div>
                        <p>電子信箱：test@test.com</p>
                        <p>電話：02-1234-5678</p>
                        <p>傳真：02-1234-5678</p>
                        <p>通訊地址：台北市信義區OOOOOOOOOOOOO</p>
                    </div>
                </div>
                <div class="col-2">
                    <h6>社群</h6>
                    <p><i class="bi bi-facebook pe-2"></i> Facebook</p>
                    <p><i class="bi bi-github pe-2"></i>Github</p>
                    <p><i class="bi bi-line pe-2"></i>Line</p>
                    <p><i class="bi bi-envelope-fill pe-2"></i>test@test.com</p>
                </div>
            </div>

            <div class="d-flex border-top">
                <p>&copy; 2021 Company, Inc. All rights reserved.</p>
            </div>
        </footer>


        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>

        <!-- JQery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js"></script>

        <script>
        $(".add-btn").click(function() {
            let id = $(this).data("id");
            //console.log(id)
            let formData = new FormData();
            formData.append('id', id);
            axios({
                method: "post",
                url: "/shoppingcart/api/add-cart.php",
                data: formData,
                headers: {
                    'Content-Type': "multipart/form-data"
                }
            }).
            then(function(response) {
                    console.log(response.data)
                })
                .catch(function(response) {
                    console.log(response)
                })
            $("#message").text("已加入購物車");
        })

        var min = document.getElementById("min");
        var add = document.getElementById("add");
        var num = document.getElementById("num");

        min.onclick = function() {
            if (num.value > 1) {
                num.value = parseInt(num.value) - 1;
            }
        }


        add.onclick = function() {
            if (num.value < <?= $product["qty"] ?>) {
                num.value = parseInt(num.value) + 1;
            }

            if (num.value == <?= $product["qty"] ?>) {
                alert("已達庫存上限");
            }
        }
        </script>
</body>

</html>