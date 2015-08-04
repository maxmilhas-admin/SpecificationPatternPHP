<?php

namespace MaxMilhas\DesignPatterns\Specification;

abstract class Specification implements ISpecification
{

    /**
     * Checks if given candidate meets all criteria of the specification
     *
     * @param mixed $candidate
     *
     * @return bool
     */
    public abstract function isSatisfiedBy($candidate);

    /**
     * Add a logical AND specification
     *
     * @param ISpecification $specification
     *
     * @return ISpecification
     */
    function andSpec(ISpecification $specification)
    {
        return new AndSpecification($this, $specification);
    }

    /**
     * Add a logical OR specification
     *
     * @param ISpecification $specification
     *
     * @return ISpecification
     */
    function orSpec(ISpecification $specification)
    {
        return new OrSpecification($this, $specification);
    }

    /**
     * Add a logical NOT specification
     *
     * @return ISpecification
     */
    function notSpec()
    {
        return new NotSpecification($this);
    }
}

