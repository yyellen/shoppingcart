<?php
$arr[0]=1;
$arr[1]=2;
var_dump($arr);
echo "<br>";

$arr2=array(0,1,2,3);
var_dump($arr2);
echo "<br>";

// PHP5之後可以用和JS一樣的定義方式
$arr3=[0,1,2,3,4,5];
var_dump($arr3);
echo "<br>";
?>

<h3>多維陣列 把陣列放進陣列</h3>
<?php
$name=["John", "Sam", "Mary"];
$height=[180,173,165];
$weight=[83,72,50];
$students=[$name, $height, $weight];
var_dump($students);
print_r($students);
?>

<h3>關聯式陣列 資料庫格式</h3>s
<?php
// $student["name"]="John";
// $student["height"]=173;
// $student["weight"]=72;
// var_dump($student);

// 關聯式陣列定義方式
$student=[
    "name"=>"John",
    "height"=>173,
    "weight"=>72
];

/* JS寫法
let student={
    "name"="John",
    "height"=173,
    "weight"=72
}
*/

echo $student["name"]."'s height is ".$student["height"]."cm, weight is ".$student["weight"]."kg"
?>