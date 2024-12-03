<?php

// "Konzol" kiíratás

echo "Csontos Kincső"; // Szöveget mindig macslalörmökkel íratunk ki
echo "<br>"; // Sortörés, ajánlatos, hogy ne folyon minden egybe
echo 55; // Számokat ki lehet anélkül is íratni
echo "<br>"; 
echo 5+5; // Műveleteket is ki lehet így íratni, viszont ha macskakörömbe rakjuk őket akkor nem adja össze, hanem csak sima szövegként jeleníti meg

// Kommentelés

// ez egy soros komment

/*

ez
egy 
több
soros
komment

*/


// Deklaráció

$a = "Hello World!"; // Mindig dollárjelet rakunk a változónk neve elé, majd egy = jel és, hogy mit deklarálunk cele

/*

Szöveget mindig macskaköröm v. zárójel közé teszünk
Számoknál NEM kell, hacsak nem szövegként akarjuk tárolni

*/

$String = "Ez egy szöveg";
$Integer = 5;
$Float = 3.14;
$Boolean = true;
$Array = [2, 3, 56];
$Object = "Ez egy szöveg";
$NULL = NULL;

var_dump(5);
echo "<br>"; 
var_dump("John");
echo "<br>"; 
var_dump(3.14);
echo "<br>"; 
var_dump(true);
echo "<br>"; 
var_dump([2, 3, 56]);
echo "<br>"; 
var_dump(NULL);