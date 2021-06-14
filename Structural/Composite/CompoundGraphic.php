<?php

namespace Structural\Composite;

class CompoundGraphic implements Graphic
{

    /**
     * @var Graphic[]
     */
    protected $storage = [];

    public function add(Graphic $child)
    {
        $this->storage[spl_object_hash($child)] = $child;
    }
    
    public function remove(Graphic $child)
    {
        unset($this->storage[spl_object_hash($child)]);
    }

    public function move($x, $y)
    {
        foreach ($this->storage as $graphic) {
            $graphic->move($x, $y);
        }
    }

    public function draw()
    {
        foreach ($this->storage as $graphic) {
            $graphic->draw();
        }
    }
}