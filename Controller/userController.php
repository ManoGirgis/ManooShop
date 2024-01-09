<?php
include_once 'Model/userDAO.php';
session_start();
class userController
{
    public function loginbyMail()
    {
        $email = $_POST['email'];
        $pswd = $_POST['pswd'];
        $user = userDAO::getUserbymail($email);
        if(isset($user)){
            $_SESSION["User.name"] = $user->getFirstname();
            if($pswd == $user->getPassword())
            {
                $_SESSION["User"] = $user;
                header("Location:" . url . "?controller=Articulo");
            }
            else
            {
                header("Location:" . url . "?controller=Dashboard&action=Login&error=1");
            }
        }else{
            header("Location:" . url . "?controller=Dashboard&action=Login&error=2");
        }
       
    }  

    public function edit()
    {
        $idarticulos = $_POST['idarticulos'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $idcategoria = $_POST['idcategoria'];
        $img = $_POST['img'];

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

    public function logout()
    {
        session_destroy();        
        header("Location:" . url . "?controller=Articulo");
    }

    public function showuser()
    {
        include_once 'main.php';
    include_once 'View/interface/showusr.php';
    }
}
