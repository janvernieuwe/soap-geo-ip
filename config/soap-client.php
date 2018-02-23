<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;

return Config::create()
    ->setWsdl('config/geoip.wsdl')
    ->setTypeDestination('src/Type')
    ->setTypeNamespace('App\Type')
    ->setClientDestination('src')
    ->setClientName('GeoIpClient')
    ->setClientNamespace('App')
    ->setClassMapDestination('src')
    ->setClassMapName('GeoIpClassmap')
    ->setClassMapNamespace('App')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler()))
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler()),
            ]),
            '/(?<!Response)$/i'
        )
    )
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ]),
            '/Response$/i'
        )
    )
;
