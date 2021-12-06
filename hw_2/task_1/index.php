<?php

/*
 * 1. Создать структуру классов ведения товарной номенклатуры.
 *    а) Есть абстрактный товар.
 *    б) Есть цифровой товар, штучный физический товар и товар на вес.
 *    в) У каждого есть метод подсчета финальной стоимости.
 *    г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза.
 *       У штучного товара обычная стоимость, у весового – в зависимости от продаваемого количества в килограммах.
 *       У всех формируется в конечном итоге доход с продаж.
 *    д) Что можно вынести в абстрактный класс, наследование?
*/
abstract class Product
{
    protected float $price = 100;

    protected float $salesRevenue = 0;

    abstract public function getFinalCost(float $quantity = 1): float;

    public function sell(float $quantity = 1): void
    {
        $this->salesRevenue += $this->getFinalCost($quantity);
    }

    public function getSalesRevenue(): float
    {
        return $this->salesRevenue;
    }
}

class DigitalProduct extends Product
{
    public function getFinalCost(float $quantity = 1): float
    {
        return ($this->price / 2) * $quantity;
    }
}

class PieceProduct extends Product
{
    public function getFinalCost(float $quantity = 1): float
    {
        return $this->price * $quantity;
    }
}

class ProductByWeight extends Product
{
    public function getFinalCost(float $quantity = 1): float
    {
        return $this->price * $quantity;
    }
}

$digitalProduct = new DigitalProduct();
$pieceProduct = new PieceProduct();
$weightProduct = new ProductByWeight();

var_dump($digitalProduct->getFinalCost());
var_dump($pieceProduct->getFinalCost());
var_dump($weightProduct->getFinalCost(2.5));

var_dump($digitalProduct->getSalesRevenue());
var_dump($pieceProduct->getSalesRevenue());
var_dump($weightProduct->getSalesRevenue());

$digitalProduct->sell();
$pieceProduct->sell();
$weightProduct->sell(2.5);

var_dump($digitalProduct->getSalesRevenue());
var_dump($pieceProduct->getSalesRevenue());
var_dump($weightProduct->getSalesRevenue());
