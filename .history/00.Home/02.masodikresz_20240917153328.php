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

$szam = 7;
if ($szam % 2 == 0) {
    echo "$szam páros.";
} else {
    echo "$szam páratlan.";
}


// -----------------------------------------------------------------------------------------------------------------------------------------

/*

3.Feladat
    Feladat: Hozz létre egy for ciklust, amely 1-től 20-ig fut. A ciklus minden futásakor írd ki a számot, de ha a szám osztható 5-tel, akkor helyette azt írd ki: "Ötös osztó".

*/

echo "<h2> 3.Feladat </h2>";

for ($i = 0; $i <= 20; $i++) {
    if ($i%5 === 0) {
        echo "Ötös osztó<br>";
    } else {
        echo "$i<br>";
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

$szamok = [3, 5, 7, 9, 11];
$osszeg = 0;
foreach ($szamok as $szam) {
    $osszeg += $szam;
}
echo "A tömbben " . count($szamok) . " elem van.<br>";
echo "Az elemek összege: $osszeg";

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
foreach ($bevasarlolista as $item) {
    echo "$item<br>";
}


// -----------------------------------------------------------------------------------------------------------------------------------------
/*

7. Feladat

   Feladat: Hozz létre egy $szamlalo változót, amelynek kezdőértéke 0.
   Indíts egy while ciklust, amely addig fut, amíg a $szamlalo értéke el nem éri a 10-et.
   A ciklus minden futásakor növeld meg a $szamlalo értékét eggyel, majd írasd ki az aktuális értéket.

*/

$szamlalo = 0;
while ($szamlalo <= 10) {
    echo "$szamlalo<br>";
    $szamlalo++;
}


// Elbasztam xddd

// -----------------------------------------------------------------------------------------------------------------------------------------
/*

8. Feladat

    Feladat: Írj egy programot, amely az $a = 8 és $b = 3 változókat használva:
    Kiszámítja és kiírja, hogy mennyi az $a maradéka, ha elosztjuk $b-vel.
    Ha a maradék 2, akkor írja ki: "A maradék két egyenlő!", különben írja ki a tényleges maradékot.

*/

echo "<h2> 8.Feladat </h2>";

$a = 8; 
$b = 3 ;

// ?????

// -----------------------------------------------------------------------------------------------------------------------------------------
/*

9. Feladat

    Feladat: Hozz létre egy $szamok nevű tömböt, amely az alábbi számokat tartalmazza: [2, 4, 6, 8, 10].
    Egy foreach ciklussal járd be a tömb elemeit, és minden elem esetében vizsgáld meg, hogy osztható-e 4-gyel.
    Ha igen, akkor írd ki, hogy: "$elem osztható 4-gyel".

*/

echo "<h2> 9.Feladat </h2>";

// Persze, hogy tömbös feladat ez is...

// -----------------------------------------------------------------------------------------------------------------------------------------
/*

10. Feladat

    Feladat: Hozz létre egy $pelda változót, amely tartalmazza a "Ez egy teszt szöveg" mondatot.
    Írd ki a szöveget nagybetűvel (strtoupper függvénnyel).
    Ezután írd ki az összes szó kezdőbetűjét nagybetűs formában (ucwords függvénnyel).

*/

echo "<h2> 10.Feladat </h2>";

// Nem vett anayagok halmaza

?>