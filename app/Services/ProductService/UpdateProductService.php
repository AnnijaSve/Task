<?php

namespace App\Services\ProductService;

use App\Repositories\ProductsRepository;

class UpdateProductService
{
    private ProductsRepository $productsRepository;

    public function __construct()
    {
        $this->productsRepository = new ProductsRepository();
    }

    public function execute(int $id, string $name, int $quantity, float $price)
    {

        $this->productsRepository->update($id, $name, $quantity, $price);

    }
}
