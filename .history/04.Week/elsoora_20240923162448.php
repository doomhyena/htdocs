<?php

echo "<h1> 4.Hét </h1>";
echo "<h2> 01.Óra </h2>";
echo "<h3> 1.Feladat </h3>";

echo "Csontos Kincső"; // Benne lesz a dolgozatban

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
echo ( ($a * $b) / ($c * $d) ) % $b; // Ilyen nem lesz maybe ???

echo "<h3> 3.Feladat </h3>";

$list = array();

for ($i = 0; $i < 100; $i++) {
    $random = rand(0, 1000);
    $list[] = $random;
}
print_r($list); // majd nézd át ezt a feladatot valami lemaradt

echo "<h3> 4.Feladat </h3>";

$listlist = array();

for ($i = 0; $i < 50; $i++) {
     $randie = rand(0, 20);
    $listlist[] = $randie;
} // lehetett while-al is :3 és két féle képpen lehetett megcsinálni

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
echo "Páratlan számok száma: $paratlan"; // Fuck yeah


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
} // TO EASy

echo "A legnayobb elem: $legnagyobb";

echo "<h3> 7.Feladat </h3>";

$lista = array();

/*

while(count($lista) <100) {
    $randomszam = rand(0, 1000);
    if($randomszam > 500) {
        if($randomszam < 800) {
            if($randomszam%2 === 0) {
                $lista[] = $randi;
            }
        }
    }
} 

*/

if($rnadomszam > 200 && $randomszam < 800 && $randomszam % 2 === 0) {
    $lista[] = $randi;
}

$otszaznagy = 0;
$otszazkicsi = 0;
$legkisebb = 801;

for ($i = 0; $i < count($lista); $i++) {
    if($lista[$i] > 500) {
        $otszaznagy++;
    }
}
for ($i = 0; $i < count($lista); $i++) {
    if($lista[$i] < 500) {
        $otszazkicsi++;
    }
    if ($lista[$i] < $legkisebb) {
        $legkisebb = $lista[$i];
    }
}

echo "Ötszáz fölötti számok száma: ". $otszaznagy;
echo "Ötszáz alatti számok száma". $otszazkicsi;
echo "A lista legkisebb eleme:". $legkisebb;

echo "<h3> 8.Feladat </h3>";

$lista = array();
while (count($lista ) < 50) {
    $random = rand(0, 2000);

    if ($randomszam > 800) {
        if ($randomszam < 1600) {
            if ($randomszam % 2 === 0) {
                $lista[] = $random;
            }
        }
    }
}

for ($i = 0; $i < count($lista); $i++) {
    // kód
    if ($lista[i] % 2 === 4) {
        echo $list[$i];
    }
}