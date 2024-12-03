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

// -----------------------------------------------------------------------------------------------------------------------------------------
/*

4. Feladat
    Feladat: Készíts egy tömböt, amely tartalmazza az alábbi számokat: [3, 5, 7, 9, 11].
    Számold össze, hogy a tömbben hány elem van!
    Számold ki, hogy mennyi az elemek összege, és írd ki az eredményt!

*/

echo "<h2> 4.Feladat </h2>";

$tomb = [3, 5, 7, 9, 11];

echo count($tomb);
// NEM MENT A TOVÁBBI RÉSZE

// -----------------------------------------------------------------------------------------------------------------------------------------
/*

5. Feladat

    Feladat: Hozz létre egy $nev változót, amely egy név (pl. "Anna"). Írasd ki a következő üzenetet, ahol a név dinamikusan jelenik meg: "Üdvözöllek, $nev!".

*/

echo "<h2> 5.Feladat </h2>";

$nev = "Anna";

echo "Üdvözöllek, $nev!";

// -----------------------------------------------------------------------------------------------------------------------------------------
/*

6. Feladat

   Feladat: Készíts egy tömböt, amely tartalmazza egy bevásárlólista elemeit (pl. [„alma”, „kenyér”, „tej”, „tojás”]). Használj egy for ciklust, amely kiírja a lista összes elemét egy-egy külön sorban.

*/

echo "<h2> 6.Feladat </h2>";

$bevasarlolista = ["alma", "kenyér", "tej", "tojás"];

// MILYEN FELADAT EZ IS CHATGPT?!?!?!

// -----------------------------------------------------------------------------------------------------------------------------------------
/*

7. Feladat

   Feladat: Hozz létre egy $szamlalo változót, amelynek kezdőértéke 0.
   Indíts egy while ciklust, amely addig fut, amíg a $szamlalo értéke el nem éri a 10-et.
   A ciklus minden futásakor növeld meg a $szamlalo értékét eggyel, majd írasd ki az aktuális értéket.

*/

echo "<h2> 7.Feladat </h2>";

$szamlalo = 0;

echo "<h2> 8.Feladat </h2>";



echo "<h2> 9.Feladat </h2>";



echo "<h2> 10.Feladat </h2>";



?>