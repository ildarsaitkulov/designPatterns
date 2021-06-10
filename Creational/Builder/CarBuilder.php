<?php


namespace Creational\Builder;

class CarBuilder implements Builder
{
    /** @var Car */
    protected $car;
    
    public function __construct()
    {
        $this->car = new Car();
    }

    public function reset()
    {
        // TODO: Implement reset() method.
    }

    public function setSeats()
    {
        // TODO: Implement setSeats() method.
    }

    public function setEngine()
    {
        // TODO: Implement setEngine() method.
    }

    public function setTripComputer()
    {
        // TODO: Implement setTripComputer() method.
    }

    public function setGPS()
    {
        // TODO: Implement setGPS() method.
    }

    public function getResult(): Car
    {
        return $this->car;
    }
}