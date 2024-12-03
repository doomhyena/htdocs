<?php

// -----------------------------------------------------------------------------------------------------------------
// Harmadik óra 2024/09/09 PÉNTEK
// -----------------------------------------------------------------------------------------------------------------

echo "<h1>3.hét</h1>";
echo "<h2>3.óra</h2>";
echo "<h2>Gyakroló Feladatsor</h2>";

echo "<h3>1.Feladat</h3>";

echo "Csontos Kincső";

echo "<h3>2.Feladat</h3>";

$a = 5;
$b = 10;
$c = 3;

echo ($a + $b) % $c;

echo "<h3>3.Feladat</h3>";

$d = rand(0, 100);
$e = rand(0, 100);

echo $d + $c;
echo "<br>";
echo $d * $c;

echo "<h3>4.Feladat</h3>";

$list = array("András", "Béla", "Cecília");

for ($i = 0; $i < count($list); $i++) {
    echo $list[$i];
    echo "<br>";
}

echo "<h3>5.Feladat</h3>";

$lista = array();

$randomnumber = rand(1, 12);

if ($randomnumber < 10 && $randomnumber % 2 === 1) {
    array_push($lista, $randomnumber);
    print_r($lista);
} else {
    echo "Nem teljesültek a feltételek!";
}

echo "<h3>6.Feladat</h3>";

$listas = array();

for ($i = 0; $i < 100; $i++) {
    $rando = rand(0, 5);
    array_push($listas, $rando);
}

$nullak = 0;

for ($i = 0; $i < count($listas); $i++) {  
    if ($listas[$i] === 0) {  
        $nullak += 1;
    }
}
echo "A listában a nullák száma: $nullak";
echo "<br>";

echo "<h3>7.Feladat</h3>";

$kecske = array();

while(count($kecske) < 100) {
    $rando = rand(0, 1000);

    if(!in_array($rando, $kecske)) {
        array_push($kecske, $rando);
    }
} // Többdimenziós tömbök

$legkisebb = 1001;
$legnagyobb = -1;

for ($i = 0; $i < count($kecske); $i++) {
    // kód
    if($kecske[$i] < $legkisebb ) {
        $legkisebb = $kecske[$i];
    }
    if($kecske[$i] > $legnagyobb ) {
        $legnagyobb = $kecske[$i];
    }
}