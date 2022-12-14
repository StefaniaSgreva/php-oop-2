<?php

trait Weightable
{
    public $weight;

    public function getWeight()
    {
        return $this->weight;
    }
    public function setWeight($_weight, $unit)
    {
        $this->weight = $_weight . $unit;
    }
}