<?php
// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // 檢查連線
// if ($conn->connect_error) {
//   	die("連線失敗: " . $conn->connect_error);
// }else{
//   echo "連線成功";
// }
require_once("db_connect.php");
// // 檢查沒有字串，防止從網址列進入，正常管道應輸入帳號密碼
// if(!isset($_POST["account"]) || !isset($_POST["password"])){
//   echo "請透過正常管道拜訪此頁面";
//   exit;
// }

$account=$_POST["account"];
$password=md5($_POST["password"]);
$gender=$_POST["gender"];
// echo $gender;
$phones=$_POST["phones"];
$phones=array_filter($phones); // 過濾空的資料
$phones_string=implode(', ', $phones); // 會印出0900000000, 0911111111
// var_dump($phones);

// // 檢查空字串
// if(empty($account)){
//   echo "請輸入帳號";
//   exit;
// }
// if(empty($password)){
//   echo "請輸入密碼";
//   exit;
// }

// echo "account is $account, password is $password.";
//設定時區
// date_default_timezone_set("Asia/Taipei"); 
// XAMPP control→Apache→config→php.ini，修改timezone=Asia/Taipei，關閉Apache並重新啟動
$now=date('Y-m-d H:i:s');


$sql="INSERT INTO users (account, password, gender, phones, create_time, valid)
VALUES ('$account', '$password', '$gender', '$phones_string', '$now', 1)";
// echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "已成功建立新資料<br>";
  $last_id = $conn->insert_id;
  echo "id 是 $last_id";
}else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location: user-list.php");
?>