<?php

namespace App\Services\ProductService;

use App\Repositories\ProductsRepository;

class DeleteProductService
{
    private ProductsRepository $productsRepository;

    public function __construct()
    {
        $this->productsRepository = new ProductsRepository();
    }

    public function execute(int $id)
    {
        $this->productsRepository->delete($id);
    }
}