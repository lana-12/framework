<?php

namespace Digi\Keha\Controller;

use Digi\Keha\Entity\Notes;
use Digi\Keha\Entity\Users;
use Digi\Keha\Kernel\Model;
use Digi\Keha\Kernel\Views;
use Digi\Keha\Kernel\AbstractController;
use Digi\Keha\Utils\MyFunction;


class Index extends AbstractController{

    public function index()
    {
        $view = new Views();
        $view->setHead('head.html');
        $view->setHeader('header.html');
        $view->setHtml('index.html');
        $view->setFooter('footer.html');



        $view->render([
            'flash' => $this->getFlashMessage(),
            'titlePage' => 'Page Home de IndexController',
        ]);
    }

}