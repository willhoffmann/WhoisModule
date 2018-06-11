<?php

declare(strict_types=1);

namespace WhoisModule\Controller\Plugin;

use WhoisModule\Service\WhoisService;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

class WhoisPlugin extends AbstractPlugin
{
    /**
     * @var WhoisService
     */
    protected $whoisService;

    /**
     * Constructor
     *
     * @param WhoisService $whoisService
     */
    public function __construct(WhoisService $whoisService)
    {
        $this->whoisService = $whoisService;
    }

    /**
     * @param $domain
     * @return \Phois\Whois\Whois
     */
    public function __invoke($domain)
    {
        return $this->getWhoisService()->query($domain);
    }

    /**
     * Set whoisService
     *
     * @param $whoisService
     */
    public function setWhoisService($whoisService)
    {
        $this->whoisService = $whoisService;
    }

    /**
     * Get whoisService
     *
     * @return WhoisService
     */
    public function getWhoisService()
    {
        return $this->whoisService;
    }
}