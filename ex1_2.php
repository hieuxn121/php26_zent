<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		 $result=" ";
		 if (isset($_POST['calculate']))
		 {
			 if(isset($_POST['a']))
			 	$a = (float)trim($_POST['a']);
			 else{
			 	$a = " ";
			 	echo "Chưa nhập số a";
			 }
			 if(isset($_POST['b']))
			 	$b = (float)trim($_POST['b']);
			 else{
			 	$b = " ";
			 	echo "Chưa nhập số b";
			 }
			 if ($a == 0 && $b == 0)
			 	$result = "Phương trình có vô số nghiệm";
			 else if ($a == 0 && $b !== 0)
			 $result = "Phương trình vô nghiệm. Số a phải là số khác 0";
			 else
			 $result = (0-$b)/$a;	
		}
	?>
	<h1>Giai phuong trinh bac nhat: ax+b = 0</h1>
	<form action="" method="post">
		<input type="text" name="a" value="" placeholder="Nhap gia tri a: ">
        <input type="text" name="b" value="" placeholder="Nhap gia tri b"> <br><br>
        <input id="sub" type="submit" name="calculate" value="Tinh">
	</form>
	<br>
	<?php echo "Ket qua: ".$result; 
	?>
</body>
</html>
