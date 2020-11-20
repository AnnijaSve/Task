<?php

namespace App\Services\ProductService;

use App\Repositories\ProductsRepository;

class AllProductService
{
    private ProductsRepository $productsRepository;

    public function __construct()
    {
        $this->productsRepository = new ProductsRepository();
    }

    public function execute(): array
    {

        return $products = $this->productsRepository->getAll();

    }
}