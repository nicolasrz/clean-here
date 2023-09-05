<?php

namespace App\Domain\Entity;

class Product
{

    public function __construct(private readonly string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

}