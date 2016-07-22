<?php

namespace Slack;

use Nette\Object;

/**
 * Class Channel
 * @package Slack
 */
class Channel extends Object implements IChannel
{
    /**
     * @var string $id
     */
    private $id;

    /**
     * Channel constructor.
     * @param array|NULL $data
     */
    public function __construct(array $data = NULL)
    {
        $this->setId($data['id']);
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}
