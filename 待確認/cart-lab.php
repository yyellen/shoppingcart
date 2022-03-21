<?php
session_start();
require_once("../db_connect.php");
?>

<!doctype html>
<html lang="en">

<head>
    <title>購物車 | cart</title>
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

    <div class="container p-3 ">
        <div class="card p-3">
            <h1>訂單詳情</h1>
            <table class="table-info table-bordered text-center">
                <thead>
                    <td>商品圖片</td>
                    <td>商品名稱</td>
                    <td>單價</td>
                    <td>數量</td>
                    <td>小計</td>
                    <td>操作</td>
                </thead>

                <!-- 迴圈寫這邊 -->
                <tbody>
                <?php
                    if(isset($_SESSION["cart"])):

                    $total=0;
                    foreach($_SESSION["cart"] as $product):
                        $product_id =key($product);
                        $value=current($product );
                        $sql="SELECT * FROM shop_products WHERE id='$product_id' ORDER BY id ASC";
                        $result = $conn->query($sql);
                        $row=$result->fetch_assoc();
                ?>
                <tr>
                    <td><img src=<?=$row["image"]?> class="d-block" style="width: 8rem;"></td>
                    <td><?=$row["name"]?></td>
                    <td class="text-end">$<?=$row["price"]?></td>
                    <td class="text-end">x<?=$value?></td>
                    <?php
                        $subtotal=$row["price"]*$value;
                        $total+=$subtotal;
                    ?>
                    <td class="text-end">$<?=$subtotal?></td>
                    <td>
                        <a href="商品頁面" class="btn btn-info">詳細</a>
                        <a href="刪除api" class="btn btn-danger">刪除</a>
                    </td>
                </tr>

                <?php
                endforeach;
                endif; //Cart 存在
                ?>
                </tbody>
                <!-- 迴圈結束 -->

                <tfoot>
                    <tr>
                        <td class="text-end" colspan="5">總價: $<?=$total?></td>
                    </tr>
                </tfoot>

            </table>

            <div class="container">
                <div class="pt-3 mx-auto align-items-center">
                    <div>
                        <h2 class="pt-5">收件資訊</h2>
                        <p>請在下列表單輸入您的收件資訊</p>
                    </div>
            
                    <form action="#" method="post">
            
                        <div class="row mb-3 pt-3">
                            <label for="inputname" class="text-right col-sm-3 col-form-label">收件人姓名</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputname">
                            </div>
                        </div>
            
                        <div class="row mb-3 pt-3">
                            <label for="inputEmail3" class="text-right col-sm-3 col-form-label">手機號碼</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3">
                            </div>
                        </div>
            
                        <div class="row mb-3 pt-3">
                            <label for="input_id" class="text-right col-sm-3 col-form-label">連絡電話</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input_id">
                            </div>
                        </div>
            
                        <div class="row mb-3 pt-3">
                            <label for="input_addres" class="text-right col-sm-3 col-form-label">收件地址</label>
                            
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input_addres">
                            </div>
                        </div>

                        <div class="row mb-3 pt-3">
                            <label for="input_addres" class="text-right col-sm-3 col-form-label">備註欄位</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input_addres">
                            </div>
                        </div>

                        <div class="row mb-3 p-3">
                            <p>請選擇取貨方式</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="711">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    7-11超商店到店
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="family">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    全家便利商店
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="OK">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    OK便利商店
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="home_delivery">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    宅配
                                </label>
                            </div>
                        </div>


                    </form>
                </div>
            </div>


            <div class="d-flex justify-content-end pt-3">
                <a type="button" class=" btn btn-danger" href="pay.php">結帳</a>
            </div>

        </div>
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


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>