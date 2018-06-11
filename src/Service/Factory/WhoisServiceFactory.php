<?php

namespace WhoisModule\Service\Factory;

use Interop\Container\ContainerInterface;
use WhoisModule\Service\WhoisService;

class WhoisServiceFactory
{
    /**
     * Create an object
     *
     * @param ContainerInterface $container
     * @return WhoisService
     */
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get('config');

        return new WhoisService($config['whois']);
    }
}