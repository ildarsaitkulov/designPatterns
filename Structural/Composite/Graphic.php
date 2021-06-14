<?php

namespace Structural\Composite;

interface Graphic
{
    public function move($x, $y);
    
    public function draw();
}