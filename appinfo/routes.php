<?php

namespace OCA\HelloWorld;

use \OCA\HelloWorld\App\HelloWorld;

$application = new HelloWorld();
$application->registerRoutes($this, array('routes' => array(
    // page
    array('name' => 'page#index', 'url' => '/', 'verb' => 'GET'),
)));