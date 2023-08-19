<?php

namespace Digi\Keha\Controller;

use Digi\Keha\Kernel\Views;


class Pokemon
{

    /**
     * Function render renvoi a page
     * Avec des morceaux par default
     * @return void
     */
    public function index()
    {
        $view = new Views();
        $view->setHead('head.html');
        $view->setHeader('header.html');
        $view->setHtml('salameche.html');
        $view->setFooter('footer.html');
        $view->render([
            'pokemon' => 'je suis  Salamèche',
            'pokemon2' => 'Je suis un autre TrucMuche',
            'title'=> 'Pokemon',
            'titlePage'=>'Page Pokémon'
        ]);
    }

    // TEST Si Je Souhaite avoir un autre Template que celui par default
    // public function index()
    // {
    //     $view = new Views();
    //     // $view->setHtml('salameche.html');
    //     $view->render([
    //         'pokemon' => 'je suis  Salamèche',
    //         'pokemon2' => 'Je suis un autre TrucMuche'
    //     ],
    // './Views/test.html',
    // './Templates/header.html');
    // }
    
}
