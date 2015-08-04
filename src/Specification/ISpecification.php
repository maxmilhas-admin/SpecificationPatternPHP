<?php

namespace MaxMilhas\DesignPatterns\Specification;

interface ISpecification
{
    /**
     * Checks if given candidate meets all criteria of the specification
     *
     * @param mixed $candidate
     *
     * @return bool
     */
    function isSatisfiedBy($candidate);

    /**
     * Add a logical AND specification
     *
     * @param ISpecification $specification
     *
     * @return ISpecification
     */
    function andSpec(ISpecification $specification);

    /**
     * Add a logical OR specification
     *
     * @param ISpecification $specification
     *
     * @return ISpecification
     */
    function orSpec(ISpecification $specification);

    /**
     * Add a logical NOT specification
     *
     * @return ISpecification
     */
    function notSpec();
}

