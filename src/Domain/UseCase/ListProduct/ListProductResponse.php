<?php

namespace App\Domain\UseCase\ListProduct;

class ListProductResponse
{
    public function __construct(public readonly array $products)
    {
    }
}