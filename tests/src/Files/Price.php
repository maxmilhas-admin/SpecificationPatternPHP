<?php

namespace MaxMilhas\DesignPatterns\Files;

class Price
{
    /**
     * @var float price
     */
    private $price;

    function __construct($price)
    {
        $this->price = (float)$price;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return Price
     */
    public function setPrice($price)
    {
        $this->price = (float)$price;

        return $this;
    }
}
