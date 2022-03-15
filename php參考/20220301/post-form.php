<?php
// 檢查沒有字串，防止從網址列進入，正常管道應輸入帳號密碼
if(!isset($_POST["account"]) || !isset($_POST["password"])){
  echo "請透過正常管道拜訪此頁面";
  exit;
}

$account=$_POST["account"];
$password=$_POST["password"];

// 檢查空字串
if(empty($account)){
  echo "請輸入帳號";
  exit;
}
if(empty($password)){
  echo "請輸入密碼";
  exit;
}

echo "account is $account, password is $password.";
?>