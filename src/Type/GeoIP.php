<?php

namespace App\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GeoIP implements RequestInterface
{

    /**
     * @var int
     */
    private $ReturnCode;

    /**
     * @var string
     */
    private $IP;

    /**
     * @var string
     */
    private $ReturnCodeDetails;

    /**
     * @var string
     */
    private $CountryName;

    /**
     * @var string
     */
    private $CountryCode;

    /**
     * Constructor
     *
     * @var int $ReturnCode
     * @var string $IP
     * @var string $ReturnCodeDetails
     * @var string $CountryName
     * @var string $CountryCode
     */
    public function __construct($ReturnCode, $IP, $ReturnCodeDetails, $CountryName, $CountryCode)
    {
        $this->ReturnCode = $ReturnCode;
        $this->IP = $IP;
        $this->ReturnCodeDetails = $ReturnCodeDetails;
        $this->CountryName = $CountryName;
        $this->CountryCode = $CountryCode;
    }

    /**
     * @return int
     */
    public function getReturnCode()
    {
        return $this->ReturnCode;
    }

    /**
     * @param int $ReturnCode
     * @return GeoIP
     */
    public function withReturnCode($ReturnCode)
    {
        $new = clone $this;
        $new->ReturnCode = $ReturnCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getIP()
    {
        return $this->IP;
    }

    /**
     * @param string $IP
     * @return GeoIP
     */
    public function withIP($IP)
    {
        $new = clone $this;
        $new->IP = $IP;

        return $new;
    }

    /**
     * @return string
     */
    public function getReturnCodeDetails()
    {
        return $this->ReturnCodeDetails;
    }

    /**
     * @param string $ReturnCodeDetails
     * @return GeoIP
     */
    public function withReturnCodeDetails($ReturnCodeDetails)
    {
        $new = clone $this;
        $new->ReturnCodeDetails = $ReturnCodeDetails;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }

    /**
     * @param string $CountryName
     * @return GeoIP
     */
    public function withCountryName($CountryName)
    {
        $new = clone $this;
        $new->CountryName = $CountryName;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return GeoIP
     */
    public function withCountryCode($CountryCode)
    {
        $new = clone $this;
        $new->CountryCode = $CountryCode;

        return $new;
    }
}
