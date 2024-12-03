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
echo "<br>";
echo $c / $d;
echo "<br>";
echo ($a * $b * $c * $d) / ($a + $d);

// ----------------------------------------------------------------------

echo "<h3>3.Feladaz</h3>";

$lista = array();
while(count($lista) < 100) {
    $rando = rand(0, 500);

    if(!in_array($rando, $lista)) {
        $lista[] = $rando;
    }
} 

print_r($lista);

// ----------------------------------------------------------------------

echo "<h3>4.Feladat</h3>";

$lista = array();

for ($i = 0; $i < 100; $i++) {
    $random_szam = rand(0, 500);

    if ($random_szam > 100 && $random_szam % 2 === 0) {
        $lista[] = $random_szam;
    }
}

if (count($lista) > 0) {
    $legkisebb = $lista[0];  // Az első elemre állítjuk a kezdőértéket

    for ($i = 1; $i < count($lista); $i++) {
        if ($lista[$i] < $legkisebb) {
            $legkisebb = $lista[$i];
        }
    }
    print_r($lista);
    echo "<br>";
    echo "A lista legkisebb eleme: $legkisebb";
}


print_r($lista);
echo "<br>";
echo "A lista legkisebb eleme: $legkisebb";

// ----------------------------------------------------------------------


echo "<h3>5.Feladat</h3>";

$lista = array();
while(count($lista) < 100) {
    $rando = rand(0, 1000);

    if(!in_array($rando, $lista)) {
        $lista[] = $rando;
    }
}

if (count($lista) > 0) {
    $legkisebb = $lista[0]; 
    $legnagyobb = $lista[0];
    // Legkisebb keresése
    for ($i = 1; $i < count($lista); $i++) {
        if ($lista[$i] < $legkisebb) {
            $legkisebb = $lista[$i];
        }
        // Legnagyobb keresése
        if ($lista[$i] > $legnagyobb) {
            $legnagyobb = $lista[$i];
        }
    }

    print_r($lista);
    echo "<br>";
    echo "A lista legkisebb eleme: $legkisebb <br>";
    echo "A lista legnagyobb eleme: $legnagyobb";

}

echo "<h3>6.Feladat</h3>";

$lista = array();
$hatszazkicsi = 0;
$htszaznagy = 0;

for ($i = 0; $i < 100; $ai++) {
    $random_szam = rand(0, 1200);

    if ($random_szam % 2 === 0 && $random_szam > 300 && $random_szam < 900) {
        $lista[] = $random_szam;
    }
}

for ($i = 0; $i < count($lista); $i++) {
    if ($lista[i] < 600) {
        $hatszazkicsi++;
    }
    if ($lista[i] > 600) {
        $otszaznagy++;
    }
}
