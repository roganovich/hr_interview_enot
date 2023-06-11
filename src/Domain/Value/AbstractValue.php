<?php

declare(strict_types=1);

namespace App\Domain\Value;

abstract class AbstractValue implements DomainValueInterface
{
    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}