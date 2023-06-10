<?php
declare(strict_types=1);

namespace App\Domain\Value;

class ValueNotNull extends AbstractValue
{
    public function __construct(string $value)
    {
        if (!$value) {
            throw new \InvalidArgumentException('Не может быть Null');
        }
        $this->value = $value;
    }
}