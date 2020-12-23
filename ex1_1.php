<?php 
echo "<h1>Giải phương trình bậc hai:"."<br>"."ax <sup> 2 </sup> + bx + c = 0 </h1>";
 	$a="2";$b="1";$c="5";
 	echo "Ta có phương trình:".$a."x<sup>2</sup> "."+".$b."x"."+".$c."= 0";
 	echo "<br>";
if ($a==0) {
    if ($b==0){
        if ($c==0) {
            echo "Phương trình có vô số nghiệm";
            }

        else{
             echo "Phương trình vô nghiệm";
            }
    }
    else{
        echo "Phương trình có nghiệm duy nhất x = " . -$c/$b;
        }
    
    } 
else{

    $delta=$b*$b-4*$a*$c;
    if ($delta < 0) {
        echo "Phương trình vô nghiệm";
    }
    else if ($delta == 0) {
        echo "Phương trình có nghiệm kép x1 = x2 =".-$b/(2*$a);
    }
    else{
        echo "Phương trình có 2 nghiệm phân biệt x1 , x2 <br>" ;
        $x1= (-$b-sqrt($delta))/(2*$a);
        $x2= (-$b+sqrt($delta))/(2*$a);
        echo "x1 = " .$x1 ."<br>";
        echo "x1 = " .$x2 ."<br>";
    }}
 ?>