<?php

namespace Original;
require 'Zoo.php';
require 'ZooKeeper.php';
require 'Butterfly.php';
require 'Cat.php';
require 'Dog.php';
class App {

    public function __construct() {
        $this->init();
    }

    private function init()
    {
        (new \Autoload\Zoo());
        (new \Autoload\ZooKeeper());
        (new \Autoload\Cat());
        (new \Autoload\Dog());
        (new \Autoload\Butterfly());
    }

}