<?php

namespace Slack\Tests;

use Tester\Environment;
use Tester\TestCase;
use Tester\Assert;
use Slack\Entities\Channel;

require __DIR__ . '/../vendor/autoload.php';

Environment::setup();

class Client_Test extends TestCase
{
    public $client;

    public function setUp()
    {
        $this->client = \Mockery::mock('\Slack\Client');
    }

    public function testGetChannelById()
    {
        $this->client
            ->shouldReceive('getChannelById')
            ->andReturn(new Channel([
                'id' => 'ID',
                'name' => 'test',
                'created' => 1469977194,
                'purpose' => [
                    'value' => 'Purpose'
                ]
            ], $this->client));

        $channel = $this->client->getChannelById('ID');

        Assert::same($channel->getName(), 'test');
        Assert::same($channel->getId(), 'ID');
        Assert::true($channel->getCreated() instanceof \Nette\Utils\DateTime);
        Assert::same($channel->getPurpose(), 'Purpose');
    }
}

$test = new Client_Test();
$test->run();
