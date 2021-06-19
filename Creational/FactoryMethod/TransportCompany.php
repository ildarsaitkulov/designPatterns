<?php

namespace Creational\FactoryMethod;

abstract class TransportCompany
{

    public function deliver()
    {
        $this->createVehicle()->go();
    }
    
    abstract public function createVehicle(): Vehicle;
}