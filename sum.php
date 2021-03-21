<?php
function sum($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100);
echo "\n";

function times2($num){
    return $num * 2;
}
echo times2(5);
echo "\n";
function add($a, $b){
    return ($a+$b);
}
echo add(2,5);
echo "\n";

$arr = array(1, 3, 5, 7, 9);
print_r($arr);
function coffee($arr){
  $ret=1;
  foreach ($arr as $value) {
    $ret *= $value;
  }
  echo ("配列の計算結果: " . $ret);
}
coffee($arr);

echo "\n";


$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

echo strip_tags($text, '<p><a>');
echo "\n";

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

echo "\n";

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

echo "\n";

date_default_timezone_set('UTC');

echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

echo date('c', mktime(1, 2, 3, 4, 5, 2006));

echo "\n";

echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
echo date("M-d-Y", mktime(0, 0, 0, 13, 1, 1997));
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 1998));
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 98));

echo "\n";

date_default_timezone_set('UTC');
echo date("l");
echo date('l jS \of F Y h:i:s A');
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo date(DATE_RFC2822);
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));

echo "\n";

?>