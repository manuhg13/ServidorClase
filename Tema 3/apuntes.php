<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Apuntes Tema 3</title>
</head>
<body>
    <?php
        include_once("../CSS/cabecera.html");
    ?>
    <?php
        include_once("../CSS/intro.html");
        echo "<h2>Nave espacial (<=>) </h2>";
        $a="b";
        $b="a";
        var_dump($a<=>$b);
        echo "<h2>Lógicos</h2>";
        $a= 5;
        $b= 2;
        var_dump($a & $b);
        echo "<br>";
        var_dump($a << $b);
    ?>
</body>
</html>