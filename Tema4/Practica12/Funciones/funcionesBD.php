<?php
    /* ------------Funciones del index------------------*/ 
    function enviarBBDD(){
        if (isset($_REQUEST['script'])){
            return true;
        }
        return false;
    }

    function anadirBBDD(){
        return file_get_contents('./BBDD/cine.sql');
    }

    function vacio($dato){
        if (empty($_REQUEST[$dato])) {
            return true;
        }else {
            return false;
        }
    }

    /*------------Funciones para CRUD---------------------- */
    
    function existe($nom){
        if (isset($_REQUEST[$nom])){
            return true;
        }
        return false;
    }

    function enviado(){
        if (isset($_REQUEST['enviado'])){
            return true;
        }
        return false;
    }

    function patFecha(){
        $patron='/^([0-9]{1,4})-(1[0-2]?|[1-9])-([0-2]?[0-9]|3[0-1])$/';
        if(preg_match($patron,$_REQUEST['estreno'])==1){

            return true;
        } 
        return false;
    }
?>