<?php

namespace App\Presentation\CLI\Presenter;

use App\Domain\Entity\Product;
use App\Domain\UseCase\ListProduct\ListProductPresenter;
use App\Domain\UseCase\ListProduct\ListProductResponse;
use App\Presentation\CLI\ViewModel\ListProductCommandViewModel;
use App\Presentation\Http\API\ViewModel\ListProductApiViewModel;

class ListProductCommandPresenter implements ListProductPresenter
{
    private ListProductCommandViewModel $commandViewModel;

    public function __construct(ListProductCommandViewModel $commandViewModel)
    {
        $this->commandViewModel = $commandViewModel;
    }

    public function present(ListProductResponse $response): void
    {

    }

    public function getViewModel(): ListProductCommandViewModel
    {
        return $this->commandViewModel;
    }


}