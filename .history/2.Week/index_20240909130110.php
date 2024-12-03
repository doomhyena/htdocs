<?php

echo "<h2>2.hét Anyaga</h2>";
/*

$a = 10;
$b = 5;

echo "Csontos Kincső";
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a + $b;

*/

// ------------------------------------------------

/*

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

*/

// ------------------------------------------------

/*

$list = array("Albert", "Balázs", "Cecil", "Igor");
$elemszam = count($list);
echo $elemszam;


*/

// ------------------------------------------------

/*

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

*/

// ------------------------------------------------

// IF-ELSE

$list = array("Albert", "Balázs", "Cecil", "Igor");
$lista = array();



if($list > 0) {
    $elemszam = count($list);
    echo $elemszam;
} else {
    echo "Nincsenek elemek a listában! ('list' lista)";
}

?>