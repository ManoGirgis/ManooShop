<?php
session_start();
include_once 'Model/compraDAO.php';
include_once 'Model/ArticuloDAO.php';

class compraController
{
    public function buy()
    {
        $id = $_GET["prod"];
        $listarts = ArticuloDAO::getarticulo($id);

        if (!isset($_SESSION["carrito"])) {

            $_SESSION["carrito"] = [];
        }
        array_push($_SESSION["carrito"], $listarts);

        //var_dump($_SESSION["carrito"]);
        //var_dump($listarts);
        header("Location:" . url . "?controller=main&action=showcarrito");
    }

    public function dontwant()
    {
        $id = $_GET["prod"];
        $listarts = ArticuloDAO::getarticulo($id);
        $index = array_search($listarts, $_SESSION["carrito"]);
        unset($_SESSION["carrito"][$index]);
        header("Location:" . url . "?controller=main&action=showcarrito");
    
    }
}
