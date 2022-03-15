<?php
$i=0;
$i++;
echo $i."<br>";
$i+=2;
echo $i."<br>";

$str="Hello";
$str.=" World"; // $str = $str . " World";
echo $str;

echo "<br>---<br>";

// $a = 3;
// $a *=3;
// echo $a;

$a =3;
echo $a++; //3
echo "<br>";
echo $a; //4
echo "<br>";
echo ++$a; //5
echo "<br>";
echo $a; //5
?>

<h3>比較運算子</h3>
<?php
$x=77;
$y="77";

var_dump($x==$y); //==只比較值，不比較型別
echo "<br>";
var_dump($x===$y); //===會比較型別
echo "<br>";
?>

<h3>條件運算子 可以精簡if else寫法</h3>
<?php
$i=10;
// if($i>0){ }else{ }
$j=($i>0) ? "Positive" : "Negative";
echo $j;
// 變數管理，任何變數都不要用簡寫
?>

<h3>組合比較子</h3>
<h4>若 $a < $b：回傳 -1  若 $a = $b：回傳 0  若 $a > $b：回傳 1</h4>
<?php
$m=10;
$n=5;
echo $m <=> $n;
?>

<h3>邏輯運算子</h3>
<?php
$p=10;
$q=5;
var_dump($p==10 and $q==5); //and &&
echo "<br>";
var_dump($p==10 && $q==5);
echo "<br>";

$c = false || true; //or ||
var_dump($c);
echo "<br>";
$d = false or true;
var_dump($d);
echo "<br>";
?>

<h3>參考運算子</h3>
<h4>&用來取得變數的記憶體位置，而不是變數的值，所以若針對該位置做任何動作，都會影響到被參考的變數內容</h4>
<?php
$e=5;
$f=$e;
echo "e is $e<br>";
echo "f is $f<br>";
$e=8;
echo "e is $e<br>";
echo "f is $f<br>";
echo "<br>---<br>";
$g=5;
$h=&$g;
echo "g is $g<br>";
echo "h is $h<br>";
$g=8;
echo "g is $g<br>";
echo "h is $h<br>";
?>