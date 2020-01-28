<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetKierunkiInfo
 */
class GetKierunkiInfo
{
    /**
     * @var string $plan
     */
    private $plan;

    /**
     * Gets as plan
     *
     * @return string
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Sets a new plan
     *
     * @param string $plan
     *
     * @return self
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;

        return $this;
    }
}
