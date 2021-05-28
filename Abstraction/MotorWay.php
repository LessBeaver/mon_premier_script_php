<?php

require_once 'HighWay.php';
final class MotorWay extends HighWay
{
    public function __construct()
    {
        $this->nbLane = 4;
        $this->maxSpeed = 130;
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Bicycle) {
            $this->setCurrentVehicles[] = $vehicle;
            echo " The vehicule has been correctly added ";
        }
    }
}
