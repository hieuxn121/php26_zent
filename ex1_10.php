<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		$result="";
		$n="";
		if(isset($_POST['calculate'])){
			  $n = isset($_POST['n']) ? (float)trim($_POST['n']) : '';
			if ($n == "") {
				$result = "Bạn chưa nhập giá trị của n";
			}
			else if($n <= 0)
				$result = "Giá trị của n phải lớn hơn 0";
			else
				{
					$result = 0;
					for ($i=1; $i <= $n ; $i++) { 
						$ele = 1;
						for ($j=1; $j <= $i; $j++) { 
							$ele = $ele * $j;
						}
						$result = $result + ($i/$ele);
					}
				}
		}
	 ?>
	<h1>Tính tông: 1/1! + 2/2! + ... + n/n!</h1>
	<form action="" method="POST">
		<input type="text" name="n" placeholder="Nhập giá trị của n"> 
		<input type="submit" name="calculate" value="Tinh">
	</form>
	<br><br>
	<?php echo "Kết quả:".$result; ?>
</body>
</html>