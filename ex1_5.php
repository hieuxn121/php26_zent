<?php 
$sum = 0;
$n=20;
for ($i=0; $i <=$n ; $i++) { 
if ($i%2 == 0) {
$sum =$sum +$i;
}
}
echo "Tổng của 10 số chẵn đầu tiên: ".$sum;
?>