<?php // 2024/10/07

echo "<h1> 5.Hét </h1>";
echo "<h2> 2.Óra </h2>";

/*

01.Feladat:
    Készíts egy 2D-s tömböt. Helyezz el benne 20 tömböt a következő indexekkel:
        - Keresztnév
        - Vezetéknév
        - Év
        - Hónap 
        - Nap

A nevekhez hanszáld az előző órai listákat. Az év egy random szám legyen 2000 és 2005 között. 
A hónap egy random szám legyen 1 és 12 között. A nap legyen egy random szám 1 és 28 között.

*/

echo "<h3> 1.Feladat </h3>";

/*
$vezeteknevek = array("Nagy", "Kovács", "Tóth", "Szabó", "Horváth", "Varga", "Kiss");
$keresztnevek = array("Dénes", "Géza", "András", "Péter", "Zsolt", "János");

$kulso_tomb = array();

for($i = 0; $i < 20; $i++) {

    $belso_tomb = array();
    $randindex = ranad(0, count($vezeteknevek));

    $belso_tomb['vezetéknév'] = $vezeteknevek[$randindex];

    $randindex = rand (0, count($keresztnevek)-10);

    $belso_tomb['keresznev']
}

*/

/*

2.Feladat:
    Külsö tömb 10 db darab tartalmazzon
    Belső tömbök 10 random számot tartalmazzanak 0 és 1 között

*/
echo "<h3> 2.Feladat </h3>";

/*

$kulso_tomb = array();

for($i = 0; $i < 10; $i++) {

    $belso_tomb = array();

    for($i = 0; $i < 10; $i++) {



    }
    array_push($kulso_tomb, $belso_tomb)
}

print_r($kulso_tomb)

for($i = 0; $i < 10; $i++) {}

for($i = 0; $i < count($kulso_tomb); $i++) {

    for($j = 0; $j < count($kulso_tomb); $j++) {

        echo "$kulso_tomb[$i][$j]"

    }
    echo "<br>";
}


*/
/*
for($i = 0; $i < count($kulso_tomb); $i++) {

    for($j = 0; $j < count($kulso_tomb); $j++) {

        if($kulso_tomb[$i][$j] == 0) {
            echo "<img src = 'pics/kék.png' width='50px' height='50px'>"
        } elseif($kulso_tomb[$i][$j] == 1) {
            echo "<img src = 'pics/citromsárga.png' width='50px' height='50px'>"
        } else {
            echo "<img src = 'pics/zöld.png' width='50px' height='50px'>"
        }
    }
    echo "<br>";
}

*/