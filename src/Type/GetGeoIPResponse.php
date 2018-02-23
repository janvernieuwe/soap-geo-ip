<?php

namespace App\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetGeoIPResponse implements ResultInterface
{

    /**
     * @var \App\Type\GeoIP
     */
    private $GetGeoIPResult;

    /**
     * @return \App\Type\GeoIP
     */
    public function getGetGeoIPResult()
    {
        return $this->GetGeoIPResult;
    }

    /**
     * @param \App\Type\GeoIP $GetGeoIPResult
     * @return GetGeoIPResponse
     */
    public function withGetGeoIPResult($GetGeoIPResult)
    {
        $new = clone $this;
        $new->GetGeoIPResult = $GetGeoIPResult;

        return $new;
    }


}

