<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PersonRepository;
use App\Libraries\Person;

class PersonController extends Controller
{
    private $person;
    private $personRepository;

    public function __construct(
        Person $person,
        PersonRepository $personRepository
    ) {
        $this->person           = $person;
        $this->personRepository = $personRepository;
    }

    public function store(Request $request)
    {
        $this->person->setTypeId($request->input('type_id'));
        $this->person->setName($request->input('name'));

        return $this->personRepository->save($this->person) ?
            response()->json('sucesso!', 201)
            :
            response()->json('erro!', 500);
    }
}
