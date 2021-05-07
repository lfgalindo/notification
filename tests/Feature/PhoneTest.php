<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Libraries\Phone;

class PhoneTest extends TestCase
{
    /**
     * Teste da Library Phone.
     *
     * @return void
     */
    public function testId()
    {
        $id     = 123;
        $phone  = new Phone();

        $phone->setId($id);

        $this->assertEquals($phone->getId(), $id);
    }

    public function testNumber()
    {
        $number = 'Teste de tipos';
        $phone  = new Phone();

        $phone->setNumber($number);

        $this->assertEquals($phone->getNumber(), $number);
    }
}
