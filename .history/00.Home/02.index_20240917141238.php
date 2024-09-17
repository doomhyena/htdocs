<?php
 
echo "<h1> Gyakroló Feladatsor </h1>";

$a = 5;
$b = 4;
$c = 3;
$d = 2;

echo "<h2> 1.Feladat </h2>";

$osszeg = $a + $c;
echo "A és C összege: $osszeg";

echo "<h2> 2.Feladat </h2>";

$kulonbseg = $b - $d;
echo "B és D küéönbsége: $kulonbseg";

echo "<h2> 3.Feladat </h2>";

$szorzat = $a * $b;
echo "A és B szorzata: $szorzat";

echo "<h2> 4.Feladat </h2>";

$hanyados = $b / $d;
echo "B és D hányadosa: $hanyados";

echo "<h2> 5.Feladat </h2>";



echo "<h2> 6.Feladat </h2>";

$vegeredmeny = 0;

for ($i = 0; $i < 100; $i++) {
    if ($i%2 == 0) {
        $vegeredmeny += $i;
    } else {
        $vegeredmeny -= 1;
    }
}

echo "<h2> 7.Feladat </h2>";



?>
