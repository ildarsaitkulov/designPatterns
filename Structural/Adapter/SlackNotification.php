<?php


namespace Structural\Adapter;

/**
 * Class SlackNotification
 *
 * @package Structural\Adapter
 */
class SlackNotification implements Notification
{

    /**
     * @var SlackApi
     */
    private $slackApi;
    /**
     * @var string
     */
    private $chatId;

    public function __construct(SlackApi $slackApi, string $chatId)
    {
        $this->slackApi = $slackApi;
        $this->chatId = $chatId;
    }

    public function send(string $title, string $message)
    {
        $this->slackApi->sendMessage($this->chatId, "{$title} {$message}");
    }
}