<h3>關聯式陣列</h3>
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

<h3>for each</h3>
<?php
$arr=[1,2,3,4];
// foreach($arr as $value){
//     echo $value."<br>";
// }

foreach($arr as $value):
    echo $value."<br>";
endforeach;
?>

<h3>student list</h3>
<?php
$student=[
    [
        "name"=>"John",
        "height"=>180,
        "weight"=>83
    ],
    [
        "name"=>"Sam",
        "height"=>173,
        "weight"=>72
    ],
    [
        "name"=>"Mary",
        "height"=>165,
        "weight"=>50
    ] 
];
//練習用foreach寫完
foreach($student as $value):
    echo $value."<br>";
endforeach;
?>