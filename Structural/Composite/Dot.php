<?php


namespace Structural\Composite;

class Dot implements Graphic
{

    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function move($x, $y)
    {
        $this->x += $x;
        $this->y += $y;
    }

    public function draw()
    {
        echo "Draw Dot coordinates {$this->x} {$this->y}\n";
    }
}