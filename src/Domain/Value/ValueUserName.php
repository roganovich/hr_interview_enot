<?php
declare(strict_types=1);

namespace App\Domain\Value;

class ValueUserName extends AbstractValue
{
    const MAX_LEN = 32;

    public function __construct(string $value)
    {
        if (mb_strlen($value, "UTF-8") > self::MAX_LEN) {
            throw new \InvalidArgumentException(sprintf('%s не должен привышать %s', ValueUserName::class, self::MAX_LEN));
        }
        $this->value = $value;
    }
}