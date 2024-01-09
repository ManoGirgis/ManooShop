<?php

include_once 'config/database.php';
include_once 'user.php';

class userDAO
{
    public static function getUserbymail($email)
    {
        $con = DataBase::connect();
        $stmt = $con->prepare("SELECT * FROM users WHERE email = ?"); // Password and Email or ID
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_object('user');
    }


    public static function add($nombre, $precio, $descripcion, $idcategoria, $img)
    {
        $con = Database::connect();
        $stmt = $con->prepare("INSERT INTO articulos (nombre, precio, descripcion, idcategory, img) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sdsis", $nombre, $precio, $descripcion, $idcategoria, $img);
        $stmt->execute();
        $con->close();
    }

    public static function edit($idarticulos, $nombre, $precio, $descripcion, $idcategoria, $img,)
    {
        $con = Database::connect();

        $stmt = $con->prepare("UPDATE articulos SET nombre = ?, precio = ?, descripcion = ?, idcategory = ?, img = ? WHERE idarticulos = ?;");
        $stmt->bind_param("sdsisi", $nombre, $precio, $descripcion, $idcategoria, $img, $idarticulos);
        $stmt->execute();
        $con->close();
        /*UPDATE articulos SET nombre = ?, precio = ?, descripcion = ?, idcategory = ?, img = ? WHERE idarticulos = ?;*/
    }

    public static function getarticulo($id)
    {
        $con = Database::connect();
        $stmt = $con->prepare("SELECT * FROM articulos WHERE idarticulos = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_object('Articulo');
    }

    public static function delete($id)
    {
        $con = Database::connect();
        $stmt = $con->prepare("DELETE FROM articulos WHERE idarticulos = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
