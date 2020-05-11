<?php

namespace MYAPP;

abstract class ivadas
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function intro(): string;
}

