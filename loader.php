<?php 
for ($x = 23001; $x <= 25000; $x++) {
    echo "seeto.no/gem/servlet/getGemObject?id=$x <br>";
	$y = 'seeto.txt';
$z = "seeto.no/gem/servlet/getGemObject?id=$x\n";
file_put_contents($y, $z, FILE_APPEND | LOCK_EX);
} 
?>