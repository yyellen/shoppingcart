<?php
session_start();
require_once("../db_connect.php"); //..到上一層
$account=$_POST["account"];
$password=md5($_POST["password"]);
// $password=$_POST["password"];
// $account="admin";
// $password=md5("12345");

$sql="SELECT * FROM users WHERE account = '$account' AND password = '$password'";
// echo $sql;
// exit;

if ($conn->query($sql) == TRUE) {
    $result = $conn->query($sql);
    $userCount=$result->num_rows;
    //echo $userCount;
    if($userCount>0){
        // echo "登入成功";
        $user=$result->fetch_assoc();

        $data=[
            "status"=>1,
            "account"=>$user["account"]
        ];
        $_SESSION["user"]=$data;
        unset($_SESSION["error"]);
        // var_dump($_SESSION["user"]);
        // header("location: dashboard.php");
        echo json_encode($data);
    }else{
        // echo "登入失敗";
        if(isset($_SESSION["error"]["times"])){
            $_SESSION["error"]["times"]++;
        }else{
            $_SESSION["error"]["times"]=1;
        }
        $_SESSION["error"]["message"]="帳號或密碼錯誤";

        $data=[
            "status"=>0,
            "error"=>[
                "message"=>$_SESSION["error"]["message"],
                "times"=>$_SESSION["error"]["times"]
            ]
        ];
        echo json_encode($data);
        
        // header("location: login.php");
    }
} else {
    echo "" . $conn->error;
}

?>