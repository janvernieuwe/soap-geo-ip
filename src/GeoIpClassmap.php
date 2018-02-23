<?php

namespace App;

use App\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class GeoIpClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('GetGeoIP', Type\GetGeoIP::class),
            new ClassMap('GetGeoIPResponse', Type\GetGeoIPResponse::class),
            new ClassMap('GeoIP', Type\GeoIP::class),
            new ClassMap('GetGeoIPContext', Type\GetGeoIPContext::class),
            new ClassMap('GetGeoIPContextResponse', Type\GetGeoIPContextResponse::class),
        ]);
    }
}
