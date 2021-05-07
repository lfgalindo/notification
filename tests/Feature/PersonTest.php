<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Libraries\Person;
use App\Libraries\Type;
use App\Libraries\Phone;

class PersonTest extends TestCase
{
    /**
     * Teste da Library Person.
     *
     * @return void
     */
    public function testId()
    {
        $id         = 123;
        $person     = new Person();

        $person->setId($id);

        $this->assertEquals($person->getId(), $id);
    }

    public function testName()
    {
        $name       = 'Edinelson Rodrigues';
        $person     = new Person();

        $person->setName($name);

        $this->assertEquals($person->getName(), $name);
    }

    public function testTypeId()
    {
        $id     = 456;
        $person = new Person();

        $person->setTypeId($id);

        $this->assertEquals($person->getTypeId(), $id);
    }
}
