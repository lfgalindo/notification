<?php

namespace App\Repositories;

use App\Libraries\Type;

interface TypeRepository
{
    public function save(Type $type): bool;
}
