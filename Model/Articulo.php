<?php

class Articulo
{
    private $idarticulos;
    private $nombre;
    private $precio;
    private $descripcion;
    private $idcategory;
    private $img;

    public function __construct()
    {
    }

    /**
     * Get the value of idarticulos
     */
    public function getIdarticulos()
    {
        return $this->idarticulos;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Get the value of idcatergoria
     */
    public function getIdcatergoria()
    {
        return $this->idcategory;
    }

    /**
     * Set the value of idarticulos
     *
     * @return  self
     */
    public function setIdarticulos($idarticulos)
    {
        $this->idarticulos = $idarticulos;

        return $this;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Set the value of idcategory
     *
     * @return  self
     */
    public function setidcategory($idcategory)
    {
        $this->idcategory = $idcategory;

        return $this;
    }

    /**
     * Get the value of img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }
}
