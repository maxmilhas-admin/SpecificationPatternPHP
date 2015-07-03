<?php

namespace MaxMilhas\DesignPatterns\Files;

use MaxMilhas\DesignPatterns\Specification\Specification;

class PriceSpecification extends Specification
{
    /**
     * @var float minPrice
     */
    private $minPrice;

    /**
     * @var float maxPrice
     */
    private $maxPrice;

    /**
     * @param Price $candidate
     *
     * @return bool
     */
    public function isSatisfiedBy($candidate)
    {
        if ((!empty($this->getMaxPrice()) || 0.0 === $this->getMaxPrice()) && $candidate->getPrice() > $this->getMaxPrice()) {
            return false;
        }

        if ((!empty($this->getMinPrice()) || 0.0 === $this->getMinPrice()) && $candidate->getPrice() < $this->getMinPrice()) {
            return false;
        }

        return true;
    }

    /**
     * @return float
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * @param float $minPrice
     *
     * @return Price
     */
    public function setMinPrice($minPrice)
    {
        $this->minPrice = (float)$minPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * @param float $maxPrice
     *
     * @return Price
     */
    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = (float)$maxPrice;

        return $this;
    }
}
