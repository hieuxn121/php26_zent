
<?php 
	echo "<pre>";
	echo "<h1>         Bảng cửa chương bằng for</h1>";
	echo "<p>                                 Bảng cửa chương</p>"."<br>";
	echo "</pre>";
   for ($i=1; $i <= 10 ; $i++) { 
   	  for ($j=2; $j <=9 ; $j++) { 
   	  	echo "<span>&nbsp;&nbsp;&nbsp ".$j." x ".$i." = ".$i*$j;
   	  }
   	  echo "<br><br><br>";
   }
 ?>