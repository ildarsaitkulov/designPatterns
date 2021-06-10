<?php

namespace Structural\Adapter;

class EmailNotification implements Notification
{
    protected $email;
    
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function send(string $title, string $message)
    {
        echo "Sent email with title '$title' to '{$this->email}' that says '$message'.";
    }
}