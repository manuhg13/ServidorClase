<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer tabla || PR 12 </title>
</head>
<body>

    <table border="1">
        <tr>
            <th>Título</th>
            <th>Director</th>
            <th>Género</th>
            <th>Estreno</th>
            <th>Nominaciones</th>
            <th>Nota</th>
        </tr>   
        <?php
            require('conexionBD.php');
            try {
                
                $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,BBDD);
                
                $sql='select * from mejorPelicula';
                $resultado= mysqli_query($conexion,$sql);
        
        
                while($fila = $resultado->fetch_array()){
                    echo "<tr>";
                    echo "<td>". $fila['titulo'] . "</td> ";
                    echo "<td>". $fila['director'] . "</td> ";
                    echo "<td>". $fila['genero'] . "</td> ";
                    echo "<td>". $fila['estreno'] . "</td> ";
                    echo "<td>". $fila['nominaciones'] . "</td> ";
                    echo "<td>". $fila['nota'] . "</td> ";
                    echo "</tr>";
                }
                
                mysqli_close($conexion);
                
            } catch (Exception $ex) {
                if ($ex->getCode()==1045){
                    echo "Credenciales incorrectas";
                }
                if ($ex->getCode()==2002){
                    echo "Acabado tiempo de conexión";
                }       
                if ($ex->getCode()==1049){
                    echo "No existe la base de datos no existe";
                }       
            }
        
        ?>

    </table>
</body>
</html>