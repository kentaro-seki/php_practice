<?php
echo 'hello php!';
echo "\n";
$a = 3;
$b = 7;
echo $a+$b;
echo "\n";
$array_mouth = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_mouth[7];
echo "\n";
$hello = "Hello,";
$name = "seki-kentaro";
$world = "'s World!";
echo $hello.$name.$world;
$tech_boost = "tech";
echo $tech_boost . " boost";
echo "\n";
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
echo "\n";

$height = 160;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} 
$height = 160;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} else {
  echo "ご乗車になれます。";
}
echo "\n";

$name = "seki-kentaro";
if($name = "seki-kentaro") {
  echo "私は あなたの名前 です";
}else {
  echo "あなたの名前ではありません";
}
echo "\n";

$total = 0;
for($i = 0; $i < 10000; $i++){
  $total += $i;
}
echo $total;
echo "\n";

$fruits = array("aplle","orenge","banana","peach","strawberry","berry");
foreach($fruits as $fruits){
  echo "neme is " . $fruits;
  echo "\n";
}
echo "\n";
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
if($i % 5 == 0) {
    echo $i;
  }
}
