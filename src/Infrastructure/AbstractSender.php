<?php
declare(strict_types=1);

namespace App\Infrastructure;
use App\Aplication\Service\CodeMaker;

abstract class AbstractSender
{
    public function sendCode(){
        /** TODO отправка кода */
        $code = CodeMaker::make();

        return $this;
    }

    public function checkCode(){
        /** TODO проверка кода */
        return true;
    }
}