<?php

namespace Behavioral\Command;

class RemoteControl
{
    public function submit(Command $command)
    {
        $command->execute();
    }
}