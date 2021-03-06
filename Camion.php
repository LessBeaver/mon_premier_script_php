<?php

require_once 'Vehicle.php';
class Camion extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public int $fuelCapacity;
    public int $truckLoad = 0;
    public int $energy;

    public function __construct(int $fuelCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->fuelCapacity = $fuelCapacity;
    }

    public function isItFull()
    {
        if ($this->truckload < $this->fuelCapacity) {
            return "in filling";
        }
        return " full ! ";
    }

    public function getFuelCapacity(): int
    {
        return $this->fuelCapacity;
    }

    public function setFuelCapacity(int $fuelCapacity): void
    {
        $this->fuelCapacity = $fuelCapacity;
    }

    public function getTruckLoad(): int
    {
        return $this->truckLoad;
    }

    public function setTruckLoad(int $truckLoad): void
    {
        $this->truckLoad = $truckLoad;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Camion
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
}
