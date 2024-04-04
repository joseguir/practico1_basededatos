<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

    $nombre = $_REQUEST['nombre'];
    $año = $_REQUEST['anio'];
    $autores = $_REQUEST['autores'];
    $partituras = $_REQUEST['partituras'];


     $conexion = mysqli_connect("localhost", "root", "", "ejercicio") or die("Problemas en la conexion");

    $sql = "INSERT INTO obras_relevantes (nombre, año, autores, partituras) VALUES ('$nombre', '$año', '$autores', '$partituras')";

    mysqli_query($conexion, $sql) or die("Problemas en el insert " . mysqli_error($conexion));

    mysqli_close($conexion);

    echo "registro guardado" . "<br>"; 


?>

<a href="agregar_obras.html">Volver</a>
</body>
</html>

