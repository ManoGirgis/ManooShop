<?php
include_once 'Model/userDAO.php';

class userController
{
    public function loginbyMail()
    {
        $email = $_POST['email'];
        $pswd = $_POST['pswd'];
        $user = userDAO::getUserbymail($email);
        if(isset($user)){
            $_SESSION["User.name"] = $user->getFirstname();
            $_SESSION["User.id"] = $user->getIdUsers();
            if($pswd == $user->getPassword())
            {
                $_SESSION["User"] = $user;
                if($user->getRule() == 1){
                    header("Location:" . url . "?controller=Dashboard&action=list");
                    if (!isset($_SESSION["carrito".$_SESSION["User.id"]])) {

                        $_SESSION["carrito".$_SESSION["User.id"]] = [];
                    }
                
                }else{
                    header("Location:" . url . "?controller=main&action=list");
                    if (!isset($_SESSION["carrito".$_SESSION["User.id"]])) {

                        $_SESSION["carrito".$_SESSION["User.id"]] = [];
                    }
                }
                
            }
            else
            {
                header("Location:" . url . "?controller=Dashboard&action=Login&error=1");
            }
        }else{
            header("Location:" . url . "?controller=Dashboard&action=Login&error=2");
        }
       
    }  

  

    public function Register()
    {
        if($_POST['pswd'] == $_POST['repswd']){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $bday = $_POST['bday'];
        $email = $_POST['email'];
        $pswd = $_POST['pswd'];
     

        userDAO::reg($firstname, $lastname, $username, $bday, $email,$pswd);

        header("Location:" . url . "?controller=main&action=login");
    } else {
            header("Location:" . url . "?controller=main&action=register&error=1");
        }
        //&action=editarticle&idarticulos=".$idarticulos
    }

    public function logout()
    {
        unset($_SESSION['User']);
        unset($_SESSION['User.name']);
       // session_destroy();   
        header("Location:" . url . "?controller=main&action=list");
    }

    public function showuser()
    {
        include_once 'main.php';
    include_once 'View/interface/showusr.php';
    }



    /* public function delete()
    {
        $idarticulos = $_POST['idarticulos'];


        ArticuloDAO::delete($idarticulos);

        header("Location:" . url . "?controller=Dashboard&action=list");
    }*/
     /* public function edit()
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
    }*/
}
