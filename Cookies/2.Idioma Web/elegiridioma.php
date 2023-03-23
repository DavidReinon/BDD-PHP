<?php
if ($_REQUEST["radio"]=="sp")
	setcookie("idioma","sp",time()+60*60*24*365,"/");
elseif ($_REQUEST["radio"]=="eng") 
    setcookie("idioma","eng",time()+60*60*24*365,"/");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

Se creó la cookie del idioma<br>
<a href="pagina1.php"> Retornar</a>



</body>
</html>