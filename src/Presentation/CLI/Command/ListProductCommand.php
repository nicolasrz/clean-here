<?php

namespace App\Presentation\CLI\Command;

use App\Domain\UseCase\ListProduct\ListProduct;
use App\Domain\UseCase\ListProduct\ListProductRequest;
use App\Presentation\CLI\Presenter\ListProductCommandPresenter;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand('app:products:list')]
class ListProductCommand extends Command
{

    public function __construct(private readonly ListProduct $listProduct)
    {
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $presenter = new ListProductCommandPresenter();
        $this->listProduct->process(new ListProductRequest(), $presenter);
        $presenter->present();
        print_r();

        return Command::SUCCESS;
    }
}