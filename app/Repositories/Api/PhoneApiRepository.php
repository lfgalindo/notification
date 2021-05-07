<?php

namespace App\Repositories\Api;

use App\Libraries\Phone;
use App\Libraries\Person;
use App\Repositories\PhoneRepository;
use App\Contracts\HttpClientContract;
use Illuminate\Support\Facades\Http;

class PhoneApiRepository implements PhoneRepository
{
    private $phone;
    private $httpClient;

    public function __construct(
        Phone $phone,
        HttpClientContract $httpClient
    ) {
        $this->phone = $phone;
        $this->httpClient = $httpClient;
    }

    public function save(Phone $phone): bool
    {
        $response = $this->httpClient->get('https://run.mocky.io/v3/21906a83-6f91-4802-be4c-ac3783b91991');

        return $response->ok();
    }

    public function getByPerson(Person $person): array
    {
        $response = $this->httpClient->get('https://run.mocky.io/v3/2f648189-838d-499b-829e-4f15b8395b0c', [
            'person_id' => $person->getId()
        ]);

        $phones = [];

        if ($response->ok()) {
            foreach ($response->json() as $phone) {
                $phones[] = clone $this->phone
                                    ->setId($phone->id)
                                    ->setPersonId($phone->person_id)
                                    ->setNumber($phone->number);
            }
        }

        return $phones;
    }
}
