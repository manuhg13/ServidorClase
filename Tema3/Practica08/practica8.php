<?php
    require("validador.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 8 || Manuel Hernández Gómez</title>
</head>
<body>
    <form action="./practica8.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="idAlfabetico">Alfabético</label>
            <input type="text" name="alfabetico" id="idAlfabetico" placeholder="Nombre" value="<?php
                if (enviado() && !vacio("alfabetico")) {
                    echo $_REQUEST['alfabetico'];
                }
            ?>">
            <?php
                if (vacio("alfabetico") && enviado() && is_nan($_REQUEST['alfabetico'])){
                    echo "<p style='color: red'> Introduce caracteres no numericos</p>";
                }
            ?>
        </p>
        <p>
        <label for="idAlfabetico">Alfabético</label>
            <input type="text" name="alfabetico" id="idAlfabetico" placeholder="Nombre" value="<?php
                if (enviado() && !vacio("alfabetico")) {
                    echo $_REQUEST['alfabetico'];
                }
            ?>">
        </p>
    </form>
</body>
</html>