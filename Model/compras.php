<?php 

class compras{
    private $idcategory;
    private $catname;
    

    public function __construct(){
    
    }

    

    /**
     * Get the value of catname
     */ 
    public function getCatname()
    {
        return $this->catname;
    }

    /**
     * Set the value of catname
     *
     * @return  self
     */ 
    public function setCatname($catname)
    {
        $this->catname = $catname;

        return $this;
    }

    /**
     * Get the value of idcategory
     */ 
    public function getIdcategory()
    {
        return $this->idcategory;
    }

    /**
     * Set the value of idcategory
     *
     * @return  self
     */ 
    public function setIdcategory($idcategory)
    {
        $this->idcategory = $idcategory;

        return $this;
    }
}