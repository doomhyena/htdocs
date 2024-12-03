<?php

echo "<h1>3.hét Anyaga</h1>";
echo "<h2>1.óra Anyaga</h2>";


$list = array();
$randomnumber = rand(0, 1000);

for ($i = 0; $i < 20; $i++) {
    array_push($list, $randomnumber);
    print_r($list);
}
?>