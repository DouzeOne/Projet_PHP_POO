<?php

namespace App;

use App\abstract\AbstractTransportAroue;
use App\interface\conduir;

class Train extends AbstractTransportAroue implements conduir{

    public function roule() : bool
    {
        print_r("Je roule en voiture" . PHP_EOL);
        return true;
    }

    public function accelerer() : bool
    {
        print_r("Il faut accelerer pour avancer" . PHP_EOL);
        return true;
    }

    public function freiner() : bool
    {
        print_r("On freine pour s'arreter" . PHP_EOL);
        return true;
    }
}