<h3>while 先判斷才做迴圈裡面事情</h3>
<?php
$a=0;
// while($a<10){
//     echo $a."<br>";
//     $a++;
// }

while($a<10): ?>
    <?=$a?><br>
<?php 
    $a++;
endwhile;
 ?>

<h3>do while 先做迴圈裡面事情才判斷</h3>
<?php
$b=0;
do{
    echo $b."<br>";
    $b++;
}while($b<10);
?>

<h3>for</h3>
<?php
for($i=0; $i<10; $i++):
    echo $i."<br>";
endfor;
 ?>

 <h3>continue 在迴圈裡面跳過某些條件</h3>
 <?php
for($i=0; $i<10; $i++){
    if($i===4){
        continue;
    }
    echo $i."<br>";
}
 ?>

<h3>break 提前終止迴圈</h3>
 <?php
for($i=0; $i<10; $i++){
    if($i===4){
        break;
    }
    echo $i."<br>";
}
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