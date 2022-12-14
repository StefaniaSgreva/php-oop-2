<?php
require_once __DIR__ . '/../Traits/Weightable.php';
class Product
{
    use Weightable; //applicata al padre la ereditano tutti i figli
    //variabili d'istanza - VARIABLES
    public string $photo;
    public string $name;
    public string $brand;
    public float $price;
    public $discount;
    public $category;


    //costruttore - CONSTRUCTOR
    public function __construct(string $_photo, string $_name, string $_brand, float $_price, $_discount, Category $_category)
    {
        $this->photo = $_photo;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->discount = $_discount;
        $this->category = $_category;
    }

    //metodi - METHODS
    function checkPrice($_price)
    {
        if ($_price < 1.00) {
            throw new Exception("Value must be 1,00 or grater");
        }
        return true;
    }

}