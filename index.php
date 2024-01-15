<?php
//session_start();
include_once 'Model/ArticuloDAO.php';
include_once 'Controller/ArticuloController.php';
include_once 'Controller/DashboardController.php';
include_once 'Model/categoryDAO.php';
include_once 'Controller/categoryController.php';
include_once 'config/parameters.php';
include_once 'Controller/userController.php';
include_once 'Model/userDAO.php';
include_once 'Controller/compraController.php';
include_once 'Model/compraDAO.php';
include_once 'Controller/mainController.php';

if (!isset($_GET['controller'])) {
    header("Location:".url."?controller=main&action=list");
} else {
  //echo $_GET['controller'];
  $nombre_controlador = $_GET['controller'] . 'Controller';
  if (class_exists($nombre_controlador)) {
    $controller = new $nombre_controlador();
    if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
      $action = $_GET['action'];
    } else {
      $action = action_default;
    }

    $controller->$action();
   // echo $action;
  } else {
    $view = 'View/Articulos/articulos.php';
    header("Location:".url."?controller=main");
  }
}


//var_dump($listaarticulos);
