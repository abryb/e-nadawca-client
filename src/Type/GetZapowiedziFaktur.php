<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetZapowiedziFaktur
 */
class GetZapowiedziFaktur
{
    /**
     * @var \DateTime $data
     */
    protected $data;

    /**
     * Gets as data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * @return self
     */
    public function setData(\DateTime $data)
    {
        $this->data = $data;

        return $this;
    }
}
