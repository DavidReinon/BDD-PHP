<?php
$id = $_POST['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css" />
    <title>Estas seguro de eliminar?</title>
</head>

<body>
    <h1>Adevertencia</h1>
    <h2>Esta accion borrara el registro seleccionado y no se podra deshacer ¿Estas seguro de eliminar?</h2>
    <form action='eliminar_clase.php' method='post'>
        <input type='hidden' name='id' value='<?php echo $id; ?>'>
        <button type='submit' name='confirmar' value='confirmar'>Confirmar Accion</button>
        <a href='../mostrar_datos_clases.php'><button type='button'>Cancelar</button></a>
    </form>
</body>

</html>