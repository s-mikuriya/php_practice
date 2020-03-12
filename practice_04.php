<?php
//課題1
function double($x) {
    $x *= 2;
    return $x;
}
echo double(3);
echo "\n";

//課題2
function sum($a, $b) {
    $result = 0;
    $result = $a + $b;
    
    return $result;
}
echo sum(3, 4);
echo "\n";

//課題3
$array = [1, 3, 5, 7, 9];

function multiply_array($arr) {
    //掛け算をしたいので"$result2"の初期値は"1"にする
    $result2 = 1;
    foreach ($arr as $element) {
        $result2 *= $element;
    }
    return $result2;
}
echo multiply_array($array);
echo "\n";

//課題4
function max_array($arr) {
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    
    foreach ($arr as $a) {
        //要素の値の方が大きい時のみ"$maxnumber"を更新する
        if ($max_number < $a) {
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array($array) . "\n";
echo "\n";

//課題5
/*strip_tags
html.phpタグを除去する*/

$str = "<div><a>strips_tags関数</a></div>";

//echo
echo $str . "\n";
//タグを除去
echo strip_tags($str) . "\n";
//指定したタグ以外を除去
echo strip_tags($str, "<a>") . "\n";
echo "\n";


/*array_push
1つ以上の要素を配列の最後に追加する*/

$colors = ["red", "blue"];

echo "★array_push前★" . "\n";
foreach($colors as $color) {
    echo $color . "\n";
}

array_push ($colors, "green", "yellow");

echo "★array_push後★" . "\n";
foreach($colors as $color) {
    echo $color . "\n";
}
echo "\n";

/*array_merge
複数の配列をマージする*/
echo "★array_merge★" . "\n";
$array1 = ["zero", "one", "two"];
$array2 = ["three", "four"];
$arr_merge = array_merge($array1, $array2);
foreach($arr_merge as $arr) {
    echo $arr . "\n";
}
echo "\n";

/*time
現在のタイムスタンプを取得する*/
$time1 = time();
echo "★time★" . "\n";
echo $time1 . "\n";
echo "\n";

/*mktime
指定した日時のタイムスタンプを取得する
mktime(時,分,秒,月,日,年)*/
$time2 = mktime(20, 0, 0, 4, 1, 2020);
echo "★mktime★" . "\n";
echo $time2 . "\n";
echo "\n";

/*date
指定したフォーマットで日付を取得する*/
echo "★date★" . "\n";
echo date("Y/m/d H:i:s") . "\n";

?>