<?php

declare(strict_types=1);

namespace App\Infrastructure\Repository;

use App\Domain\Entity\UserSetting;

class UserSettingRepository
{
    protected $setting;

    public function __construct(UserSetting $setting)
    {
        $this->setting = $setting;
    }

    public function save()
    {
        /** TODO сохранение настроек */
        return true;
    }

}