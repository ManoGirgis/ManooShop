<?php

include_once 'config/database.php';
include_once 'Articulo.php';
include_once 'compras.php';
include_once 'user.php';

class compraDAO
{
    public static function getprodbyid($email)
    {
        $con = DataBase::connect();
        $stmt = $con->prepare("SELECT * FROM users WHERE email = ?"); // Password and Email or ID
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_object('user');
    }


    public static function reg($firstname, $lastname, $username, $bday, $email,$pswd)
    {
        $con = Database::connect();
        $stmt = $con->prepare("INSERT INTO users (firstname, lastname, username, birthdate, email, password) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("ssssss", $firstname, $lastname, $username, $bday, $email,$pswd);
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
