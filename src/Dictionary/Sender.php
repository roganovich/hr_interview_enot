<?php

namespace App\Dictionary;

enum Sender
{
    const TYPE_SMS = 'sms';
    const TYPE_EMAIL = 'email';
    const TYPE_TELEGRAM = 'telegram';
}