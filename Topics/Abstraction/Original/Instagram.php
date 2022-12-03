<?php

namespace Abstraction;

class Instagram
{
    public function __construct()
    {
        echo '[' . self::class . ']' . PHP_EOL;
        $this->authenticate();
        $this->createNewVideo();
        $this->refreshToken();
    }

    public function authenticate()
    {
        echo "--- Athenticate to " . self::class . "\n";
    }

    public function createNewVideo()
    {
        echo "--- Created video at " . self::class . "\n";
    }

    public function refreshToken()
    {
        echo "--- Retrieve refresh token at" . self::class . "\n";
    }
}
