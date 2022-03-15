<?php
$name="Jay";

echo 'My name is $name<br>'; // 單引號是字串
echo "My name is $name<br>"; //雙引號才會是變數
echo "My name is ".$name."<br>"; //.連接不同的資料型別

$result="1"+1; // PHP的+是運算符號(無視資料型別)，JS的+是連接字串
echo $result;
?>