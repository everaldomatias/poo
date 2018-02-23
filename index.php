<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Poo</title>
	</head>
	<body>
		<?php require_once 'core/Caneta.php'; ?>
		<?php
			$c1 = new Caneta;
			$c1->modelo = "BIC Cristal";
			$c1->cor = "Azul";
			$c1->rabiscar();
			$c1->tampar();
		?>
		<pre>
			<?php print_r( $c1 ); ?>
		</pre>
	</body>	
</html>