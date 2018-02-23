<?php

namespace App\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetGeoIP implements RequestInterface
{

    /**
     * @var string
     */
    private $IPAddress;

    /**
     * Constructor
     *
     * @var string $IPAddress
     */
    public function __construct($IPAddress)
    {
        $this->IPAddress = $IPAddress;
    }

    /**
     * @return string
     */
    public function getIPAddress()
    {
        return $this->IPAddress;
    }

    /**
     * @param string $IPAddress
     * @return GetGeoIP
     */
    public function withIPAddress($IPAddress)
    {
        $new = clone $this;
        $new->IPAddress = $IPAddress;

        return $new;
    }
}
