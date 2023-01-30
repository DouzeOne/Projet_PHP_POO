<?php

namespace App\Tests;

use App\Avion;

use PHPUnit\Framework\TestCase;

final class AvionTest extends TestCase{

    private Avion $avion;

    public function setUp() : void
    {
        $this->avion = new Avion();
    }

    public function testAvionVol() : void
    {
        $this->assertTrue($this->avion->vol());
        $this->assertEquals("L'avion vol dans les airs", $this->avion->vol());
    }

}