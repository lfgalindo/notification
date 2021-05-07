<?php

namespace App\Repositories\Eloquent;

use App\Repositories\PersonRepository;
use App\Libraries\Person;
use App\Models\PersonEloquent;

class PersonEloquentRepository implements PersonRepository
{
    private $person;
    private $personEloquent;

    public function __construct(
        Person $person,
        PersonEloquent $personEloquent
    ) {
        $this->person = $person;
        $this->personEloquent = $personEloquent;
    }

    public function find(string $personId): ?Person
    {
        $personEloquent = $this->personEloquent::find($personId);

        if (!is_null($personEloquent)) {
            return $this->person
                        ->setId($personEloquent->id)
                        ->setName($personEloquent->name)
                        ->setTypeId($personEloquent->type_id);
        }

        return null;
    }

    public function all(): array
    {
        $people = [];

        foreach ($this->personEloquent::all() as $personEloquent) {
            $people[] = (new Person())
                            ->setId($personEloquent->id)
                            ->setName($personEloquent->name)
                            ->setTypeId($personEloquent->type_id);
        }

        return $people;
    }

    public function save(Person $person): bool
    {
        $this->personEloquent->id       = $person->getId();
        $this->personEloquent->type_id  = $person->getTypeId();
        $this->personEloquent->name     = $person->getName();

        return $this->personEloquent->save();
    }
}
