<?php

namespace Original;

class App
{
    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        require 'Facebook.php';
        require 'Instagram.php';
        require 'Gmail.php';
        require 'Twitter.php';
        foreach ([
            \Abstraction\Facebook::class,
            \Abstraction\Instagram::class,
            \Abstraction\Gmail::class,
            \Abstraction\Twitter::class,
        ] as $socialClass) {
            (new $socialClass());
        }
    }
}
