<?php

echo "<h1>Gyakorló Feladatsor</h1>";
echo "<h2>A osztály</h2>";

echo "<h3>1.Feladat</h3>";

echo "Csontos Kincső";

// ----------------------------------------------------------------------

echo "<h3>2.Feladat</h3>";

$s = 2;
$b = 4;
$c = 8;
$d = 3;

echo $a * $b;
echo $c / $d;
echo ($a * $b * $c * $d) / ($a + $d);

// ----------------------------------------------------------------------

echo "<h3>3.Feladaz</h3>";

$lista = array();

for ($i = 0; $i < 100; $i++) {
    $random_szam = rand(0, 500);

    if ($random_szam > 100 && $random_szam % 2 === 0) {
        $lista[] = $random_szam;
    }
}

echo "<h3>4.Feladat</h3>";

$legkisebb = 101;


for ($i = 0; $i < 100; $i++) {
    $random_szam = rand(0, 500);

    if ($random_szam > 100 && $random_szam % 2 === 0) {
        $lista[] = $random_szam;
    }
}
for ($i = 0; $i < count($lista); $i++) {
    if ($lista[$i] < $legkisebb) {
        $legkisebb = $lista[$i];
    }
}

print_r($lista);
echo "<br>";
echo "A lista legkisebb eleme: $legkisebb";

// ----------------------------------------------------------------------


echo "<h3>5.Feladat</h3>";



echo "<h3>6.Feladat</h3>";