<?php

class Product
{
    private $name;
    private $price;
    private $quantity;

    function __construct(string $name, int $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setName($name): string
    {
        $this->name = $name;
    }

    public function setPrice($price): int
    {
        $this->price = $price;
    }

    public function setQuantity($quantity): int
    {
        $this->quantity = $quantity;
    }
}