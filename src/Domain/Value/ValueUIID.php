<?php
declare(strict_types=1);

namespace App\Domain\Value;

use App\Aplication\Service\UlidService;

class ValueUIID extends AbstractValue
{
    public function __construct()
    {
        $this->value = UlidService::generate();
    }
}