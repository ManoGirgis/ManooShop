<?php
error_reporting(0);
class DataBase {
    public static function connect($host = 'localhost', $user = 'root', $pwd = 'Ilerna1234', $db = 'manoshop') {
      //  public static function connect($host = 'sql201.infinityfree.com', $user = 'if0_35791445', $pwd = 'AYhvhzXI5dfhY', $db = 'if0_35791445_manoshop') {
 //echo "Error yad";
 try{
    $con = new mysqli($host, $user, $pwd, $db);
 }
    catch(mysqli_sql_exception $e){
        echo $e->getMessage();
        die();
    }    
         
        if ($con == false) { 

            die('Error en la base de datos');
        } else {
            return $con;
        }
    }
}