<?php

namespace Slack;

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

    public function getChannelById($id)
    {
        $response = $this->apiCall('channels.info', [
            'channel' => $id
        ]);

        if (!$response['ok'])
        {
            throw new \Exception($response['error']);
        }

        return new Channel($response['channel']);
    }

    public function send(IMessage $message, IChannel $channel)
    {
        $this->apiCall('chat.postMessage', [
            'channel' => $channel->getId(),
            'text' => $message->getText()
        ]);
    }

    public function apiCall($method, array $args = [])
    {
        $this->httpClient->post($method, ['form_params' => array_unshift($args, ['token' => $this->token])]);
    }
}
