<?php
session_start();
if(isset($_SESSION["shop_user"])){
  // location待確定
  header("location: dashboard.php");
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>登入頁面 | login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">

  <!-- boostrap icon cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <style>
    body {
      color: #121212;
      background: #eee;
      font-family: 'Noto Sans SC', sans-serif;
    }

    .login-panel {
      width: 300px;
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

  <div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="login-panel card p-3">
      <!-- 加入action -->
      <form id="login" action="#" method="post">
        <h2 class="text-center">登入 | Login</h2>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="account" placeholder="account" name="account">
          <label for="account">帳號 | Account</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="pwd" placeholder="pwd" name="pwd">
          <label for="password">密碼 | Password</label>
        </div>
        <div class="mb-2 text-danger">
        </div>
        <div class="d-grid">
          <!-- 為什麼用input不用button -->
        <input type="button" value="登入" class="btn btn-danger mt-3 mb-3" onClick="err_alert();">
        </div>
      </form>
      
    </div>
    <!--login-panel-->
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


<script type="text/javascript">
  function err_alert() {
    var form = document.getElementById('login');
    var account = document.getElementById('account');
    var pwd = document.getElementById('pwd');
    var msg = "";
    var err = 0;
    if (account.value == null || account.value == "" || account.value.length < 1) {
      //alert("請輸入暱稱");
      msg += "請輸入帳號\n";
      err = 1;
    }

    if (pwd.value == null || pwd.value == "" || pwd.value.length < 8) {
      //alert("請輸入暱稱");
      msg += "請輸入8位數以上的密碼\n";
      err = 1;
    }

    if (err == 1) {
      alert(msg);
    }

    else {
      form.action = "";
      form.submit(doLogin.php);
    }
  }

</script>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>

</html>