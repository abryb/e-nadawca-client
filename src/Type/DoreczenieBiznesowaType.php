<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing DoreczenieBiznesowaType
 *
 * XSD Type: doreczenieBiznesowaType
 */
class DoreczenieBiznesowaType
{
    /**
     * @var bool $doRakWlasnych
     */
    protected $doRakWlasnych;

    /**
     * Gets as doRakWlasnych
     *
     * @return bool
     */
    public function getDoRakWlasnych()
    {
        return $this->doRakWlasnych;
    }

    /**
     * Sets a new doRakWlasnych
     *
     * @param bool $doRakWlasnych
     *
     * @return self
     */
    public function setDoRakWlasnych($doRakWlasnych)
    {
        $this->doRakWlasnych = $doRakWlasnych;

        return $this;
    }
}
