<?php

namespace MaxMilhas\DesignPatterns\Specification;

class NotSpecification extends Specification
{
    /**
     * @var ISpecification wrapped
     */
    private $wrapped;

    function __construct(ISpecification $wrapped)
    {
        $this->wrapped = $wrapped;
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
        return !$this->wrapped->isSatisfiedBy($candidate);
    }
}

