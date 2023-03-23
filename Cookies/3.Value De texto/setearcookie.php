<?php
if ($_REQUEST['opcion'] == 'recordar')
	setcookie("mail", $_REQUEST['mailusuario'], time() + 60 * 60 * 24 * 365, "/");
elseif ($_REQUEST['opcion'] == 'norecordar')
	setcookie("mail", "", time() - 1000, "/");
?>

<html>

<head>
	<title>Documento sin título</title>
</head>

<body>
	<?php
	if ($_REQUEST['opcion'] == 'recordar')
		echo "COOKIE CREADA <br>";
	elseif ($_REQUEST['opcion'] == 'norecordar')
		echo "COOKIE ELIMINADA <br>";

	?>
	<a href="paginaPrincipal.php"> Vuelve </a>

</body>

</html>