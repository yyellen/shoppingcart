<?php
// $name=$_GET["name"];
// $EMAIL=$_GET["email"];

$name=$_POST["name"];
$EMAIL=$_POST["email"];

$data=[
    "name"=>$name,
    "email"=>$EMAIL
];
// var_dump($data);
echo json_encode($data)
?>