<?php

declare(strict_types=1);

namespace App\Infrastructure;

use App\Application\Service\CodeMaker;

abstract class AbstractSender
{
    protected $code;

    public function sendCode()
    {
        /** TODO отправка кода */
        $this->code = CodeMaker::make();

        return $this;
    }

    public function checkCode()
    {
        /** TODO проверка кода */
        return true;
    }
}