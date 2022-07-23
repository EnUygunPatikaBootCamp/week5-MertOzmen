<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;

class MessageGenerator
{
    /**
     * @var NameGenerator
     */
    private $nameGenerator;

    public function __construct(NameGenerator $nameGenerator)
    {
        $this->nameGenerator = $nameGenerator;
    }

    public function helloMessage()
    {
        $message = 'Hello ' .$this->nameGenerator->randomName(). '!';

        return $message;
    }
}
