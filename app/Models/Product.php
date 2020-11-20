<?php

namespace App\Models;

class Product

{
    private int $id;
    private string $name;
    private int $quantity;
    private float $price;

    public function __construct(int $id, string $name, int $quantity, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public static function create(array $data): Product
    {
        return new self(
            (int)$data['id'],
            $data['name'],
            $data['quantity'],
            round($data['price'],2),
        );
    }

}