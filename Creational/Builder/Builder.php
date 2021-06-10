<?php

namespace Creational\Builder;

interface Builder
{

    public function reset();
    public function setSeats();
    public function setEngine();
    public function setTripComputer();
    public function setGPS();
    public function getResult(): Car;
}