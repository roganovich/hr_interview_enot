<?php
declare(strict_types=1);

namespace App\Domain\Factories;

use App\Infrastructure\TelegramSender;
use App\Infrastructure\SmsSender;
use App\Infrastructure\EmailSender;

class SenderFactory
{
    const TYPE_SMS = 'sms';
    const TYPE_EMAIL = 'email';
    const TYPE_TELEGRAMM = 'telegram';

    public static function getSender(string $type)
    {
        switch ($type) {
            case self::TYPE_TELEGRAMM:
                return new TelegramSender();
            case self::TYPE_EMAIL:
                return new EmailSender();
            default:
                return new SmsSender();
        }
    }
}