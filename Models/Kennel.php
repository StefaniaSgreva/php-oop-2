<?php
require_once 'Product.php';
class Kennel extends Product
{
    public $size;


    //tutti i parametri: padre + figlio
    public function __construct(string $_photo, string $_name, string $_brand, float $_price, $_discount, Category $_category, $_size)
    {
        //costruttore padre
        parent::__construct($_photo, $_name, $_brand, $_price, $_discount, $_category);
        //aggiunta costruttore figlio
        $this->size = $_size;


    }
}