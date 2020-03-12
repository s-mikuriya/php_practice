<?php
//課題1
$name = "Mikuriya";
if ($name == "Mikuriya") {
    echo "私は" . $name . "です";
    echo "\n";
} else {
    echo $name . "ではありません";
    echo "\n";
}

//課題2
$sum = 0;
for ($i = 1; $i <= 10000; $i++) {
 $sum += $i;
}
echo $sum;
echo "\n";

//課題3
$fruits = ["apple","orange","grapes","peach","lemon"];
foreach ($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}

//課題4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    //改行する。
    echo "\n";
  }
}

?>