<?php
include_once 'Model/compraDAO.php';
include_once 'Model/ArticuloDAO.php';

class compraController
{
  
    public function buy()
    {  
        $id = $_GET["prod"];
        $articulo = ArticuloDAO::getarticulo($id);

        if (!isset($_SESSION["carrito"])) {
           //$_SESSION["carrito"] = [];
        }

        $_SESSION["aaa"] = $articulo;
        var_dump($_SESSION["aaa"]);
        //header("Location:" . url . "?controller=main&action=showcarrito");
    }
}
