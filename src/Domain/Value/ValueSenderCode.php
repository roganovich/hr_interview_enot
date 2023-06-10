<?php
declare(strict_types=1);

namespace App\Domain\Value;

class ValueSenderCode extends AbstractValue
{
    const LEN = 4;

    public function __construct(string $value)
    {
        if ($value != self::LEN) {
            throw new \InvalidArgumentException('Неверный формат кода');
        }
        $this->value = $value;
    }
}