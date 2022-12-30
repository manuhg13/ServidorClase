<?

    function anadirBBDD(){
        return file_get_contents('./BBDD/tienda.sql');
    }

    /*-----------Sesiones y perfiles---------*/
    function estaValidado(){
        if (isset($_SESSION['validado'])){
            return true;
        }

        return false;
    }
    function esAdmin(){
        if(isset($_SESSION['perfil'])){
            if ($_SESSION['perfil']=='ADM01'){
                return true;
            }
            return false;
        }
    }
    function esModerador(){
        if(isset($_SESSION['perfil'])){
            if ($_SESSION['perfil']=='MOD02'){
                return true;
            }
            return false;
        }
    }
    function esNormal(){
        if(isset($_SESSION['perfil'])){
            if ($_SESSION['perfil']=='NOR03'){
                return true;
            }
            return false;
        }
    }
    

?>