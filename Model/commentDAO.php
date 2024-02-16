<?php

include_once 'config/database.php';
include_once 'comment.php';

class commentDAO
{
    public static function getcomments($idart)
    {
        $con = DataBase::connect();
        $stmt = $con->prepare("SELECT * FROM comments where prod_ID = ?");
        $stmt->bind_param("i", $idart);
        $stmt->execute();
        $result = $stmt->get_result();


        $listacomments = [];

        while ($comment = $result->fetch_object('comment')) {
            $listacomments[] = $comment;
        }
        return $listacomments;
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
}
