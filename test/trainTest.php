<?php

namespace App\Tests;

use App\Train;
use PHPUnit\Framework\TestCase;

final class TrainTest extends TestCase{

    private Train $bateau;

    public function setUp() : void
    {
        $this->train = new Train();
    }

    public function testTrainAccelerer() : void
    {
        $this->assertTrue($this->train->accelerer());
        $this->assertEquals("Il faut accelerer pour avancer", $this->train->accelerer());
    }

    public function testTrainRoule() : void
    {
        $this->assertTrue($this->train->roule());
        $this->assertEquals("Je roule en voiture", $this->train->roule());
    }

    public function testTrainFreiner() : void
    {
        $this->assertTrue($this->train->freiner());
        $this->assertEquals("On freine pour s'arreter", $this->train->freiner());
    }
}