<?php // 2024/10/07

echo "<h1> 5.Hét </h1>";
echo "<h2> 2.Óra </h2>";
echo "<h3> 1.feladat </h3>";

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

echo "<h3> 2.feladat </h3>";

$vezeteknevek = array("Nagy", "Kovács", "Tóth", "Szabó", "Horváth", "Varga", "Kiss");
$keresztnevek = array("Dénes", "Géza", "András", "Péter", "Zsolt", "János");

$kulso_tomb = array();

for($i = 0; $i < 10; $i++) {
    $belso_tomb = array();
    
    $randindex = rand(0, count($vezeteknevek) - 1);
    $belso_tomb['vezeteknev'] = $vezeteknevek[$randindex];
    
    $randindex = rand(0, count($keresztnevek) - 1);
    $belso_tomb['keresztnev'] = $keresztnevek[$randindex];

    $belso_tomb['eletkor'] = rand(1, 50);
    array_push($kulso_tomb, $belso_tomb);
}

print_r($kulso_tomb);
echo "<br>";

echo "<h3> 3.feladat </h3>";

$huszonotalatt = 0;

for($i = 0; $i < 10; $i++) {
    if($kulso_tomb[$i]['eletkor'] < 25) {
        $huszonotalatt++;
    }
}

echo "$huszonotalatt személy fiatalabb 25-nél";

echo "<h3> 4.feladat </h3>";

for($i = 0; $i < 10; $i++) {
    $kulso_tomb[$i]['eletkor'] += rand(1, 10);
}

print_r($kulso_tomb);
