<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PhoneRepository;
use App\Libraries\Phone;

class PhoneController extends Controller
{
    private $phone;
    private $phoneRepository;

    public function __construct(
        Phone $phone,
        PhoneRepository $phoneRepository
    ) {
        $this->phone           = $phone;
        $this->phoneRepository = $phoneRepository;
    }

    public function store(Request $request)
    {
        $this->phone->setPersonId($request->input('person_id'));
        $this->phone->setNumber($request->input('number'));

        return $this->phoneRepository->save($this->phone) ?
            response()->json('sucesso!', 201)
            :
            response()->json('erro!', 500);
    }
}
