<?php

namespace Digi\Keha\Controller;

use Digi\Keha\Entity\Notes;
use Digi\Keha\Entity\Users;
use Digi\Keha\Kernel\Views;
use Digi\Keha\Kernel\AbstractController;

class Note extends AbstractController
{

    public function index()
    {
        $notes = Notes::getAll();
        $users = Users::getAll();

        $view = new Views();
        $view
            ->setHead('head.html')
            ->setHeader('header.html')
            ->setHtml('note.html')
            ->setFooter('footer.html')
            ->render([
                'flash' => $this->getFlashMessage(),
                'var' => 'Ici les pages',
                'notes' => $notes,
                'users' => $users,
                'title' => 'Note',
                'titlePage' => 'Page Notes',
            ]);
    }


    public function createNote(){

        $users = Users::getAll();

        $view = new Views();
        $view
            ->setHead('head.html')
            ->setHeader('header.html')
            ->setHtml('/Form/createNote.html')
            ->setFooter('footer.html')
            ->render([
                'flash' => $this->getFlashMessage(),
                'var' => 'Ici les pages',
                'title' => 'Note',
                'titlePage' => 'Page Notes',
                'users'=> $users
            ]);

    }
}
