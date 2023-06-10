<?php
declare(strict_types=1);

namespace App\Domain\Entity;

use App\Domain\Value\ValueUIID;
use App\Domain\Value\ValueSettingName;
use App\Domain\Value\ValueNotNull;

class UserSetting
{
    protected $id;
    protected $name;
    protected $values;
    protected $user;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name?->getValue();
    }

    /**
     * @return mixed
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

    public function __construct(ValueUIID $id, ValueSettingName $name, ValueNotNull $value, User $user)
    {
        $this->id = $id->getValue();
        $this->name = $name->getValue();
        $this->value = $value->getValue();
        $this->user = $user;
    }
}
