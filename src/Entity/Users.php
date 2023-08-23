<?php

namespace Digi\Keha\Entity;

use Digi\Keha\KERNEL\Model;


class Users extends Model{
    private int $id;
    private string $name;
    private string $surname;
    private string $notes;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id):self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name):self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }


    

    /**
     * Get the value of notes
     */ 
    // public function getNotes()
    // {
    //     $join = Notes::findNotesByUser();

    //     var_dump($join);
    //     die;
    // }
} 