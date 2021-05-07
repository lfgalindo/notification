<?php

namespace App\Libraries;

use App\Libraries\Type;
use App\Libraries\Phone;

class Person
{
    private $id;
    private $typeId;
    private $name;

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    public function getTypeId()
    {
        return $this->typeId;
    }

    public function setTypeId(string $typeId)
    {
        $this->typeId = $typeId;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }
}
