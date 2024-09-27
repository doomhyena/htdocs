<?php

echo "<h1> Dolgozat </h1>";
echo "<h2>A osztály</h2>";

echo "<h3>1.Feladat</h3>";

echo "Csontos Kincső";

// ----------------------------------------------------------------------

echo "<h3>2.Feladat</h3>";

$a = 3;
$b = 5;
$c = 2;
$d = 4;

echo $a * $b;
echo "<br>";
echo $c / $d;
echo "<br>";
echo ($a * $b * $c * $d) / ($a + $d);

// ----------------------------------------------------------------------

echo "<h3>3.Feladat</h3>";

$lista = array();
while(count($lista) < 100) {
    $rando = rand(0, 600);

    if(!in_array($rando, $lista)) {
        array_push($lista, $rando);
    }
} 

print_r($lista);

// ----------------------------------------------------------------------

echo "<h3>4.Feladat</h3>";

$lista = array();

for ($i = 0; $i < 100; $i++) {
    $random_szam = rand(0, 700);

    if ($random_szam > 100 && $random_szam % 2 === 1) {
        array_push($lista, $random_szam);
    }
}

if (count($lista) > 0) {
    $legnagyobb = -1;  

    for ($i = 0; $i < count($lista); $i++) {
        if ($lista[$i] > $legnagyobb) {
            $legnagyobb = $lista[$i];
        }
    } 
}


print_r($lista);
echo "<br>";
echo "A lista legnagyobb eleme: $legnagyobb";

// ----------------------------------------------------------------------

echo "<h3>5.Feladat</h3>";

$lista = array();
while(count($lista) < 100) {
    $rando = rand(0, 1500);

    if(!in_array($rando, $lista)) {
        array_push($lista, $rando);
    }
}

if (count($lista) > 0) {
    $legkisebb = 1501; 
    $legnagyobb = -1;
    for ($i = 1; $i < count($lista); $i++) {
        if ($lista[$i] < $legkisebb) {
            $legkisebb = $lista[$i];
        }
        if ($lista[$i] > $legnagyobb) {
            $legnagyobb = $lista[$i];
        }
    }

    print_r($lista);
    echo "<br>";
    echo "A lista legkisebb eleme: $legkisebb <br>";
    echo "A lista legnagyobb eleme: $legnagyobb";

}

// ----------------------------------------------------------------------

echo "<h3>6.Feladat</h3>";

$lista = array();
$hatszazkicsi = 0;
$htszaznagy = 0;

for ($i = 0; $i < 100; $i++) {
    $random_szam = rand(0, 1500);

    if ($random_szam % 2 === 0 && $random_szam > 300 && $random_szam < 900) {
        array_push($lista, $random_szam); 
    }
}

for ($i = 0; $i < count($lista); $i++) {
    if ($lista[$i] < 600) {
        $hatszazkicsi++;
    }
    if ($lista[$i] > 600) {
        $htszaznagy++;
    }
}

echo "Ötszáz fölötti számok száma: ". $htszaznagy;
echo "<br>";
echo "Ötszáz alatti számok száma: ". $hatszazkicsi;