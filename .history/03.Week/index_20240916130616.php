<?php

echo "<h1>3.hét Anyaga</h1>";
echo "<h2>1.óra Anyaga</h2>";

/*

$list = array();

for ($i = 0; $i < 20; $i++) {
    $randomnumber = rand(0, 1000); // Minden iterációban új számot generálunk
    array_push($list, $randomnumber);
    print_r($list);
    echo "<br>";
}


// While ciklus

$lista = array();

while (count($lista) < 10) { 
    $randnum = rand(0, 100);
    array_push($lista, $randnum);
    print_r($lista);
    echo "<br>";
}

$lista = array();

while (count($lista) < 10) { // Például 10 egyedi szám
    $randomnumber = rand(0, 100);

    if (in_array($randomnumber, $lista)) {
        echo "Ez a szám már benne van ($randomnumber) <br>";
    } else {
        array_push($lista, $randomnumber);
        print_r($lista);
        echo "<br>";
    }
}

$lista = array(1, 2, 3, 4, 5);

for ($i = 0; $i < count($lista); $i++) {
    // Ha a szám páratlan
    if($lista[$i] % 2 == 1) {
        $lista[$i]++; // Párossá tesszük
    }
}

print_r($lista);


*/

// Töltsd fel ey listát 100 darab random számmal 0 és 1000 között. (Egy szám csak egyszer szerepeljen a listában)

$lista = array();

while (count($lista)) {
    $randomszam = rand(0, 1000);

    if (in_array($randomszam, $lista)) { // Hiányzott egy zárójel
        echo "Ez a szám már benne van ($randomszam) <br>";
    } else {
        array_push($lista, $randomszam);
    }
}
print_r($lista);
echo "<br>";

// $list = array();
$legnagyobb = -1;
$legkisebb = 1001;

for ($i = 0; $i < count($lista); $i++) {
    if($lista[$i] > $legnagyobb) {
        $legnagyobb = $lista[$i];
        echo "$lista[$i] nagyobb mint $legnagyobb, felülírom <br>";
    }
    if($lista[$i] < $legkisebb) {
        $legkisebb = $lista[$i];
        echo "$lista[$i] kisebb mint $legkisebb, felülírom <br>";
    }
}
echo "Legnagyobb érték: $legnagyobb";
echo "<br>";
echo "Legkisebb érték: $legkisebb";

?>