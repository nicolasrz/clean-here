<?php

namespace App\Presentation\Http\API\ViewModel;

use App\Domain\Entity\Product;

class ListProductApiViewModel
{

    /** @var Product[]  */
    private array $products;

    public function getProducts(): array
    {
        return $this->products;
    }

    public function setProducts(array $products): void
    {
        $this->products = $products;
    }
}