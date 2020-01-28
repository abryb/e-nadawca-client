<?php

declare(strict_types=1);

namespace Abryb\ENadawca;

/**
 * @author Błażej Rybarkiewicz <b.rybarkiewicz@gmail.com>
 */
final class ENadawcaClientFactory
{
    /**
     * @throws \SoapFault
     */
    public static function createClient(string $wsdl, string $login, string $password, array $options = []): ENadawcaClient
    {
        return new ENadawcaClient(self::createSoapClient($wsdl, $login, $password, $options));
    }

    /**
     * @throws \SoapFault
     */
    public static function createSoapClient(string $wsdl, string $login, string $password, array $options = []): \SoapClient
    {
        $optionsDefaults = [
            'trace'      => true,
            'exceptions' => true,
            'classmap'   => ENadawcaClassmap::getClassMap(),
            'login'      => $login,
            'password'   => $password,
            'typemap'    => ENadawcaTypeMap::getTypeMap(),
        ];

        return new \SoapClient($wsdl, array_merge($optionsDefaults, $options));
    }
}
