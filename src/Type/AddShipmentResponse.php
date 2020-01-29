<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing AddShipmentResponse
 */
class AddShipmentResponse
{
    /**
     * @var \Abryb\ENadawca\Type\AddShipmentResponseItemType[] $retval
     */
    protected $retval = [
    ];

    /**
     * Adds as retval
     *
     * @param \Abryb\ENadawca\Type\AddShipmentResponseItemType $retval
     *
     * @return self
     */
    public function addToRetval(AddShipmentResponseItemType $retval)
    {
        $this->retval[] = $retval;

        return $this;
    }

    /**
     * isset retval
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRetval($index)
    {
        return isset($this->retval[$index]);
    }

    /**
     * unset retval
     *
     * @param int|string $index
     */
    public function unsetRetval($index)
    {
        unset($this->retval[$index]);
    }

    /**
     * Gets as retval
     *
     * @return \Abryb\ENadawca\Type\AddShipmentResponseItemType[]
     */
    public function getRetval()
    {
        return $this->retval;
    }

    /**
     * Sets a new retval
     *
     * @param \Abryb\ENadawca\Type\AddShipmentResponseItemType[] $retval
     *
     * @return self
     */
    public function setRetval(array $retval)
    {
        $this->retval = $retval;

        return $this;
    }
}
