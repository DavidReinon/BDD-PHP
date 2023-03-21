<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

$pais=$_REQUEST["pais"];

switch ($pais) {
	case 'n':
		echo ("No te vas de vacaciones<br>");
		break;
	case 'esp':
		echo ("Te vas a Madrid<br>");
		break;
	case 'fr':
		echo ("Te vas a Paris<br>");
		break;
	case 'in':
		echo ("Te vas a Londres<br>");
		break;
	
	
	default:
		echo ("Nada de nada");
		break;
}

echo ("<a href='selec_pais.html'>Volver</a>");
?>
</body>
</html>