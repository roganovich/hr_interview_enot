<?php

declare(strict_types=1);

namespace App\Domain\Entity;

use App\Domain\Value\ValueUserName;
use App\Domain\Value\ValueEmail;
use App\Domain\Value\ValueUIID;

final class User
{
    /**
     * @return ValueUIID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return ValueUserName
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return ValueEmail
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function __construct(private ValueUIID $id, private ValueUserName $name, private ValueEmail $email)
    {
    }
}
