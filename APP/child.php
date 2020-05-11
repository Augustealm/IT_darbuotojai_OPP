<?php
namespace MYAPP;

class child extends ivadas
{
    public function intro(): string
    {
        return "IT darbuotojai $this->name!";
    }
}