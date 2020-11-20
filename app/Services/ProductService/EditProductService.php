<?php

namespace App\Services\ProductService;

use App\Models\Product;
use App\Repositories\ProductsRepository;

class EditProductService
{
    private ProductsRepository $productsRepository;

    public function __construct()
    {
        $this->productsRepository = new ProductsRepository();
    }

    public function execute(int $id): Product
    {

        return $this->productsRepository->editById($id);

    }
}