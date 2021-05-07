<?php

namespace App\Repositories\Eloquent;

use App\Repositories\PhoneRepository;
use App\Models\PhoneEloquent;
use App\Libraries\Person;
use App\Libraries\Phone;

class PhoneEloquentRepository implements PhoneRepository
{
    private $phone;
    private $phoneEloquent;

    public function __construct(
        Phone $phone,
        PhoneEloquent $phoneEloquent
    ) {
        $this->phone            = $phone;
        $this->phoneEloquent    = $phoneEloquent;
    }

    public function getByPerson(Person $person): array
    {
        $phones = [];

        foreach ($this->phoneEloquent::where('person_id', $person->getId())->get() as $phone) {
            $phones[] = clone $this->phone
                                ->setId($phone->id)
                                ->setPersonId($phone->person_id)
                                ->setNumber($phone->number);
        }

        return $phones;
    }

    public function save(Phone $phone): bool
    {
        $this->phoneEloquent->id             = $phone->getId();
        $this->phoneEloquent->person_id      = $phone->getPersonId();
        $this->phoneEloquent->number         = $phone->getNumber();

        return $this->phoneEloquent->save();
    }
}
