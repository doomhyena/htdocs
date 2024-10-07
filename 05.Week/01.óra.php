<?php

echo "<h1> 5.Hét </h1>";
echo "<h2> 1.feladat </h2>";

$kulso_tomb = array();

for($i = 0; $i < 10; $i++) {
    $belso_tomb = array();
    for($j = 0; $j < 10; $j++) {
        $randomszam = rand(0, 50);

        array_push($belso_tomb, $randomszam);
        
    }

    array_push($kulso_tomb, $belso_tomb);

}

print_r($kulso_tomb);

echo "<h2> 2.feladat </h2>";

$vezeteknevek = array("Nagy", "Kovács", "Tóth", "Szabó", "Horváth", "Varga", "Kiss")
$keresztnevek = array("Dénes", "Géza", "Andárs", "Péter", "Zsolt", "János")

$kulso_tomb = array();

for($i = 0; $i < 10; $i++) {

    $belso_tomb = array();

    $randindex = rand(0, count($vezeteknevek) = $vezeteknevek[$randindex])

    $belso_tomb['keresztnev'] = $keresztnevek[$randindex];

    $belso_tomb['eletkor'] = rand(1, 50);

    array_push($kulso_tomb, $belso_tomb);
}

print_r($kulso_tombs);
echo "<br>";

echo "<h2> 2.feladat </h2>";

$huszonotalatt = 0;

for($i = 0; $i < 10; $i++) {
    if($kulso_tomb[$i]['eletkor'] < 25) {
        $huszonotalatt++
    }
}

echo "$huszonotalatt személy fiatalabb 25-nél";

echo "<h2> 2.feladat </h2>";

for($i = 0; $i < 10; $i++) {
    $kulso_tomb[$i]['eletkor'] += rand(1, 10)
}

print_r($kulso_tomb);
