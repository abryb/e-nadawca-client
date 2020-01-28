<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing SetEnvelopeBuforDataNadania
 */
class SetEnvelopeBuforDataNadania
{
    /**
     * @var \DateTime $dataNadania
     */
    private $dataNadania;

    /**
     * Gets as dataNadania
     *
     * @return \DateTime
     */
    public function getDataNadania()
    {
        return $this->dataNadania;
    }

    /**
     * Sets a new dataNadania
     *
     * @return self
     */
    public function setDataNadania(\DateTime $dataNadania)
    {
        $this->dataNadania = $dataNadania;

        return $this;
    }
}
