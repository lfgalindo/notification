<?php

namespace App\Repositories\Eloquent;

use App\Repositories\TypeRepository;
use App\Libraries\Type;
use App\Models\TypeEloquent;

class TypeEloquentRepository implements TypeRepository
{
    private $typeEloquent;

    public function __construct(TypeEloquent $typeEloquent)
    {
        $this->typeEloquent = $typeEloquent;
    }

    public function save(Type $type): bool
    {
        $this->typeEloquent->id             = $type->getId();
        $this->typeEloquent->description    = $type->getDescription();

        return $this->typeEloquent->save();
    }
}
