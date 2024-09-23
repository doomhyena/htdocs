<?php

echo "<h1> 4.Hét </h1>";
echo "<h2> 01.Óra </h2>";
echo "<h3> 1.Feladat </h3>";

echo "Csontos Kincső";

echo "<h3> 2.Feladat </h3>";

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

echo "<h3> 3.Feladat </h3>";

$list = array();

for ($i = 0; $i < 100; $i++) {
    $random = rand(0, 1000);
    $list[] = $random;
}
print_r($list);

echo "<h3> 4.Feladat </h3>";

$listlist = array();

for ($i = 0; $i < 50; $i++) {
     $randie = rand(0, 20);
    $listlist[] = $randie;
}

for ($i = 1; $i < count($listlist); $i += 2) {
    echo $listlist[$i] . " ";
}

echo "<h3> 5.Feladat </h3>";

$kecske = array();

for ($i = 0; $i < 1000; $i++) {
    $randi = rand(0, 5000);
    if (!in_array($randi, $kecske)) {
        $kecske[] = $randi;
    }
}

$paros = 0;
$paratlan = 0;

for ($i = 0; $i < count($kecske); $i++) {
    if ($kecske[$i] % 2 == 0) {
        $paros += 1;
    } else {
        $paratlan += 1;
    }
}
echo "Páros számok száma: $paros";
echo "<br>";
echo "Páratlan számok száma: $paratlan";


echo "<h3> 6.Feladat </h3>";

$kecske = array();

for ($i = 0; $i < 100; $i++) {
    $randi = rand(0, 500);
    while ($randi > 100 && $randi % 2 === 1) {
        $kecske[] = $randi;
        break;
    }
}

$legnagyobb = -1;

for ($i = 0; $i < count($kecske); $i++) {
    if ($kecske[$i] > $legnagyobb) {
        $legnagyobb = $kecske[$i];
    }
}

echo "A legnayobb elem: $legnagyobb";

echo "<h3> 7.Feladat </h3>";

$bruh = array();

for ($i = 0; $i < 100; $i++) {
    $randi = rand(0, 500);
    if ($randi > 200 && $randi < 800) {
        $bruh[] = $randi;
    }
}

$otszazalatt = 0;
$otszazfelett = 0;

for ($i = 0; $i < count($bruh); $i++) {
    if ($bruh[$i] > 500) {
        $otszazfelett += 1;
    } elseif ($bruh[$i] < 500) {
        $otszazalatt += 1;
    }    
}

$legkisebb = -1;

for ($i = 0; $i < count($bruh); $i++) {
    if ($kecske[$i] < $bruh) {
        $bruh = $kecske[$i];
    }
}

echo "A legnayobb elem: $legkisebb";


echo $otszazalatt;
echo "<br>";
echo $otszazfelett;

