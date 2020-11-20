<?php

namespace App\Controllers;

use App\Services\ProductService\AddProductService;
use App\Services\ProductService\AllProductService;
use App\Services\ProductService\DeleteProductService;
use App\Services\ProductService\EditProductService;
use App\Services\ProductService\UpdateProductService;

class ProductController

{
    public function all()
    {

        $products = (new AllProductService())->execute();

        $allowedUsersToDeleteProduct = ['Annija', 'Ieva'];

        return require_once __DIR__ . '/../Views/ProductsShowView.php';

    }


    public function delete(array $vars)
    {

        (new DeleteProductService())->execute((int)$vars['id']);

        header('Location: ' . $_SERVER['HTTP_REFERER']);

    }

    public function add()
    {

        (new AddProductService())->execute($_POST['name'], $_POST['quantity'], $_POST['price']);

        header('Location: /products');
    }

    public function edit(array $vars)
    {

        $product = (new EditProductService())->execute((int)$vars['id']);

        return require_once __DIR__ . '/../Views/ProductsEditView.php';
    }


    public function update(array $vars)
    {

        (new UpdateProductService())->execute((int)$vars['id'], $_POST['name'], $_POST['quantity'], $_POST['price']);

        header('Location: /products');
    }


}