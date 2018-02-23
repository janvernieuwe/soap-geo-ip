<?php

namespace App;

use App\GeoIpClient;
use App\GeoIpClassmap;
use Phpro\SoapClient\ClientFactory as PhproClientFactory;
use Phpro\SoapClient\ClientBuilder;

class GeoIpClientFactory
{

    public static function factory(string $wsdl) : \App\GeoIpClient
    {
        $clientFactory = new PhproClientFactory(GeoIpClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, []);
        $clientBuilder->withClassMaps(GeoIpClassmap::getCollection());

        return $clientBuilder->build();
    }


}

