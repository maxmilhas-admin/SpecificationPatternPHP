<?php

namespace MaxMilhas\DesignPatterns\Specification;

class AndSpecification extends Specification
{
    /**
     * @var ISpecification one
     */
    private $one;

    /**
     * @var ISpecification other
     */
    private $other;

    function __construct(ISpecification $one, ISpecification $other)
    {
        $this->one = $one;
        $this->other = $other;
    }

    /**
     * Checks if given candidate meets all criteria of the specification
     *
     * @param mixed $candidate
     *
     * @return bool
     */
    public function isSatisfiedBy($candidate)
    {
        return $this->one->isSatisfiedBy($candidate) && $this->other->isSatisfiedBy($candidate);
    }
}

