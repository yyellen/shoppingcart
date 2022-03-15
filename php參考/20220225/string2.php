<?php
$string="Hello World";
?>
<h3>strlen 字串字元數</h3>
<?php
echo strlen($string);
?>

<h3>str_word_count 字串單字數</h3>
<?php
echo str_word_count($string);
?>

<h3>substr 擷取字串(開頭, 結尾)</h3>
<?php
echo substr($string, 2);
echo "<br>";
echo substr($string, 2, 6);
?>

<h3>strstr 回傳目標字串在指定匹配點之後/前的內容</h3>
<?php
$email="john@email.com";
echo strstr($email, '@');
echo "<br>";
echo strstr($email, '@', true);
?>

<h3>strpos 回傳字串在目標字串第一次出現的開始位置</h3>
<?php
echo strpos($string, "World");
echo "<br>";
echo stripos($string, "world"); // 如果要不區分大小寫的話可以使用 stripos()
?>

<h3>explode 分割字串存成陣列(分割基準, 目標字串)</h3>
<?php
$string2="Hello John, how are you?";
$strArr=explode(" ", $string2);
var_dump($strArr); // 會顯示型別
echo "<br>";
print_r($strArr); // 只顯示key[value]
echo "<br>";
for($i=0; $i<count($strArr); $i++){
    echo $strArr[$i]."<br>";
}
?>

<h3>str_replace 取代字串(取代文字, 替換文字, 目標字串)</h3>
<?php
echo str_replace("World", "Kitty", $string);
?>