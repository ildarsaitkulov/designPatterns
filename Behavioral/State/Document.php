<?php

namespace Behavioral\State;

class Document
{

    /**
     * @var State
     */
    protected $state;

    public function __construct(State $state)
    {
        $this->state = $state;
    }

    public function render()
    {
        return $this->state->render();
    }

    public function publish()
    {
        return $this->state->publish();
    }

    public function changeState(State $state)
    {
        $this->state = $state;
    }
}