<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetEZDOListResponse
 */
class GetEZDOListResponse
{
    /**
     * @var \Abryb\ENadawca\Type\EZDOPakietType[] $eZDOPakiet
     */
    protected $eZDOPakiet = [
    ];

    /**
     * Adds as eZDOPakiet
     *
     * @param \Abryb\ENadawca\Type\EZDOPakietType $eZDOPakiet
     *
     * @return self
     */
    public function addToEZDOPakiet(EZDOPakietType $eZDOPakiet)
    {
        $this->eZDOPakiet[] = $eZDOPakiet;

        return $this;
    }

    /**
     * isset eZDOPakiet
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetEZDOPakiet($index)
    {
        return isset($this->eZDOPakiet[$index]);
    }

    /**
     * unset eZDOPakiet
     *
     * @param int|string $index
     */
    public function unsetEZDOPakiet($index)
    {
        unset($this->eZDOPakiet[$index]);
    }

    /**
     * Gets as eZDOPakiet
     *
     * @return \Abryb\ENadawca\Type\EZDOPakietType[]
     */
    public function getEZDOPakiet()
    {
        return $this->eZDOPakiet;
    }

    /**
     * Sets a new eZDOPakiet
     *
     * @param \Abryb\ENadawca\Type\EZDOPakietType[] $eZDOPakiet
     *
     * @return self
     */
    public function setEZDOPakiet(array $eZDOPakiet)
    {
        $this->eZDOPakiet = $eZDOPakiet;

        return $this;
    }
}
