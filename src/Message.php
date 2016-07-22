<?php

namespace Slack;

use Nette\Object;

class Message extends Object implements IMessage
{
    /**
     * @var string $channel
     */
    private $channel;

    /**
     * @var string $text
     */
    private $text;

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param string $channel
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }
}
