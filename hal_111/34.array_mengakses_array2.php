<?php
$macam2 = array(121, "Joko", 44.99, "Belajar PHP", true);

echo $macam2[0];
echo "<br>";
echo $macam2[1];
echo "<br>";
echo $macam2[2];
echo "<br>";
echo $macam2[3];
echo "<br>";
echo $macam2[4];


$macam2[] = "Duniailkom";
$macam2[] = 212;
$macam2[] = 3.14;
echo "<pre>";
var_dump($macam2);
echo "</pre>"; 
?>