<?php
declare(strict_types=1);

namespace App\Domain\Entity;

use App\Domain\Value\ValueUserName;
use App\Domain\Value\ValueEmail;
use App\Domain\Value\ValueUIID;

class User
{
    protected $id;
    protected $name;
    protected $email;

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

    public function __construct(ValueUIID $id, ValueUserName $name, ValueEmail $email)
    {
        $this->id = $id->getValue();
        $this->name = $name->getValue();
        $this->email = $email->getValue();
    }
}
