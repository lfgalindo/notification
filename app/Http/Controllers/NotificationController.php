<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PersonRepository;
use App\Repositories\PhoneRepository;
use App\Libraries\Person;

class NotificationController extends Controller
{
    private $person;
    private $phoneRepository;
    private $personRepository;

    public function __construct(
        Person $person,
        PhoneRepository $phoneRepository,
        PersonRepository $personRepository
    ) {
        $this->person           = $person;
        $this->phoneRepository  = $phoneRepository;
        $this->personRepository = $personRepository;
    }

    public function notify($personId)
    {
        $this->person = $this->personRepository->find($personId);

        if (is_null($this->person)) {
            return response()->json('Person not found', 404);
        }

        $phones = $this->phoneRepository->getByPerson($this->person);

        // Função para enviar notificações
        foreach ($phones as $phone) {
            dump($phone);
        }
    }
}
