<?php

namespace Slack;

use Slack\Entities\Channel;
use Slack\Entities\User;

class Client
{
    const
        BASE_URL = 'https://www.slack.com/api';

    /**
     * @var string $token
     */
    private $token;

    /**
     * @var \GuzzleHttp\Client $httpClient;
     */
    private $httpClient;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->httpClient = new \GuzzleHttp\Client();
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @param string $id
     * @return \Slack\Entities\Channel
     */
    public function getChannelById($id)
    {
        $response = $this->apiRequest(Actions::CHANNELS_INFO, [
            'channel' => $id
        ]);

        return new Channel($response['channel'], $this);
    }


    /**
     * @param $id
     * @return \Slack\Entities\User
     */
    public function getUserById($id)
    {
        $response = $this->apiRequest(Actions::USERS_INFO, [
            'user' => $id
        ]);

        return new User($response['user'], $this);
    }

    /**
     * @param $method
     * @param array $args
     * @return mixed
     * @throws \Exception
     */
    public function apiRequest($method, array $args = [])
    {
        $response = json_decode($this->httpClient->post(
            self::BASE_URL . '/' . $method,
            ['form_params' => ($args + ['token' => $this->token])]
        )->getBody()->getContents(), true);

        if (!$response['ok'])
        {
            throw new SlackException($response['error']);
        }

        return $response;
    }
}
