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

while (count($lista)) {
    $randnum = rand(0, 100);

     array_push($lista, $randnum);
     print_r($lista);

     echo "<br>";
}

$lista = array();

while (count($lista)) {
    $randomnumber = rand(0, 100);

    if(in_array($randomnumber)) {
        echo "Ez a szá már benne van ($randomnumber) <br>";
    } else {
        array_push($lista, $randomnumber);

        print_r($lista);
        echo "<br>";
    }
}

$lista = array(1, 2, 3, 4, 5);

for ($i = 0; $i < ($lista); $i++) {
    // kód
    if($lista[$i]% 2 == 1) {
        $lista[$i]++;
    }   
}

print_r($lista);


*/

// Töltsd fel ey listát 100 darab random számmal 0 és 1000 között. (Egy szám csak egyszer szerepeljen a listában)

$list = array();

while (count($list) < 100) {
    $randomNumber = rand(0, 1000);


print_r($list);


?>