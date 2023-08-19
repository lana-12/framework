<?php

require('vendor/autoload.php');

use Digi\Keha\Kernel\Dispatcher;

$dispatcher = new Dispatcher();
$dispatcher->dispatch();