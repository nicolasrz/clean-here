<?php

namespace App\Presentation\Http\API\Action;

use App\Domain\UseCase\ListProduct\ListProduct;
use App\Domain\UseCase\ListProduct\ListProductRequest;
use App\Presentation\Http\API\Presenter\ListProductApiPresenter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
#[Route('/products')]
class ListProductAction
{
    public function __invoke(ListProduct $listProduct, ListProductApiPresenter $presenter)
    {
        $listProduct->process(new ListProductRequest(), $presenter);

        return new JsonResponse($presenter->getViewModel()->getProducts());
    }
}