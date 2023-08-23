<?php

namespace Digi\Keha\Controller;

use Digi\Keha\Kernel\Views;
use Digi\Keha\Kernel\AbstractController;

class About extends AbstractController{

    public function index()
    {
        $view = new Views();
        $view
            ->setHead('head.html')
            ->setHeader('header.html')
            ->setHtml('about.html')
            ->setFooter('footer.html')
            ->render([
                'flash' => $this->getFlashMessage(),
                'var' => 'Je suis une QUICHE',
                'var2' => 'Je suis une PIZZA',
                'title' => 'About',
                'titlePage' => 'Page About',
            ]);

    }
}