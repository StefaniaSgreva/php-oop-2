<?php
require_once 'Product.php';
class Food extends Product
{
    public $weight;
    public $age;

    //tutti i parametri: padre + figlio
    public function __construct(string $_photo, string $_name, string $_brand, float $_price, $_discount, Category $_category, $_weight, $_age)
    {
        //costruttore padre
        parent::__construct($_photo, $_name, $_brand, $_price, $_discount, $_category);
        //aggiunta costruttore figlio
        $this->weight = $_weight;
        $this->age = $_age;

    }
}