<?php

namespace App\Tests;

use App\Bateau;

use PHPUnit\Framework\TestCase;

final class BateauTest extends TestCase{

    private Bateau $bateau;

    public function setUp() : void
    {
        $this->bateau = new Bateau();
    }

    public function testBateauVogue() : void
    {
        $this->assertTrue($this->bateau->vogue());
        $this->assertEquals("L'avion vol dans les airs", $this->bateau->vogue());
    }

}