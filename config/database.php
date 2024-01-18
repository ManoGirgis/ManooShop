<?php

class DataBase {
    public static function connect($host = 'localhost', $user = 'root', $pwd = 'Ilerna1234', $db = 'manoshop') {
       // public static function connect($host = 'sql201.infinityfree.com', $user = 'if0_35791445', $pwd = 'AYhvhzXI5dfhY', $db = 'manoshop') {

        $con = new mysqli($host, $user, $pwd, $db);
        
        if ($con == false) {
            die('Error en la base de datos');
        } else {
            return $con;
        }
    }
}