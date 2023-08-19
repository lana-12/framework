<?php

namespace Digi\Keha\Controller;

use Digi\Keha\Kernel\Views;

class About {

    public function index()
    {
        $view = new Views();
        $view
            ->setHead('head.html')
            ->setHeader('header.html')
            ->setHtml('about.html')
            ->setFooter('footer.html')
            ->render([
                'var' => 'Je suis une QUICHE',
                'var2' => 'Je suis une PIZZA',
                'title' => 'About',
                'titlePage' => 'Page About',
            ]);

    }
}