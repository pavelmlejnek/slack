<?php

namespace Slack\Entities;

use Nette\Object;

class Message extends Object implements IMessage
{
    /**
     * @var array $attachments
     */
    private $attachments = [];

    /**
     * @var string $text
     */
    private $text;

    /**
     * Message constructor.
     * @param string $text
     */
    public function __construct($text = NULL)
    {
        $this->text = $text;
    }

    /**
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param \Slack\Entities\Attachment $attachment
     */
    public function addAttachment(Attachment $attachment)
    {
        $this->attachments[] = $attachment;
    }

    /**
     * @return array
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @return bool
     */
    public function hasAttachments()
    {
        return !empty($this->attachments);
    }
}
