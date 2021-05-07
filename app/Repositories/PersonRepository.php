<?php

namespace App\Repositories;

use App\Libraries\Person;

interface PersonRepository
{
    public function find(string $personId): ?Person;

    public function all(): array;

    public function save(Person $person): bool;
}
