<?php

namespace Digi\Keha\Entity;

use Digi\Keha\Entity\Model;
use Digi\Keha\utils\MyFunction;

class Notes extends Model
{
    private int $id;
    private string $note;
    private Users $user;
    

    /**
     * Get the value of id
     */ 
    public function getId():string
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
     * Get the value of notes
     */ 
    public function getNote():string
    {
        return $this->note;
    }

    /**
     * Set the value of notes
     *
     * @return  self
     */ 
    public function setNote($note):self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    // public function getUser()
    // {
    //     self::$user = Model::findNotesByUser();
    //     MyFunction::dump(self::$user);
    //     return self::$user;
    // }

    
}
