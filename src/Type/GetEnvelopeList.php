<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetEnvelopeList
 */
class GetEnvelopeList
{
    /**
     * @var \DateTime $startDate
     */
    protected $startDate;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate;

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
     * Gets as endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * @return self
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }
}
