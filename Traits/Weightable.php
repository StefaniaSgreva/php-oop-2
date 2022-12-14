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
        if ($_weight > 0) {
            $this->weight = $_weight . $unit;
        } else {

            throw new Exception('weight must be greater than 0');
        }
        return $this->weight;
    }
}