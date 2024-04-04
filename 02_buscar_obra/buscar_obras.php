<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>
    <style>
        table, th, tr, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table {
            margin: 20px auto;
        }

        th, td {
            width: 20%;
            height: 20px;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php 

        $conexion = mysqli_connect('localhost', "root", "", "ejercicio") or die("Problemas en la conexion");

        $buscar = isset($_REQUEST['buscar']) ? $_REQUEST['buscar'] : "" ;

        $sql = "SELECT id_obras, nombre, año, autores, partituras FROM obras_relevantes WHERE nombre='$buscar'";

        $registro = mysqli_query($conexion, $sql) or die('Problemas al hacer la consulta');

        if($reg=mysqli_fetch_array($registro)) {

        ?>
            <table>
               <tr>
                  <th>Nombre</th>
                  <th>Año</th>
                  <th>Autores</th>
                  <th>Partituras</th>
               </tr>
               <tr>
                <td><?php echo $reg['nombre']; ?></td>
                <td><?php echo $reg['año']; ?></td>
                <td><?php echo $reg['autores']; ?></td>
                <td><?php echo $reg['partituras']; ?></td>
               </tr>
            </table>

            <h2>Editar Obra</h2>
            <form action="actualizar_obras.php" method="post">
            <input type="hidden" name="id_obras" value="<?php echo $reg['id_obras']; ?>">
            <label>Nombre:</label>
            <input type="text" name="nombre" placeholder="Nombre de la obra" value="<?php echo $reg['nombre']; ?>"><br>
            <label>Año:</label>
            <input type="datetime" name="año" placeholder="año" value="<?php echo $reg['año']; ?>"><br>
            <label>Autores:</label>
            <input type="text" name="autores" placeholder="Autores" value="<?php echo $reg['autores']; ?>"><br>
            <label>Partituras:</label>
            <input type="text" name="partituras" placeholder="Partituras" value="<?php echo $reg['partituras']; ?>"><br>
            <button type="submit">Actualizar</button>
            </form>
        <?php

        } else {
            echo "No se encontro";
        }

        
    
    ?>
</body>
</html>