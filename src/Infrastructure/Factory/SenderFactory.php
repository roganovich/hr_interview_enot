<?php

declare(strict_types=1);

namespace App\Infrastructure\Factory;

use App\Dictionary\Sender;
use App\Infrastructure\EmailSender;
use App\Domain\Exceptions\InvalidChannelException;
use App\Infrastructure\SmsSender;
use App\Infrastructure\TelegramSender;

class SenderFactory
{
    public static function getSender(string $type)
    {
        switch ($type) {
            case Sender::TYPE_TELEGRAM:
                return new TelegramSender();
            case Sender::TYPE_EMAIL:
                return new EmailSender();
            case Sender::TYPE_SMS:
                return new SmsSender();
            default:
                throw new InvalidChannelException('Не верный канал');
        }
    }
}