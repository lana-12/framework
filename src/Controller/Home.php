<?php

namespace Digi\Keha\Controller;

use Digi\Keha\Kernel\Views;
use Digi\Keha\Kernel\AbstractController;
use Digi\Keha\Utils\MyFunction;


class Home extends AbstractController{

    public function index()
    {
        $view = new Views();
        $view->setHead('head.html');
        $view->setHeader('header.html');
        $view->setHtml('index.html');
        $view->setFooter('footer.html');


        $view->render([
            'flash' => $this->getFlashMessage(),
            'titlePage' => 'Page HomeController',
        ]);
    }

}