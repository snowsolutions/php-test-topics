<?php

namespace Abstraction;

class Gmail
{
    public function __construct()
    {
        echo '[' . self::class . ']' . PHP_EOL;
        $this->authenticate();
        $this->getEmailList();
        $this->refreshToken();
    }

    public function authenticate()
    {
        echo "--- Athenticate to " . self::class . "\n";
    }

    public function getEmailList()
    {
        echo "--- Get email list at " . self::class . "\n";
    }

    public function refreshToken()
    {
        echo "--- Retrieve refresh token at" . self::class . "\n";
    }
}
