<?php

declare(strict_types=1);

namespace WhoisModule\Service;

use Phois\Whois\Whois;

class WhoisService
{
    /**
     * @var array
     */
    private $options = [];

    /**
     * Constructor
     *
     * @param array $options
     */
    public function __construct($options = [])
    {
        $this->options = $options;
    }

    /**
     * Query
     *
     * @param $domain
     * @return Whois
     */
    public function query($domain)
    {
        return new Whois($domain);
    }
}