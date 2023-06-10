<?php declare(strict_types=1);

namespace App\Tests;

use App\Domain\Entity\UserSetting;
use App\Domain\Value\ValueEmail;
use App\Domain\Value\ValueNotNull;
use App\Domain\Value\ValueSettingName;
use App\Domain\Value\ValueUserName;
use App\Domain\Value\ValueUIID;
use App\Domain\Entity\User;
use App\Domain\Factories\SenderFactory;
use App\Infrastructure\Repository\UserSettingRepository;

use PHPUnit\Framework\TestCase;


class UsetTest extends TestCase
{
    public function testUserValues()
    {
        // Создание пользователя
        $userId = new ValueUIID();
        $userName = new ValueUserName('Test');
        $userEmail = new ValueEmail('roman.roganovich@mail.ru');
        $user = new User($userId, $userName, $userEmail);
        $this->assertInstanceOf('\App\Domain\Entity\User', $user);

        //Настройки пользователя
        $settingId = new ValueUIID();
        $settingName = new ValueSettingName('Test');
        $settingValue = new ValueNotNull('Test');
        $setting = new UserSetting($settingId, $settingName, $settingValue, $user);

        // Отправка сообщения
        $sender = SenderFactory::getSender(SenderFactory::TYPE_TELEGRAMM);
        $checkResult = $sender->sendCode()->checkCode();
        $this->assertTrue($checkResult);

        //Сохранение данных
        $repository = new UserSettingRepository($setting);
        $this->assertTrue($repository->save());
    }
}