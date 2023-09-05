<?php

namespace App\Domain\UseCase\ListProduct;

use App\Domain\Repository\ProductRepository;

class ListProduct
{


    public function __construct(private readonly ProductRepository $repository)
    {
    }

    public function process(ListProductRequest $request, ListProductPresenter $presenter): void
    {
        $products = $this->repository->list();
        $response = new ListProductResponse($products);
        $presenter->present($response);
    }
}