<?php

declare(strict_types=1);

namespace App\Domain\Entity;

use App\Domain\Value\ValueUIID;
use App\Domain\Value\ValueSettingName;
use App\Domain\Value\DomainValueInterface;

class UserSetting
{
    protected $id;
    protected $name;
    protected $values;
    protected $user;

    /**
     * @return ValueUIID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return ValueSettingName
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return DomainValueInterface
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    public function __construct(ValueUIID $id, ValueSettingName $name, DomainValueInterface $value, User $user)
    {
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->user = $user;
    }
}
