<?php

declare(strict_types=1);

namespace App\Domain\Value;

use App\Domain\Exceptions\InvalidLengthException;

class ValueSenderCode extends AbstractValue
{
    const CODE_COMPLEXITY = 4;

    public function __construct($value)
    {
        if (!$value || !filter_var($value, FILTER_VALIDATE_INT) || mb_strlen($value) != self::CODE_COMPLEXITY) {
            throw new InvalidLengthException(
                sprintf('%s должен быть числом длиной в %s. %s: %s', ValueSenderCode::class, self::CODE_COMPLEXITY, $value, mb_strlen($value))
            );
        }
        $this->value = $value;
    }
}