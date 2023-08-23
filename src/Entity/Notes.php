<?php

namespace Digi\Keha\Entity;

use Digi\Keha\KERNEL\Model;
use Digi\Keha\utils\MyFunction;

class Notes extends Model
{
    public int $id;
    public string $note;
    // public Users $user;
    

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
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of notes
     */ 
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of notes
     *
     * @return  self
     */ 
    public function setNote($note)
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
