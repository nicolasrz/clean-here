<?php

namespace App\Domain\Repository;

use App\Domain\Entity\Product;

interface ProductRepository
{
    /**
     * @return Product[]
     */
    public function list(): array;
}