<?php

declare(strict_types=1);

namespace App\Tests;

use App\Dictionary\Sender;
use App\Domain\Entity\UserSetting;
use App\Domain\Value\ValueEmail;
use App\Domain\Value\ValueSettingValue;
use App\Domain\Value\ValueSettingName;
use App\Domain\Value\ValueUserName;
use App\Domain\Value\ValueUIID;
use App\Domain\Entity\User;
use App\Infrastructure\Factory\SenderFactory;
use App\Infrastructure\Repository\UserSettingRepository;
use App\Application\Service\UlidService;
use PHPUnit\Framework\TestCase;


class UserTest extends TestCase
{
    public function testUserValues()
    {
        // Создание пользователя
        $userId = new ValueUIID(UlidService::generate());
        $userName = new ValueUserName('Test');
        $userEmail = new ValueEmail('roman.roganovich@mail.ru');
        $user = new User($userId, $userName, $userEmail);
        $this->assertInstanceOf('\App\Domain\Entity\User', $user);

        return $user;
    }

    /**
     * @depends testUserValues
     */
    public function testSettingValues($user)
    {
        // Настройки пользователя
        $settingId = new ValueUIID(UlidService::generate());
        $settingName = new ValueSettingName('Some name');
        $settingValue = new ValueSettingValue('Some value');
        $setting = new UserSetting($settingId, $settingName, $settingValue, $user);
        $this->assertInstanceOf(UserSetting::class, $setting);

        return $setting;
    }

    /**
     * @depends testSettingValues
     */
    public function testRepositoryValues($setting): void
    {
        // Отправка сообщения
        $sender = SenderFactory::getSender(Sender::TYPE_TELEGRAM);
        $checkResult = $sender->sendCode()->checkCode();
        $this->assertTrue($checkResult);

        // Сохранение данных
        $repository = new UserSettingRepository($setting);
        $this->assertTrue($repository->save());
    }
}