<?php

namespace App\Repositories;

use App\Libraries\Person;
use App\Repositories\DB\AllDB;

interface PersonRepository extends AllDB
{
    public function find(string $personId): ?Person;

    public function save(Person $person): bool;
}
