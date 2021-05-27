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

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function isItFull()
    {
        $sentence = "";
        while ($this->fuelCapacity > 0) {
            $this->fuelCapacity--;
            $sentence .= " in filling !";
        }

        $sentence .= " full ! ";
        return $sentence;
    }

    public function getFuelCapacity(): int
    {
        return $this->fuelCapacity;
    }

    public function setFuelCapacity(int $fuelCapacity): void
    {
        if ($fuelCapacity >= 0) {
            $this->fuelCapacity = $fuelCapacity;
        }
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

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
