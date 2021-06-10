<?php

namespace Structural\Bridge;

abstract class Figure
{

    /**
     * @var Color
     */
    protected $color;

    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    abstract public function draw();
}