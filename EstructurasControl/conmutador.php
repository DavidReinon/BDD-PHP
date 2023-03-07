<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
$pais =$_REQUEST["pais"];

switch ($pais) {
	case "NINGUNO": echo ("El usuario NO TIENE PAIS");
			           break;
	case "INGLATERRA": echo ("El usuario es inglés");

			           break;
	case "ESPAÑA": echo ("El usuario es español");
			        break;
	case "CHINA": echo ("El usuario es chino");
			        break;
	case "FRANCIA": echo ("El usuario es francés");
			         break;
    default: echo ("El usuario es un ilegal");
}
	

?>
</body>
</html>