<?php

namespace Slack\Entities;

use Nette\Utils\DateTime;
use Slack\Client;
use Slack\Actions;

class Channel extends BaseEntity
{
    /**
     * @var string $id
     */
    private $id;

    /**
     * @var string|NULL $name
     */
    private $name;

    /**
     * @var string|NULL $purpose
     */
    private $purpose;

    /**
     * @var \Slack\Client $client
     */
    private $client;

    /**
     * @var \Nette\Utils\DateTime|NULL $created
     */
    private $created;

    /**
     * @var \Slack\Entities\User $creator
     */
    private $creator;

    /**
     * @var bool $isArchived
     */
    private $isArchived;

    /**
     * @var bool $isGeneral
     */
    private $isGeneral;

    /**
     * @var string|NULL $topic
     */
    private $topic;


    /**
     * Channel constructor.
     * @param array $data
     * @param \Slack\Client $client
     */
    public function __construct(array $data, Client $client)
    {
        $this->client = $client;

        parent::__construct($data);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string|NULL
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @param mixed $purpose
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = new DateTime();
        $this->created->setTimestamp($created);
    }

    /**
     * @return mixed
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param mixed $creator
     */
    public function setCreator($creator)
    {
        $this->creator = $this->client->getUserById($creator);
    }

    /**
     * @return mixed
     */
    public function getIsArchived()
    {
        return $this->isArchived;
    }

    /**
     * @param mixed $isArchived
     */
    public function setIsArchived($isArchived)
    {
        $this->isArchived = $isArchived;
    }

    /**
     * @return mixed
     */
    public function getIsGeneral()
    {
        return $this->isGeneral;
    }

    /**
     * @param mixed $isGeneral
     */
    public function setIsGeneral($isGeneral)
    {
        $this->isGeneral = $isGeneral;
    }

    /**
     * @return mixed
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * @param mixed $topic
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;
    }


    /**
     * @param IMessage $message
     * @return string
     */
    public function sendMessage(IMessage $message)
    {
        $response = $this->client->apiRequest(Actions::CHAT_POSTMESSAGE, [
            'channel' => $this->getId(),
            'text' => $message->getText()
        ]);

        return $response['ts'];
    }

    /**
     * @param $timestamp
     * return void
     */
    public function deleteMessage($timestamp)
    {
        $this->client->apiRequest(Actions::CHAT_DELETE, [
            'ts' => $timestamp,
            'channel' => $this->getId()
        ]);
    }
}
