<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetPasswordExpiredDateResponse
 */
class GetPasswordExpiredDateResponse
{
    /**
     * @var \DateTime $dataWygasniecia
     */
    protected $dataWygasniecia;

    /**
     * Gets as dataWygasniecia
     *
     * @return \DateTime
     */
    public function getDataWygasniecia()
    {
        return $this->dataWygasniecia;
    }

    /**
     * Sets a new dataWygasniecia
     *
     * @return self
     */
    public function setDataWygasniecia(\DateTime $dataWygasniecia)
    {
        $this->dataWygasniecia = $dataWygasniecia;

        return $this;
    }
}
