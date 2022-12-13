<?php

//classe categoria Cane - Gatto
class Category
{
    public string $name;
    public function __construct(string $_name)
    {
        $this->name = $_name;
    }
}