<?php

declare(strict_types=1);

namespace App\Domain\Value;

class ValueSettingValue extends AbstractValue
{
    public function __construct($value)
    {
        if (empty($value)) {
            throw new \InvalidArgumentException(sprintf(' %s не может быть пустым', ValueSettingValue::class));
        }
        $this->value = $value;
    }
}