<?
    require('./Alumno.php');


    $al= new Alumno('Manuel',26,'manu@tuvieja.com','DAW2');

    echo $al->__toString();

    echo '<br><br>';

    $al->darBaja();

    echo $al;
?>