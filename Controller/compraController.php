<?php
session_start();
include_once 'Model/compraDAO.php';
include_once 'Model/ArticuloDAO.php';

class compraController
{
    public function buy()
    {
        if(isset($_SESSION["User"])){
            $id = $_GET["prod"];
        $listarts = ArticuloDAO::getarticulo($id);

        if (!isset($_SESSION["carrito" . $_SESSION["User.id"]])) {

            $_SESSION["carrito" . $_SESSION["User.id"]] = [];
        }
        array_push($_SESSION["carrito" . $_SESSION["User.id"]], $listarts);

        //var_dump($_SESSION["carrito"]);
        //var_dump($listarts);
        header("Location:" . $_SERVER['HTTP_REFERER']);
        }
        else {
            header("Location:" .url. "?controller=main&action=login");
        }
        
    }

    public function dontwant()
    {
        $id = $_GET["prod"];
        $listarts = ArticuloDAO::getarticulo($id);
        $index = array_search($listarts, $_SESSION["carrito" . $_SESSION["User.id"]]);
        unset($_SESSION["carrito" . $_SESSION["User.id"]][$index]);
        header("Location:" . $_SERVER['HTTP_REFERER']);
    }

    public static function exista($id)
    {
        $art = ArticuloDAO::getarticulo($id);

        foreach ($_SESSION["carrito" . $_SESSION["User.id"]] as $arti) {
            if ($arti->getIdarticulos() == $id) {
                return true;
            }
        }
        return false;
        /*   if(array_search($art,$_SESSION["carrito".$_SESSION["User.id"]]))
        {  
            return true;
        }else{return false;}*/
    }

    public static function numberss()
    {
        if (isset($_SESSION["carrito" . $_SESSION["User.id"]])) {
            return count($_SESSION["carrito" . $_SESSION["User.id"]]);
        } else {
            return 0;
        }
    }
}
