<?php

declare(strict_types=1);

namespace App\Domain\Value;

use App\Domain\Exceptions\InvalidLengthException;

class ValueUserName extends AbstractValue
{
    const MAX_LENGTH_STRING = 16;

    public function __construct($value)
    {
        if (!$value || mb_strlen($value) >= self::MAX_LENGTH_STRING) {
            throw new InvalidLengthException(
                sprintf('%s не должен привышать %s. %s: %s', ValueUserName::class, self::MAX_LENGTH_STRING, $value, mb_strlen($value))
            );
        }
        $this->value = $value;
    }
}