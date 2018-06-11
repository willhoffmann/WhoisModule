<?php

namespace WhoisModule\Controller\Plugin\Factory;

use Interop\Container\ContainerInterface;
use WhoisModule\Controller\Plugin\WhoisPlugin;
use WhoisModule\Service\WhoisService;

class WhoisPluginFactory
{
    /**
     * Create an object
     *
     * @param ContainerInterface $container
     * @return WhoisPlugin
     */
    public function __invoke(ContainerInterface $container)
    {
        $whoisService = $container->get(WhoisService::class);

        return new WhoisPlugin($whoisService);
    }
}