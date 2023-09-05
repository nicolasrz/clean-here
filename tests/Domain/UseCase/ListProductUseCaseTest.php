<?php

namespace App\Tests\Domain\UseCase;

use App\Domain\Entity\Product;
use App\Domain\Repository\ProductRepository;
use App\Domain\UseCase\ListProduct\ListProductPresenter;
use App\Domain\UseCase\ListProduct\ListProductRequest;
use App\Domain\UseCase\ListProduct\ListProductResponse;
use App\Domain\UseCase\ListProduct\ListProduct;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ListProductUseCaseTest extends KernelTestCase implements ListProductPresenter
{

    private ListProductResponse $response;
    private ProductRepository $repository;
    private ListProduct $useCase;

    protected function setUp(): void
    {
        $this->repository = $this->createMock(ProductRepository::class);
        $this->useCase = new ListProduct($this->repository);
    }


    public function testListProductUseCase()
    {
        $products = [
            new Product('pate'),
            new Product('steack'),
            new Product('courgette'),
        ];

        $this->repository->method('list')
            ->willReturn($products);


        $listProductRequest = new ListProductRequest();
        $this->useCase->process($listProductRequest, $this);


        $this->assertInstanceOf(ListProductResponse::class, $this->response);
        $this->assertEquals($products, $this->response->products);
    }

    public function present(ListProductResponse $response): void
    {
        $this->response = $response;
    }
}