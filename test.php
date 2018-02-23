<?php

require_once 'vendor/autoload.php';

$client = \App\GeoIpClientFactory::factory(__DIR__.'/config/geoip.wsdl');
$response = $client->getGeoIP(new \App\Type\GetGeoIP('8.8.8.8'));
var_dump($response);
