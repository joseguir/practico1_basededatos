<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Obras</title>
</head>
<body> 
    <?php

       $id_obras = $_REQUEST['id_obras'];
       $nombre = $_REQUEST['nombre'];
       $año = $_REQUEST['año'];
       $autores = $_REQUEST['autores'];
       $partituras = $_REQUEST['partituras'];
   
        $conexion = mysqli_connect("localhost", "root", "", "ejercicio") or die("Problemas en la conexion");

        $sql = "UPDATE obras_relevantes SET nombre='$nombre', año= '$año', autores='$autores', partituras='$partituras' WHERE id_obras='$id_obras' ";

        mysqli_query($conexion, $sql) or die("Problemas al actualizar");

        echo "Obra actualizada" . "<br>";

   ?>

   <a href="./consulta_obras.html">Volver</a>
  
</body>
</html>