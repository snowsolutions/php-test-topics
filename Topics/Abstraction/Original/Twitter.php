<?php

namespace Abstraction;

class Twitter
{
    public function __construct()
    {
        echo '[' . self::class . ']' . PHP_EOL;
        $this->authenticate();
        $this->createNewPost();
        $this->refreshToken();
    }

    public function authenticate()
    {
        echo "--- Athenticate to " . self::class . "\n";
    }

    public function createNewPost()
    {
        echo "--- Created post at " . self::class . "\n";
    }

    public function refreshToken()
    {
        echo "--- Retrieve refresh token at" . self::class . "\n";
    }
}
