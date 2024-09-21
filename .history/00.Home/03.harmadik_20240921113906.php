<?php

echo "<h1>Gyakorló Feladatsor</h1>";

// --------------------------------------------------------------------------------------------------------------------------------------------------
/*

1. Feladat

    Feladat: Hozz létre két változót, $a = 15 és $b = 30.
        Ha az $a kisebb, mint $b, írasd ki, hogy "$a kisebb, mint $b".
        Ha $a nagyobb, mint $b, írasd ki, hogy "$a nagyobb, mint $b".
        Ha a két szám egyenlő, írasd ki, hogy "$a és $b egyenlő".

*/

echo "<h2>1.Feladat</h2>";

$a = 15;
$b = 30;

if ($a < $b) {
    echo "$a kisebb, mint $b";
} 
if ($a > $b) {
    echo "$a nagyobb, mint $b";
} else {
    echo "$a és $b egyenlő";
}
// --------------------------------------------------------------------------------------------------------------------------------------------------
/*

2. Feladat

    Feladat: Hozz létre egy $szam nevű változót, amely tartalmaz egy egész számot. 
    Írj egy programot, amely megvizsgálja, hogy a szám pozitív, negatív, vagy nulla, és kiírja az eredményt.

*/

echo "<h2>2.Feladat</h2>";

$szam = 5;



// --------------------------------------------------------------------------------------------------------------------------------------------------

/*

3. Feladat

    Feladat: Hozz létre egy $jegy változót, amely egy tanuló jegyét tartalmazza (1-5). Írd ki a megfelelő szöveget a jegyhez:
        1: "Elégtelen"
        2: "Elégséges"
        3: "Közepes"
        4: "Jó"
        5: "Jeles"

*/

echo "<h2>3.Feladat</h2>";




// --------------------------------------------------------------------------------------------------------------------------------------------------

/*

4. Feladat

    Feladat: Írj egy programot, amely egy for ciklussal 1-től 50-ig számol, és csak a páratlan számokat írja ki.

*/

echo "<h2>4.Feladat</h2>";

$paratlanok = array();

for ($i = 0; $i < 50; $i++) {
    if ($i % 2 === 1) {
        array_push($paratlanok, $i);
    }
}

print_r($paratlanok);

// --------------------------------------------------------------------------------------------------------------------------------------------------

/*

5. Feladat

    Feladat: Hozz létre egy $szam változót, amely egy pozitív egész számot tartalmaz. 
    Írj egy programot, amely kiszámolja és kiírja a szám faktoriálisát! 
    (A faktoriális egy szám összes pozitív egész számú osztójának szorzata, pl. 5 faktoriálisa: 5*4*3*2*1 = 120).

*/

echo "<h2>5.Feladat</h2>";

$szam = 5;


// --------------------------------------------------------------------------------------------------------------------------------------------------

/*

6. Feladat

    Feladat: Hozz létre egy $eletkor változót, amely egy ember életkorát tárolja. 
    Írd ki, hogy milyen életkorcsoportba tartozik az ember az alábbi kategóriák alapján:
        0-12 év: "Gyermek"
        13-17 év: "Tinédzser"
        18-64 év: "Felnőtt"
        65 év felett: "Nyugdíjas"

*/

$eletkor = 15;

if ($eletkor < 12) {
    echo "Gyermek";
}
if ($eletkor < 17) {
    echo "Gyermek";
}
if ($eletkor < 64) {}

echo "<h2>6.Feladat</h2>";
echo "<h2>7.Feladat</h2>";
echo "<h2>8.Feladat</h2>";
echo "<h2>9.Feladat</h2>";
echo "<h2>10.Feladat</h2>";