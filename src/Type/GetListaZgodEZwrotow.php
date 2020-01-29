<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetListaZgodEZwrotow
 */
class GetListaZgodEZwrotow
{
    /**
     * @var string $status
     */
    protected $status;

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
