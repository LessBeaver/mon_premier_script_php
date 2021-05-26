<?php

class SimpsonsCar
{
    // Constructeur
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public int $nbWheels;
    public int $currentSpeed;
    public string $color = 'yellow';
    public int $nbSeats = 4;
    public string $energy = 'gasoline';
    public int $energyLevel;

    // FORWARD
    public function forward(): string
    {
        $this->currentSpeed = 232;

        return " Here we go !";
    }

    // BRAKE
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "This is way too fast !!!";
        }
        $sentence .= "Piouuuf, I'm stopped !";
        return $sentence;
    }

    // START
    public function start(): string
    {
        $this->currentSpeed = 15;

        return "Go back !";
    }

    // GETCURRENTSPEED
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    // GETCOLOR
    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    // GETNBSEATS
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    // GETENERGY
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    // GETENERGYLEVEL
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
