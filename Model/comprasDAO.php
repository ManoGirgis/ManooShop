<?php

include_once 'config/database.php';
include_once 'category.php';

class categoryDAO{
    public static function getALLcategory(){
        $con =DataBase::connect();
        $stmt = $con->prepare("SELECT * FROM category order by idcategory");
        $stmt->execute();
        $result = $stmt->get_result();

        
       $listacategory=[];

       while($category = $result->fetch_object('category')) {
         $listacategory[] = $category; 
        }
        return $listacategory;
    }

    public static function add($catname)
    {
        $con = Database::connect();
        $stmt = $con->prepare("INSERT INTO category (idcategory,catname) VALUES (?,?)");
        $stmt->bind_param("is", $idcategory,$catname);
        $stmt->execute();
        $con->close();
    }
    public static function edit($idcategory, $catname)
    {
        $con = Database::connect();

        $stmt = $con->prepare("UPDATE category SET catname = ? WHERE idcategory = ?;");
        $stmt->bind_param("si",$catname,$idcategory);
        $stmt->execute();
        $con->close();
       
    }
    public static function getcategory($id){
        $con = Database::connect();
        $stmt = $con->prepare("SELECT * FROM category WHERE idcategory = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        return $result->fetch_object('category');
    }

    public static function delete($id){
        $con = Database::connect();
        $stmt = $con->prepare("DELETE FROM category WHERE idcategory = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
       
    }
}


