<?php


namespace Structural\Adapter;

class SlackApi
{
    public function sendMessage(string $chatId, string $message): void
    {
        echo "Posted following message into the '$chatId' chat: '$message'.\n";
    }
}