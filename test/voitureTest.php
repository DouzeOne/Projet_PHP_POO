<?php

namespace App\Tests;

use App\Voiture;
use PHPUnit\Framework\TestCase;

final class VoitureTest extends TestCase{

    private Voiture $bateau;

    public function setUp() : void
    {
        $this->voiture = new Voiture();
    }

    public function testVoitureAccelerer() : void
    {
        $this->assertTrue($this->voiture->accelerer());
        $this->assertEquals("Il faut accelerer pour avancer", $this->voiture->accelerer());
    }

    public function testVoitureRoule() : void
    {
        $this->assertTrue($this->voiture->roule());
        $this->assertEquals("Je roule en voiture", $this->voiture->roule());
    }

    public function testVoitureFreiner() : void
    {
        $this->assertTrue($this->voiture->freiner());
        $this->assertEquals("On freine pour s'arreter", $this->voiture->freiner());
    }
}