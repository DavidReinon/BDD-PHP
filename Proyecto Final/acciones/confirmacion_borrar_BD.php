<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css" />
    <title>Document</title>
</head>

<body>
    <h1>Atencion: Esta accion borrara la base de datos</h1>
    <h2>Si esta seguro de que desea borrar la base de datos, escriba 'borrar' en el siguiente campo</h2>
    <form action='borrar_BD.php' method='post'>
        <input type='text' name='confirmacion'>
        <button type='submit' value='Confirmar Acción'>Confirmar Accion</button>
        <a href='../index.html'><button type='button'>Cancelar</button></a>
    </form>
</body>

</html>