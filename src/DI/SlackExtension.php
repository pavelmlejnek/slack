<?php


namespace Slack\DI;


use Nette\DI\CompilerExtension;

class SlackExtension extends CompilerExtension
{
    private $defaults = [];

    public function loadConfiguration()
    {
        $builder = $this->getContainerBuilder();
        $config = $this->getConfig($this->defaults);

        $builder->addDefinition($this->prefix('client'))
            ->setClass('Slack\Client')
            ->addSetup('setToken', [$config['token']]);

        // if kdyby console is present, register commands

        return $builder;
    }

}
