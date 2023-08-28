<?php

namespace Digi\Keha\Entity;

use Digi\Keha\Entity\Model;
use Digi\Keha\Controller\User;
use Digi\Keha\utils\MyFunction;

class Notes extends Model
{
    private int $id;
    private string $note;
    private int $user_id;
    private User $user ;
    

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
    public function setNote($note):self
    {
        $this->note = $note;

        return $this;
    }


    

    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Get the value of user
     */ 
    // public function getUserId()
    // {
    //     $this->user = Model::findNotesByUser();
    //     MyFunction::dump($this->user);
    //     return $this->user;
    // }

    /**
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }
}
