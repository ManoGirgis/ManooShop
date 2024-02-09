<?php
include_once 'Model/ArticuloDAO.php';
include_once 'Model/categoryDAO.php';
include_once 'Model/userDAO.php';
include_once 'Controller/compraController.php';
class mainController
{
    public function list()
    {
        $listaarticulos = ArticuloDAO::getALLArticulos();
        // $category = categoryDAO::getcategory($_GET["idcat"]);
        $view = 'View/Articulos/articulos.php';
        include_once 'main.php';
        // echo "Hola";
    }

    public function search()
    {
        $listaarticulos = ArticuloController::search();
        $view = 'View/Articulos/search.php';
        include_once 'main.php';
    }

    // ************* Categories ****************

    public function listcat()
    {
        $listacategory = categoryDAO::getALLcategory();
        $view = 'View/Category/catlist.php';
        include_once 'main.php';
    }
    /*
    public function addcategory()
    {
        $view = 'View/admin/categories/add.php';
        include_once 'main.php';
    }

    public function editcategory()
    {
        $category = categoryDAO::getcategory($_GET["idcategorys"]);
        $view = 'View/admin/categories/editar.php';
        include_once 'main.php';
    }

    public function deletecategory()
    {
        $category = categoryDAO::getcategory($_GET["idcategorys"]);
        $view = 'View/admin/categories/delete.php';
        include_once 'main.php';
    }
*/
    //*************** Users********************** 

    public function Login()
    {
        $view = 'View/interface/login.php';
        include_once 'main.php';
    }

    public function register()

    {
        $view = 'View/interface/crearusr.php';
        include_once 'main.php';
    }

    public function showusr()
    {
        $view = 'View/interface/showusr.php';
        include_once 'main.php';
    }
    //****************Products**************** (carrito)
    public function showcarrito()
    {
        $view = 'View/compras/carrito.php';
        include_once 'main.php';
    }
}
