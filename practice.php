<?php
//Hello php!
echo 'hello php!';

//課題1
$a = 3;
$b = 7;
echo $a +$b;

//課題2
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];

//課題3
$hello = "Hello,";
$name = "Mikuriya";
$world = "'s World!";
echo $hello . $name . $world;

//課題4
$tech_boost = "tech ";
$tech_boost .= "boost";
echo $tech_boost;

/*課題5
①変数は文頭に数字を用いるのはNGなので、"2018_calendar"→"calender_2018"に修正。
②配列はを囲む括弧を"{}→"[]"に修正。
③"2月"の後ろの"、"を","に修正。
④10月を""で囲んで修正。
⑤echoで指定する要素を""で囲んで修正。
*/
$calendar_2018 = [
    "January" => "1月",
    "February" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "July" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "November" => "11月",
    "December" => "12月"
];
echo $calendar_2018["December"];

?>