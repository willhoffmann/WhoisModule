<?php

namespace WhoisModule;

use WhoisModule\Controller\Plugin\Factory\WhoisPluginFactory;
use WhoisModule\Controller\Plugin\WhoisPlugin;
use WhoisModule\Service\Factory\WhoisServiceFactory;
use WhoisModule\Service\WhoisService;

return [
    'service_manager' => [
        'aliases' => [
            'whois' => WhoisService::class,
        ],
        'factories' => [
            WhoisService::class => WhoisServiceFactory::class,
        ],
    ],
    'controller_plugins' => [
        'aliases' => [
            'whois' => WhoisPlugin::class,
        ],
        'factories' => [
            WhoisPlugin::class => WhoisPluginFactory::class,
        ],
    ],
];