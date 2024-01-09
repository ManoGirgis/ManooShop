<?php
include_once 'Model/ArticuloDAO.php';
include_once 'Model/categoryDAO.php';
include_once 'Model/userDAO.php';

class mainController
{
    //*************** Users********************** 

    public function Login()
    {
        include_once 'View/interface/login.php';
        include_once 'main.php';
    }

    public function register()
    
    {  include_once 'main.php';
        include_once 'View/interface/crearusr.php';
      
    }

}
