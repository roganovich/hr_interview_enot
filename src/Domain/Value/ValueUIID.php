<?php

declare(strict_types=1);

namespace App\Domain\Value;

use App\Domain\Exceptions\InvalidUidException;

class ValueUIID extends AbstractValue
{
    const MAX_LENGTH_STRING = 26;

    public function __construct($value)
    {
        if (!$value || mb_strlen($value) != self::MAX_LENGTH_STRING) {
            throw new InvalidUidException(
                sprintf('%s должен быть формата Universally ULSI, %s: %s', ValueUIID::class, $value, mb_strlen($value))
            );
        }
        $this->value = $value;
    }
}