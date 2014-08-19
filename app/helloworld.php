<?php

namespace OCA\HelloWorld\App;

use \OCP\AppFramework\App;
use \OCA\HelloWorld\Controller\PageController;

class HelloWorld extends App {


    /**
     * Define your dependencies in here
     */
    public function __construct(array $urlParams=array()){
        parent::__construct('helloworld', $urlParams);

        $container = $this->getContainer();

        /**
         * Controllers
         */
        $container->registerService('PageController', function($c){
            return new PageController(
                $c->query('AppName'),
                $c->query('Request'),
                $c->query('CoreConfig'),
                $c->query('UserId')
            );
        });

        /**
         * Core
         */
        $container->registerService('UserId', function($c) {
            return \OCP\User::getUser();
        });

        $container->registerService('L10N', function($c) {
            return \OC_L10N::get($c['AppName']);
        });

        $container->registerService('CoreConfig', function($c) {
            return $c->query('ServerContainer')->getConfig();
        });

    }


}