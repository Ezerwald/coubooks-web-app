<?php

namespace classes;

class Greeter
{
    private array $greetings = [
        'Welcome!',
        'Hello, book lover!',
        'Discover our books!'
    ];

    public function getGreeting():string{
        return $this->greetings[array_rand($this->greetings)];
    }
}