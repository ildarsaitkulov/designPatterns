<?php

namespace Creational\FactoryMethod;

class AirTransportCompany extends TransportCompany
{

    public function createVehicle(): Vehicle
    {
        return new Aircraft();
    }
}