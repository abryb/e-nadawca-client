<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrintType
 *
 * XSD Type: PrintType
 */
class PrintType
{
    /**
     * @var string $kind
     */
    private $kind;

    /**
     * @var string $method
     */
    private $method;

    /**
     * Gets as kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Sets a new kind
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind($kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Gets as method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }
}
