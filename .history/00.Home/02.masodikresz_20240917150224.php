<?php

echo "<h1> Gyakroló Feladatsor </h1>";


/*

1. Feladat
    Változók:
    $x = 10
    $y = 20
    Feladat: Hozz létre egy $eredmeny nevű változót, amelyben eltárolod az $x és $y átlagát, majd írasd ki a végeredményt.

*/
echo "<h2> 1.Feladat </h2>";

$x = 10;
$y = 20;

$eredmeny = ($x + $y) / 2;

echo "X és Y átlaga: $eredmeny";

// -----------------------------------------------------------------------------------------------------------------------------------------

/*

2. Feladat
    Feladat: Hozz létre egy $szam nevű változót, amely egy tetszőleges számot tartalmaz. Írd ki, hogy a szám páros vagy páratlan!

*/

echo "<h2> 2.Feladat </h2>";

// NEM MENT

// -----------------------------------------------------------------------------------------------------------------------------------------

/*

3.Feladat
    Feladat: Hozz létre egy for ciklust, amely 1-től 20-ig fut. A ciklus minden futásakor írd ki a számot, de ha a szám osztható 5-tel, akkor helyette azt írd ki: "Ötös osztó".

*/

echo "<h2> 3.Feladat </h2>";

for ($i = 0; $i <= 20; $i++) {
    if ($i%5 === 0) {
        echo "$i Ötös osztó <br>";
    } else {
        echo "$i <br>";
    }
}

echo "<h2> 4.Feladat </h2>";



echo "<h2> 5.Feladat </h2>";



echo "<h2> 6.Feladat </h2>";



echo "<h2> 7.Feladat </h2>";



echo "<h2> 8.Feladat </h2>";



echo "<h2> 9.Feladat </h2>";



echo "<h2> 10.Feladat </h2>";



?>