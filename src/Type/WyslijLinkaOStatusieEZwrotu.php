<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing WyslijLinkaOStatusieEZwrotu
 */
class WyslijLinkaOStatusieEZwrotu
{
    /**
     * @var string[] $guidZgodaEZwrot
     */
    protected $guidZgodaEZwrot = [
    ];

    /**
     * Adds as guidZgodaEZwrot
     *
     * @param string $guidZgodaEZwrot
     *
     * @return self
     */
    public function addToGuidZgodaEZwrot($guidZgodaEZwrot)
    {
        $this->guidZgodaEZwrot[] = $guidZgodaEZwrot;

        return $this;
    }

    /**
     * isset guidZgodaEZwrot
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetGuidZgodaEZwrot($index)
    {
        return isset($this->guidZgodaEZwrot[$index]);
    }

    /**
     * unset guidZgodaEZwrot
     *
     * @param int|string $index
     */
    public function unsetGuidZgodaEZwrot($index)
    {
        unset($this->guidZgodaEZwrot[$index]);
    }

    /**
     * Gets as guidZgodaEZwrot
     *
     * @return string[]
     */
    public function getGuidZgodaEZwrot()
    {
        return $this->guidZgodaEZwrot;
    }

    /**
     * Sets a new guidZgodaEZwrot
     *
     * @param string $guidZgodaEZwrot
     *
     * @return self
     */
    public function setGuidZgodaEZwrot(array $guidZgodaEZwrot)
    {
        $this->guidZgodaEZwrot = $guidZgodaEZwrot;

        return $this;
    }
}
