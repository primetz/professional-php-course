<?php

/*
 * 1. Придумать класс, который описывает любую сущность из предметной области интернет-магазинов:
 *    продукт, ценник, посылка и т.п.
*/
class Products
{
    /*
     * 2. Описать свойства класса из п.1 (состояние).
    */
    private $title;
    private $description;
    private $price;
    private $discount;

    public function __construct($title, $description, $price, $discount = 0)
    {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->discount = $discount;
    }

    /*
     * 3. Описать поведение класса из п.1 (методы).
    */
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        $this->discount = abs($discount);
    }

    public function getDiscountPrice()
    {
        return round($this->price - (($this->price / 100) * $this->discount), 2);
    }
}

/*
 * 4. Придумать наследников класса из п.1. Чем они будут отличаться?
*/

class Phone extends Products
{
    private $manufacturer;
    private $model;
    private $specifications;

    public function __construct($manufacturer, $model, $specifications, $title, $description, $price, $discount = 0)
    {
        parent::__construct($title, $description, $price, $discount);
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->specifications = $specifications;
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getSpecifications()
    {
        return $this->specifications;
    }

    public function setSpecifications($specifications)
    {
        $this->specifications = array_merge($this->specifications, $specifications);
    }
}

$phoneSpecifications = [
    'height' => 150,
    'width' => 70,
    'weight' => 190,
];

$phone = new Phone('Apple', 'iPhone 13 Pro', $phoneSpecifications, 'Title', 'Description', 999.99);

var_dump($phone->getDiscountPrice());

$phone->setDiscount(10);

var_dump($phone->getSpecifications());

$phone->setSpecifications(['height' => 160, 'processor' => 'Apple A15 Bionic']);


var_dump($phone->getDiscountPrice());

var_dump($phone->getSpecifications());
