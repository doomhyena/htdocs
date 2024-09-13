<?php

// -----------------------------------------------------------------------------------------------------------------
// Első óra 2024/09/09 HÉTFŐ
// -----------------------------------------------------------------------------------------------------------------



echo "<h1>2.hét Anyaga</h1>";
echo "<h2>1.óra Anyaga</h2>";


$a = 10;
$b = 5;

echo "Csontos Kincső";
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a + $b;



// ------------------------------------------------



$randomnumber = rand(0, 10);
$randomnumber0 = rand(0, 10);

echo $randomnumber;
echo "<br>";

$list = array("Albert", "Balázs", "Cecil", "Igor");
$lista = array();

print_r($list);
echo "<br>";
echo $list[3];
echo "<br>";
print_r($lista);
echo "<br>";
echo "A jelenlegi generált szám: ".$randomnumber0;
echo "<br>";

array_push($lista, $randomnumber0);
print_r($lista);
echo "<br>";



// ------------------------------------------------



$list = array("Albert", "Balázs", "Cecil", "Igor");
$elemszam = count($list);
echo $elemszam;




// ------------------------------------------------



$list = array("Albert", "Balázs", "Cecil", "Igor");

//legmagasabb index
$maxindex = count($list)-1;
echo "Max index: ".$maxindex;
echo "<br>";
// Random Index generálása

$randomindex = rand(0, $maxindex);

echo "Random index: ".$randomindex;
echo "<br>";
echo "Lista random eleme: ".$list[$randomindex];



// ------------------------------------------------

// IF-ELSE
echo "<h3>1.Feladat</h3>";

$list = array("Albert", "Balázs", "Cecil", "Igor", "Kincső", "Kadosa");
$lista = array();

if(count($list) > 0) {
    $maxindex = count($list)-1;
    $randomindex = rand(0, $maxindex);
    echo "Random index: ".$randomindex;
} else {
    echo "Nincsenek elemek a listában!";
}

echo "<br>";

if(count($lista) > 0) {
    $maxindex = count($lista)-1;
    $randomindex = rand(0, $maxindex);
    echo "Random index: ".$randomindex;
} else {
    echo "Nincsenek elemek a listában!";
}

echo "<h3>2.Feladat</h3>";

$listlist = array();

$randomszam = rand(0, 1000);
array_push($listlist, $randomszam);

$randomszam = rand(0, 1000);
array_push($listlist, $randomszam);

$randomszam = rand(0, 1000);
array_push($listlist, $randomszam);

$randomszam = rand(0, 1000);
array_push($listlist, $randomszam);

$randomszam = rand(0, 1000);
array_push($listlist, $randomszam);

print_r($listlist);

$maxindex = count($listlist)-1;
$randomindex = rand(0, $maxindex);
echo "<br>";
echo $lista[$randomindex];


// -----------------------------------------------------------------------------------------------------------------
// Második óra 2024/09/13 PÉNTEK
// -----------------------------------------------------------------------------------------------------------------

echo "<h2>2.óra Anyaga</h2>";

/*
// 10x kiírja nevemet


for ($i = 0; $i < 10; $i++) {
    echo "Csontos Kincső"; 
    echo "<br>";
}


// 10 Random számot ír ki


for ($i = 0; $i < 10; $i++) {
    echo rand(0, 100);
    echo "<br>";
}


// Kiírja az első 10 számot



for ($i = 0; $i < 10; $i++) {
    echo $i;
    echo "<br>";
}
*/

// Maradék ellenőrzése

for ($i = 0; $i < 10; $i++) {
    if ($i%2 == 0) {
        echo "$i/2 0 maradékot ad";
        echo "<br>";
    } else {
        echo "$i/2 1 maradékot ad.";
        echo "<br>";
    }
}

// Hozz létre egy üres listát majd generálj 10 random számot majd rakd bele őket a listába és írasd ki!

echo "<h3>1.Feladat</h3>";
$number = array();

for ($i = 0; $i < 10; $i++) {
    $randnumver = rand(0, 100);
    array_push($number, $randnumver);
    print_r($number);
    echo "<br>";
}

// Hozz létr egy üres listát majd generálj random számokat majd rakd bele őket a listába HA pároosak! 

echo "<h3>2.Feladat</h3>";

$kecske = array();

for ($i = 0; $i < 20; $i++) {
    $szalami = rand(0, 1000);
    if ($szalami%2 == 0) {
        array_push($kecske, $szalami);
    } 
    print_r($kecske);
    echo "<br>";   
}

/*

Hozz létre egy üres listát
Generáltass számokat 0 és 10 között
Írd ki a random számot
Majd csinálj egy for ciklust ami 15 fut le
Minden lefutáskor vizsgáld meg, hogy a random szám oszthatóe-e az $i aktuális értékével
Ha osztható, add hozzá $i értéket a listához

*/

echo "<h3>3.Feladat</h3>";

$virsli = array();

for ($i = 0; $i < 20; $i++) {
    $kutya = rand(0, 1000);
    if ($szalami%$i == 0) {
        array_push($virsli, $szalami);
    } 
    print_r($virsli);
    echo "<br>";   
}

?>