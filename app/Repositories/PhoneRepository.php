<?php

namespace App\Repositories;

use App\Libraries\Phone;
use App\Libraries\Person;

interface PhoneRepository
{
    public function save(Phone $phone): bool;

    public function getByPerson(Person $person): array;
}
