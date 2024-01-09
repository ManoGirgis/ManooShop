<?php
include_once 'Model/ArticuloDAO.php';
include_once 'Model/categoryDAO.php';
include_once 'Model/userDAO.php';

class DashboardController
{
    public function list()
    {
        $listaarticulos = ArticuloDAO::getALLArticulos();
        // $category = categoryDAO::getcategory($_GET["idcat"]);
        $view = 'View/admin/articulos/listado.php';
        include_once 'View/admin/dashboard.php';
    }

    public function addarticle()
    {
        $listacategory = categoryDAO::getALLcategory();
        //    $listacategory = categoryDAO::getALLcategory();

        $view = 'View/admin/articulos/add.php';
        include_once 'View/admin/dashboard.php';
    }

   public function editarticle()
    {
        $articulo = ArticuloDAO::getarticulo($_GET["idarticulos"]);
        $listacategory = categoryDAO::getALLcategory();
        $view = 'View/admin/articulos/editar.php';
        include_once 'View/admin/dashboard.php';
    }

    public function deletearticle()
    {
        $category = categoryDAO::getcategory($_GET["idcat"]);
        $articulo = ArticuloDAO::getarticulo($_GET["idarticulos"]);
        $view = 'View/admin/articulos/delete.php';
        include_once 'View/admin/dashboard.php';
    }

    // ************* Categories ****************

    public function listcat()
    {
        $listacategory = categoryDAO::getALLcategory();
        $view = 'View/admin/categories/listado.php';
        include_once 'View/admin/dashboard.php';
    }

    public function addcategory()
    {
        $view = 'View/admin/categories/add.php';
        include_once 'View/admin/dashboard.php';
    }

    public function editcategory()
    {
        $category = categoryDAO::getcategory($_GET["idcategorys"]);
        $view = 'View/admin/categories/editar.php';
        include_once 'View/admin/dashboard.php';
    }

    public function deletecategory()
    {
        $category = categoryDAO::getcategory($_GET["idcategorys"]);
        $view = 'View/admin/categories/delete.php';
        include_once 'View/admin/dashboard.php';
    }

    //*************** Users********************** 

    public function Login()
    {
        include_once 'View/interface/login.php';
        include_once 'main.php';
    }

    /*public function addcategory(){
    $view = 'View/admin/categories/add.php';
    include_once 'View/admin/dashboard.php';
}

public function editcategory(){
    $category = categoryDAO::getcategory($_GET["idcategorys"]);
    $view = 'View/admin/categories/editar.php';
    include_once 'View/admin/dashboard.php';
}

public function deletecategory(){
    $category = categoryDAO::getcategory($_GET["idcategorys"]);
    $view = 'View/admin/categories/delete.php';
    include_once 'View/admin/dashboard.php';
}*/
}
