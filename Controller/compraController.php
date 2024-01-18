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
        header("Location:" . $_SERVER['HTTP_REFERER']);
    }

    public function dontwant()
    {
        $id = $_GET["prod"];
        $listarts = ArticuloDAO::getarticulo($id);
        $index = array_search($listarts, $_SESSION["carrito"]);
        unset($_SESSION["carrito"][$index]);
        header("Location:" . $_SERVER['HTTP_REFERER']);
    
    }

    public static function exista($id)
    {
        $art = ArticuloDAO::getarticulo($id);
        if(array_search($art,$_SESSION["carrito"]))
        {
            return true;
        }else{return false;}

    }

    public static function numberss()
    {
        return count($_SESSION["carrito"]);
    }
}
