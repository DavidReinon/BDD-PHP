<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<body>
	<?php
	setcookie("idioma", "__", time() - 1000, "/");
	echo "Se borró la cookie<br>";

	?>
	<a href="pagina1.php">Volver Seleccion Idioma</a>
</body>

</html>