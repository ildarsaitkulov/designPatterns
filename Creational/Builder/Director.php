<?php


namespace Creational\Builder;

class Director
{

    public function constructSportsCar(Builder $builder)
    {
        $builder->setSeats();
        $builder->setEngine();
        //etc
    }

}