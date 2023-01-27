<?
    //BBDD
    require_once('./config/conexionBD.php');

    //DAO
    require_once('./dao/FactoryBD.php');
    require_once('./dao/DAO.php');
    require_once('./dao/UsuarioDAO.php');
    require_once('./dao/ProductoDAO.php');
    require_once('./dao/VentasDAO.php');
    require_once('./dao/AlbaranDAO.php');

    //Modelo
    require_once('./model/Usuario.php');
    require_once('./model/Producto.php');
    require_once('./model/Ventas.php');
    require_once('./model/Albaran.php');

    //Core
    require_once('./core/funciones.php');

    //Controladores 
    $controladores=array(
        'home'=>'./controller/homeController.php',
        'login'=>'./controller/loginController.php',
        'tienda'=>'./controller/tiendaController.php',
        'user'=>'./controller/userController.php',
        'registro'=>'./controller/registroController.php',
    );

    $vistas=array(
        'home'=>'./view/homeView.php',
        'login'=>'./view/loginView.php',
        'tienda'=>'./view/tiendaView.php',
        'user'=>'./view/userView.php',
        'registro'=>'./view/registroView.php',
    );


?>