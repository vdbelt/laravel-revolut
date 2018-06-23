<?php

namespace Vdbelt\LaravelRevolut;

use RevolutPHP\Client;

class RevolutClient
{
    private $client;

    public function __construct($config)
    {
        if (isset($config['sandbox']) && $config['sandbox'] === true) {
            $mode = 'sandbox';
        } else {
            $mode = 'production';
        }

        $this->client = new Client(
            isset($config['key']) ? $config['key'] : '',
            $mode
        );
    }

    public function __call($name, $arguments)
    {
        return $this->client->{$name};
    }
}
