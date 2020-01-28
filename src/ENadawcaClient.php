<?php

declare(strict_types=1);

namespace Abryb\ENadawca;

use Abryb\ENadawca\Exception\InvalidCredentialsException;

/**
 * @author Błażej Rybarkiewicz <b.rybarkiewicz@gmail.com>
 */
class ENadawcaClient
{
    use ENadawcaClientMethods;

    /**
     * @var \SoapClient
     */
    private $client;

    public function __construct(\SoapClient $client)
    {
        $this->client = $client;
    }

    public function _lastRequestInfo(): RequestInfo
    {
        return new RequestInfo(
            (string) $this->client->__getLastRequest(),
            (string) $this->client->__getLastResponse(),
            (string) $this->client->__getLastRequestHeaders(),
            (string) $this->client->__getLastResponseHeaders()
        );
    }

    /**
     * @throws InvalidCredentialsException
     * @throws \SoapFault
     */
    protected function callMethod(string $method, $arguments)
    {
        try {
            return $this->client->{$method}($arguments);
        } catch (\SoapFault $e) {
            if ('Unauthorized' === $e->getMessage()) {
                throw InvalidCredentialsException::create($e);
            }

            throw $e;
        }
    }
}
