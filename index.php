<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Poo</title>
	</head>
	<body>
		<?php require_once 'core/Caneta.php'; ?>
		<pre>
			<?php
				$c1 = new Caneta;
				$c1->cor = "Azul";
				$c1->ponta = 0.5;
				$c1->tampada = true;
				$c1->tampar();
				print_r($c1);
			?>
		</pre>
		<?php echo $c1->rabiscar(); ?>
	</body>	
</html>