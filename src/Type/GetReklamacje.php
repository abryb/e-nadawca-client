<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetReklamacje
 */
class GetReklamacje
{
    /**
     * @var \DateTime $dataRozpatrzenia
     */
    protected $dataRozpatrzenia;

    /**
     * Gets as dataRozpatrzenia
     *
     * @return \DateTime
     */
    public function getDataRozpatrzenia()
    {
        return $this->dataRozpatrzenia;
    }

    /**
     * Sets a new dataRozpatrzenia
     *
     * @return self
     */
    public function setDataRozpatrzenia(\DateTime $dataRozpatrzenia)
    {
        $this->dataRozpatrzenia = $dataRozpatrzenia;

        return $this;
    }
}
