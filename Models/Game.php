<?php
require_once 'Product.php';
class Game extends Product
{
    public $color;


    //tutti i parametri: padre + figlio
    public function __construct(string $_photo, string $_name, string $_brand, float $_price, $_discount, Category $_category, $_color)
    {
        //costruttore padre
        parent::__construct($_photo, $_name, $_brand, $_price, $_discount, $_category);
        //aggiunta costruttore figlio
        $this->color = $_color;


    }
}