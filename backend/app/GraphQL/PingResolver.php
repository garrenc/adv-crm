<?php

namespace App\GraphQL;

class PingResolver
{
    public function __invoke(): string
    {
        return 'pong';
    }
}