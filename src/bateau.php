<?php

namespace App;

use App\Abstract\AbstractTransportSansRoue;

class Bateau extends AbstractTransportSansRoue{

    public function vogue(): bool
    {
        print_r("Le bateau vogue " . PHP_EOL);
        return true;
    }
    public function vol(): bool
    {
        print_r("L'avion ne vol pas " . PHP_EOL);
        return false;
    }
}