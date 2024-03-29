<?
    //BBDD
    require_once('./config/conexionBD.php');

    //Modelo
    require_once('./dao/FactoryBD.php');
    require_once('./dao/DAO.php');
    require_once('./modelo/Usuario.php');
    require_once('./modelo/Producto.php');
    require_once('./dao/UsuarioDAO.php');
    require_once('./dao/ProductoDAO.php');
    
    //Core
    require_once('./core/funciones.php');
    require_once('./core/validaciones.php');
    

    //Controladores
    $controladores=array(
        'login'=>'./controlador/loginController.php',
        'user'=>'./controlador/UserController.php',
        'registro'=>'./controlador/registroController.php',
        'home'=>'./controlador/homeController.php',
        'producto'=>'./controlador/productoController.php',
        'admin'=>'./controlador/adminController.php'
    );

    //Vistas
    $vistas= array(
        'home'=>'homeView.php',
        'login'=>'loginView.php',
        'user'=>'UserView.php',
        'registro'=>'registroView.php',
        'verProducto'=>'verProductoView.php',
        'admin'=>'adminView.php',
        'listaProd'=>'listaProductosView.php'
    );
    ?>