<?php

namespace Digi\Keha\Controller;

use Digi\Keha\Kernel\Views;

class Liste {

    public function index()
    {
        $view = new Views();
        $view->setHead('head.html');
        $view->setHeader('header.html');
        $view->setHtml('list.html');
        $view->setFooter('footer.html');
        $view->render([
            'list' => 'First List',
            'list2' => 'Second List ',
            'title'=>  'Liste',
            'titlePage' => 'Page List'
        ]);
    }



    
}