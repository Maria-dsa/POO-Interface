<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicyle extends Vehicle implements LightableInterface
{
    function switchOn(): bool
    {
        if ($this->getCurrentSpeed() > 10) {
            return true;
        } else {
            return false;
        }
    }

    function switchOff(): bool
    {
        return false;
    }
}
