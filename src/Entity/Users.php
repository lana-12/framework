<?php

namespace Digi\Keha\Entity;

use Digi\Keha\Entity\Model;


class Users extends Model{
    private int $id;
    private string $name;
    private string $surname;
    private array $notes;


    public function getId():string
    {
        return $this->id;
    }

    public function setId($id):self
    {
        $this->id = $id;

        return $this;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setName($name):self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname():string
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }


    

    public function getNotes()
    {
        $join = Notes::findNotesByUser();

        var_dump($join);
        die;
    }
} 