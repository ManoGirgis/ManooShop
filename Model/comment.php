<?php

class comment
{
    private $idcomments;
    private $id_user;
    private $comment;
    private $Rating;
    private $prod_ID;
    private $date;
    private $username;
    private $usrpic;
    public function __construct()
    {
    }

   

    /**
     * Get the value of idcomments
     */ 
    public function getIdcomments()
    {
        return $this->idcomments;
    }

    /**
     * Set the value of idcomments
     *
     * @return  self
     */ 
    public function setIdcomments($idcomments)
    {
        $this->idcomments = $idcomments;

        return $this;
    }

    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of comment
     */ 
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set the value of comment
     *
     * @return  self
     */ 
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get the value of Rating
     */ 
    public function getRating()
    {
        return $this->Rating;
    }

    /**
     * Set the value of Rating
     *
     * @return  self
     */ 
    public function setRating($Rating)
    {
        $this->Rating = $Rating;

        return $this;
    }

    /**
     * Get the value of prod_ID
     */ 
    public function getProd_ID()
    {
        return $this->prod_ID;
    }

    /**
     * Set the value of prod_ID
     *
     * @return  self
     */ 
    public function setProd_ID($prod_ID)
    {
        $this->prod_ID = $prod_ID;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Get the value of usrpic
     */ 
    public function getUsrpic()
    {
        return $this->usrpic;
    }
}
