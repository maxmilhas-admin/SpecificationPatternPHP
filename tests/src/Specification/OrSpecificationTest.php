<?php

namespace MaxMilhas\DesignPatterns\Specification;

use MaxMilhas\DesignPatterns\Files\Price;
use MaxMilhas\DesignPatterns\Files\PriceSpecification;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-07-03 at 15:45:12.
 */
class OrSpecificationTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers MaxMilhas\DesignPatterns\Specification\OrSpecification::isSatisfiedBy
     */
    public function testIsSatisfiedBy()
    {
        $price = new Price(50);

        $spec1 = new PriceSpecification();
        $spec1->setMinPrice(40);
        $spec1->setMaxPrice(60);

        $spec2 = new PriceSpecification();
        $spec2->setMinPrice(60);
        $spec2->setMaxPrice(70);

        $this->assertTrue($spec1->orSpec($spec2)->isSatisfiedBy($price));
        $this->assertTrue($spec2->orSpec($spec1)->isSatisfiedBy($price));
    }

    /**
     * @covers MaxMilhas\DesignPatterns\Specification\OrSpecification::isSatisfiedBy
     */
    public function testIsNotSatisfiedBy()
    {
        $price = new Price(50);

        $spec1 = new PriceSpecification();
        $spec1->setMinPrice(20);
        $spec1->setMaxPrice(40);

        $spec2 = new PriceSpecification();
        $spec2->setMinPrice(60);
        $spec2->setMaxPrice(80);

        $this->assertFalse($spec1->orSpec($spec2)->isSatisfiedBy($price));
        $this->assertFalse($spec2->orSpec($spec1)->isSatisfiedBy($price));
    }
}
