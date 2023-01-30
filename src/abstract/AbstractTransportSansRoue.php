<?php
namespace App\Abstract;

use App\abstract\AbstractTransport;

abstract class AbstractTransportSansRoue extends AbstractTransport{
   abstract public function vol() : bool;
   abstract public function vogue() : bool;
}