<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer fichero</title>
</head>
<body>
    <form action="">
        <textarea name="area" id="idArea" cols="30" rows="10" readonly>
            <?php
                if($abierto=fopen($_REQUEST['fichero'],'r')){
                    while($linea=fgets($abierto,filesize($_REQUEST['fichero']))){
                        echo $linea;
                    }
                }
            ?>
        </textarea>
    </form>
</body>
</html>