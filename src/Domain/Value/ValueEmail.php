<?php
declare(strict_types=1);

namespace App\Domain\Value;

class ValueEmail extends AbstractValue
{
    public function __construct(string $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('Должен быть email');
        }
        $this->value = $value;
    }
}