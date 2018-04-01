<?php 
header('Content-Type: text/html; charset=utf-8');
	
	$x = rand(0,100);
	echo "Число $x<br/>";
	$a = 1;
	$b = 1;
	$c;

	while (true) {
		
		if ($a > $x) {			
			echo "Заданное число не входит в числовой ряд";
			break;
		}
		
		elseif ($a == $x) {
			echo "Заданное число входит в числовой ряд";
			break;
		}

		else {
			$c = $a;
			$a = $a+$b;
			$b = $c;
		}

	}

 ?>