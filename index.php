<!DOCTYPE html>
<html>
<head>
	<title>PHP Store</title>
</head>
<body>
	<?php
		$name = "PHP store";
		$credit =1000;
		echo "<h1>Welcome to ".$name."!</h1>";
		echo "<h1>You have $".$credit."in your wallet!</h1>";
		$products['computer'] = 750;
		$products['car'] = 15000;
		$products['iphone'] = 1000;
		$products['Toaster'] = 75;
		foreach($products as $key=>$value){
			echo "<p>A ".$key." costs $".$value."</p>";
		}
		echo "<h1>Items that you can afford</h1>";
		foreach($products as $key=>$value){
			if($value <= $credit){
				echo "<p>".$key."</p>";
			}
		}
		

	?>

</body>
</html>