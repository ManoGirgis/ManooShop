<?php
include_once 'Model/ArticuloDAO.php';
include_once 'categoryController.php';
include_once 'Model/commentDAO.php';
class ArticuloController
{
    public static function list()
    {
        $listaarticulos = ArticuloDAO::getALLArticulos();
       // $listacategory = categoryDAO::getALLCategory();
        return  $listaarticulos;
        //  include_once 'View//Articulos/articulos.php';

    }

    public function edit()
    {
        $idarticulos = $_POST['idarticulos'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $idcategoria = $_POST['idcategoria'];
        // $img = $_POST['img'];

        $targetDirectory = "img/";
        $targetFile = $targetDirectory . basename($_FILES['img']['name']);
        // echo $targetFile;
        move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile);
        $img = $_FILES["img"]["name"];
        ArticuloDAO::edit($idarticulos, $nombre, $precio, $descripcion, $idcategoria, $img);

        header("Location:" . url . "?controller=Dashboard");
        //&action=editarticle&idarticulos=".$idarticulos
    }

    public function delete()
    {
        $idarticulos = $_POST['idarticulos'];


        ArticuloDAO::delete($idarticulos);

        header("Location:" . url . "?controller=Dashboard&action=list");
    }

    public function masinfo()
    {
        $articulo = ArticuloDAO::getarticulo($_GET["idarticulos"]);
        $category = categoryDAO::getcategory($_GET["idcat"]);
        $listacomments = commentDAO::getcomments($_GET["idarticulos"]);
        include_once 'main.php';
        include_once 'View/Articulos/Show.php';
    }

    public function add()
    {
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $idcategoria = $_POST['idcategoria'];
        //$img = "img/" . $_FILES['img']['name'];

        $targetDirectory = "img/";
        $targetFile = $targetDirectory . basename($_FILES['img']['name']);
        move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile);
        // echo "The file " . htmlspecialchars(basename($_FILES["img"]["name"])) . " has been uploaded.";
        // echo "File Destination: " . $targetFile;
        $img = $_FILES["img"]["name"];
        ArticuloDAO::add($nombre, $precio, $descripcion, $idcategoria, $img);

        header("Location:" . url . "?controller=Dashboard");
    }

    public static function search()
    {
        $search = $_POST['search'];
        $listaarticulos = ArticuloDAO::search($search);
        //$view = 'View/Articulos/articulos.php';
        //include_once 'main.php';
        return $listaarticulos;
    }

    public static function filter()
    {
        $filter = $_POST['cats'];
        $listaarticulos = ArticuloDAO::getarticulobycat($filter);
        //$view = 'View/Articulos/articulos.php';
        //include_once 'main.php';
        return $listaarticulos;
    }
}
