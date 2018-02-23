<?php

namespace App\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetGeoIPContextResponse implements ResultInterface
{

    /**
     * @var \App\Type\GeoIP
     */
    private $GetGeoIPContextResult;

    /**
     * @return \App\Type\GeoIP
     */
    public function getGetGeoIPContextResult()
    {
        return $this->GetGeoIPContextResult;
    }

    /**
     * @param \App\Type\GeoIP $GetGeoIPContextResult
     * @return GetGeoIPContextResponse
     */
    public function withGetGeoIPContextResult($GetGeoIPContextResult)
    {
        $new = clone $this;
        $new->GetGeoIPContextResult = $GetGeoIPContextResult;

        return $new;
    }
}
