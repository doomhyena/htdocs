<?php

echo "<h1> 4.Week </h1>";
echo "<h2> Lesson 01 </h2>";
echo "<h3> 1.Task </h3>";

echo "Csontos Kincső";

echo "<h3> 2.Task </h3>";

$a = 5;
$b = 7;
$c = 4;
$d = 2;

echo $a * $c;
echo "<br>";
echo $n / $d;
echo "<br>";
echo $b % $d;
echo "<br>";
echo ( ($a * $b) / ($c * $d) ) % $b;

echo "<h3> 3.Task </h3>";

$list = array();

for ($i = 0; $i < 100; $i++) {
    $random = rand(0, 1000);
    $list[] = $random;
}
print_r($list);

echo "<h3> 4.Task </h3>";

$listlist = array();

for ($i = 0; $i < 50; $i++) {
     $randie = rand(0, 20);
    $listlist[] = $randie;
}

for ($i = 1; $i < count($listlist); $i += 2) {
    echo $listlist[$i] . " ";
}

echo "<h3> 5.Task </h3>";

$kecske = array();

for ($i = 0; $i < 1000; $i++) {
    $randi = rand(0, 5000);
    $paros = 0;
    $paratlan = 0;

    if(!in_array($randi, $kecske)) {
        $kecske[] = $randi;
    }
    if($randi%2 === 0) {
        $paros += 1;
    } elseif ($randi === 1) {
        $paratlan += 1;
    }
    echo "$paros";
    echo "<br>";
    echo "$paratlan";
}
echo "<h3> 6.Task </h3>";
echo "<h3> 7.Task </h3>";