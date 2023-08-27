<?php

namespace Digi\Keha\Controller;

use Digi\Keha\Entity\Model;
use Digi\Keha\Entity\Notes;
use Digi\Keha\Entity\Users;
use Digi\Keha\Kernel\Views;
use Digi\Keha\Kernel\AbstractController;


class User extends AbstractController{


    public function index()
    {
        $view = new Views();
        $tab = Users::getAll();
        $user = Users::getByID(1);
        // $notes = Model::findNotesByUser();
        // MyFunction::dump($notes['users']);
        // die;
        $note = Notes::getAll();
        $view->setHead('head.html');
        $view->setHeader('header.html');
        $view->setHtml('user.html');
        $view->setFooter('footer.html');



        $view->render([
            'flash' => $this->getFlashMessage(),
            'users' => $tab,
            'titlePage' => 'Page User',
            'notes' => $note
        ]);
    }

    public function delete()
    {
        $result = false;
        $this->setFlashMessage('aucun enregistrement ne correspond', 'error');
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = Users::delete($id);
        }
        if ($result) {
            $this->setFlashMessage("L'enrregistrement est bien supprimé", "success");
        }
        $this->index();
    }



    public function edit()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $user = Users::getByID($id)[0];

            $view = new Views();
            $view->setHead('head.html');
            $view->setHeader('header.html');
            $view->setHtml('update.html');
            $view->setFooter('footer.html');

            $view->render([
                'flash' => $this->getFlashMessage(),
                'titlePage' => 'Modifier',
                'user' => $user,
            ]);
        }
    }


    public function update()
    {
        if (isset($_POST['submit'])) {
            if (isset($_POST['name']) && $_POST['name'] !== "") {
                if (isset($_POST['surname']) && $_POST['surname'] !== "") {
                    $result = false;
                    $this->setFlashMessage('aucun enregistrement ne correspond', 'error');
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $result = Users::update($id, ['name' => $_POST['name'], 'surname' => $_POST['surname']]);
                    }
                    if ($result) {
                        $this->setFlashMessage("Votre compte a été bien modifié", "success");
                        $this->index();
                    }
                } else {
                    echo 'le surnom est obligatoire';
                }
            } else {
                echo 'le nom est obligatoire';
            }
        }
    }

    public function create()
    {
        $view = new Views();
        $view->setHead('head.html');
        $view->setHeader('header.html');
        $view->setHtml('create.html');
        $view->setFooter('footer.html');

        $view->render([
            'flash' => $this->getFlashMessage(),
            'titlePage' => 'Modifier',
        ]);
    }

    public function insert()
    {
        if (isset($_POST['submit'])) {
            if (isset($_POST['name']) && $_POST['name'] !== "") {
                if (isset($_POST['surname']) && $_POST['surname'] !== "") {
                    $result = false;
                    $this->setFlashMessage('aucun enregistrement ne correspond', 'error');
                    // var_dump($_POST['name']);
                    // var_dump($_POST['surname']);

                    $result = Users::insert(['name' => $_POST['name'], 'surname' => $_POST['surname']]);

                    if ($result) {
                        $this->setFlashMessage("Votre compte a été bien enregistré", "success");
                        $this->index();
                    }
                } else {
                    echo 'le surnom est obligatoire';
                }
            } else {
                echo 'le nom est obligatoire';
            }
        }
    }

}