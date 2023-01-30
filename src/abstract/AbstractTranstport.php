<?php

namespace App\Abstract;

abstract class AbstractTransport{

    public function roule() : bool
    {
        print_r("Je roule sur terre" . PHP_EOL);
        return true;
    }
}