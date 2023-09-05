<?php

namespace App\Domain\UseCase\ListProduct;

interface ListProductPresenter
{
    public function present(ListProductResponse $response): void;
}