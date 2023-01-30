<?php
namespace App;

use App\Abstract\AbstractTransportSansRoue;

class Avion extends AbstractTransportSansRoue{

    public function vol(): bool
    {
        print_r("L'avion vol dans les airs");
        return true;
    }
    public function vogue(): bool
    {
        print_r("Le bateau ne vol pas");
        return false;
    }
    
}