<?php

namespace App\Services\ProductService;

use App\Repositories\ProductsRepository;

class AddProductService
{
    private ProductsRepository $productsRepository;

    public function __construct()
    {
        $this->productsRepository = new ProductsRepository();
    }

    public function execute(string $name, int $quantity, float $price)
    {

        $this->productsRepository->addNew($name, $quantity, $price);

    }
}