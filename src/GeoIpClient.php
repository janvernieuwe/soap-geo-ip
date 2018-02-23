<?php

namespace App;

class GeoIpClient extends \Phpro\SoapClient\Client
{

    public function getGeoIP(\App\Type\GetGeoIP $GetGeoIP) : \App\Type\GetGeoIPResponse
    {
        return $this->call('GetGeoIP', $GetGeoIP);
    }

    public function getGeoIPContext(\App\Type\GetGeoIPContext $GetGeoIPContext) : \App\Type\GetGeoIPContextResponse
    {
        return $this->call('GetGeoIPContext', $GetGeoIPContext);
    }


}

