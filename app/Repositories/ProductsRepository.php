<?php

namespace App\Repositories;

use App\Models\Product;

class ProductsRepository
{
    public function getAll(): array
    {
        $productsQuery = query()
            ->select('*')
            ->from('product')
            ->execute()
            ->fetchAllAssociative();

        $products = [];

        foreach ($productsQuery as $product) {
            $products[] = Product::create($product);
        }
        return $products;
    }

    public function editById(int $id): Product
    {

        $productsQuery = query()
            ->select('*')
            ->from('product')
            ->where('id = :id')
            ->setParameter('id', $id)
            ->execute()
            ->fetchAssociative();
        return $product = Product::create($productsQuery);

    }

    public function delete(int $id): void
    {

        query()
            ->delete('product')
            ->where('id = :id')
            ->setParameter('id', $id)
            ->execute();


    }

    public function addNew(string $name, int $quantity, float $price)
    {
        query()
            ->insert('product')
            ->values([
                'name' => ':name',
                'quantity' => ':quantity',
                'price' => ':price'
            ])
            ->setParameters([
                'name' => $name,
                'quantity' => $quantity,
                'price' => $price
            ])
            ->execute();
    }

    public function update(int $id, string $name, int $quantity, float $price)
    {
        query()
            ->update('product')
            ->set('name', ':name')
            ->set('quantity', ':quantity')
            ->set('price', ':price')
            ->setParameters([
                'name' => $name,
                'quantity' => $quantity,
                'price' => round($price,2)
            ])
            ->where('id = :id')
            ->setParameter('id', $id)
            ->execute();

    }


}