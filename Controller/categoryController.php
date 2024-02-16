<?php
include_once 'Model/categoryDAO.php';
class categoryController
{
    public static function list()
    {
        $listacategory = categoryDAO::getALLcategory();
        //include_once 'View/header.php';
        //include_once 'View/Category/catlist.php';
        //include_once 'View/footer.php';
        return  $listacategory;
    }

    public function edit()
    {
        $idcategory = $_POST['idcategorys'];
        $catname = $_POST['catname'];
        categoryDAO::edit($idcategory, $catname);

        header("Location:" . url . "?controller=Dashboard&action=listcat");
        //header("Location:".url."?controller=Dashboard&action=category&idcategory=".$idcategory);
    }

    public function delete()
    {
        $idcategory = $_POST['idcategorys'];


        categoryDAO::delete($idcategory);

        header("Location:" . url . "?controller=Dashboard&action=listcat");
    }

    public function masinfo()
    {
        $category = categoryDAO::getcategory($_GET["idcategory"]);
        include_once 'main.php';
        include_once 'View/category/Show.php';
    }

    public function add()
    {
        $catname = $_POST['catname'];


        categoryDAO::add($catname);

        header("Location:" . url . "?controller=Dashboard&action=listcat");
    }
}
