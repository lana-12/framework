<?php

require('vendor/autoload.php');

use Digi\Keha\Kernel\Model;
use Digi\Keha\Kernel\Dispatcher;


// $pdo = Model::getInstance();

// var_dump($pdo);






$dispatcher = new Dispatcher();
$dispatcher->dispatch();