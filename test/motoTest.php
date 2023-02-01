<?php

namespace App\Tests;

use App\Moto;
use PHPUnit\Framework\TestCase;

final class MotoTest extends TestCase{

    private Moto $bateau;

    public function setUp() : void
    {
        $this->moto = new Moto();
    }

    public function testMotoAccelerer() : void
    {
        $this->assertTrue($this->moto->accelerer());
        $this->assertEquals("Il faut accelerer pour avancer", $this->moto->accelerer());
    }

    public function testMotoRoule() : void
    {
        $this->assertTrue($this->moto->roule());
        $this->assertEquals("Je roule en voiture", $this->moto->roule());
    }

    public function testMotoFreiner() : void
    {
        $this->assertTrue($this->moto->freiner());
        $this->assertEquals("Je roule en voiture", $this->moto->freiner());
    }
}