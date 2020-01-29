<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetWplatyCKP
 */
class GetWplatyCKP
{
    /**
     * @var string $numerNadania
     */
    protected $numerNadania;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate;

    /**
     * @var \DateTime $stopDate
     */
    protected $stopDate;

    /**
     * Gets as numerNadania
     *
     * @return string
     */
    public function getNumerNadania()
    {
        return $this->numerNadania;
    }

    /**
     * Sets a new numerNadania
     *
     * @param string $numerNadania
     *
     * @return self
     */
    public function setNumerNadania($numerNadania)
    {
        $this->numerNadania = $numerNadania;

        return $this;
    }

    /**
     * Gets as startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * @return self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Gets as stopDate
     *
     * @return \DateTime
     */
    public function getStopDate()
    {
        return $this->stopDate;
    }

    /**
     * Sets a new stopDate
     *
     * @return self
     */
    public function setStopDate(\DateTime $stopDate)
    {
        $this->stopDate = $stopDate;

        return $this;
    }
}
