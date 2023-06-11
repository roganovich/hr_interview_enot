<?php

declare(strict_types=1);

namespace App\Domain\Value;

use App\Domain\Exceptions\InvalidEmailException;

class ValueEmail extends AbstractValue
{
    public function __construct($value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidEmailException(
                sprintf('Должен быть email. %s', $value)
            );
        }
        $this->value = $value;
    }
}