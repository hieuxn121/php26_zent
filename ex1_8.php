<?php 
$n = 7;
 for ($i=$n; $i >=1 ; $i--) { 
	for ($j=$n-$i; $j >= 1 ; $j--) { 
		echo "<span>&nbsp;&nbsp;&nbsp";
	}
	for ($k=$i; $k >=1 ; $k--) { 
		echo "#"." ";
	}
	echo "<br><br>";
 }
 ?>