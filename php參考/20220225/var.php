<?php
// $var1=null;
// var_dump($var1);
// echo "<br>";
// $var2=3;
// var_dump($var2);



$a=99; // 全域變數
function show(){
	$b=10; // 區域變數
	static $c=1; // 靜態變數會紀錄上一次跑完已經改變的狀態
	// echo "a is $a"; // 在函式內呼叫全域變數會叫不到Undefined
	echo "a is $GLOBALS[a]";
	echo "<br>";
	echo "a is ".$GLOBALS['a'];
	echo "<br>";
	echo "b is $b";
	echo "<br>";
	echo "c is $c";
	echo "<br>";
	echo "---";
	echo "<br>";
	$b++;
	$c++;
}
echo "a is $a";
echo "<br>";
// echo "b is $b"; // 在函式外呼叫區域變數會叫不到Undefined
show();
show();
show();
?>