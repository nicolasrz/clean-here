<?php

namespace App\Presentation\CLI\ViewModel;

use App\Domain\Entity\Product;

class ListProductCommandViewModel
{
    /** @var Product[] */
    private array $listProduct;

    public function __construct(array $listProduct)
    {
        $this->listProduct = $listProduct;
    }


    public function getListProduct(): array
    {
        return $this->listProduct;
    }
}