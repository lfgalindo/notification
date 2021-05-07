<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Libraries\Type;

class TypeTest extends TestCase
{
    /**
     * Teste da Library Type.
     *
     * @return void
     */
    public function testId()
    {
        $id     = 123;
        $type   = new Type();

        $type->setId($id);

        $this->assertEquals($type->getId(), $id);
    }

    public function testDescription()
    {
        $description    = 'Teste de tipos';
        $type           = new Type();

        $type->setDescription($description);

        $this->assertEquals($type->getDescription(), $description);
    }
}
