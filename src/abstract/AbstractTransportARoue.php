<?php
namespace App\abstract;

use App\abstract\AbstractTransport;

abstract class AbstractTransportAroue extends AbstractTransport{
   abstract public function accelerer() : bool;
   abstract public function freiner() : bool;
}