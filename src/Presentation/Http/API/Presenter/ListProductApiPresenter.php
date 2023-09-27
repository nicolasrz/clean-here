<?php

namespace App\Presentation\Http\API\Presenter;

use App\Domain\Entity\Product;
use App\Domain\UseCase\ListProduct\ListProductPresenter;
use App\Domain\UseCase\ListProduct\ListProductResponse;
use App\Presentation\Http\API\ViewModel\ListProductApiViewModel;

class ListProductApiPresenter implements ListProductPresenter
{

    private ListProductApiViewModel $viewModel;

    public function __construct()
    {
        $this->viewModel = new ListProductApiViewModel();
    }

    public function present(ListProductResponse $response): void
    {
        $products = [];

        /** @var Product $product */
        foreach ($response->products as $product) {
            $products[$product->getId()] = [
                'name' => strtoupper($product->getName())
            ];
        }

        $this->viewModel->setProducts($products);

    }

    public function getViewModel(): ListProductApiViewModel
    {
        return $this->viewModel;
    }

}