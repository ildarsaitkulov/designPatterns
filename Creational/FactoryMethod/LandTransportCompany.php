<?php

namespace Creational\FactoryMethod;

class LandTransportCompany extends TransportCompany
{

    public function createVehicle(): Vehicle
    {
        return new Truck();
    }
}