<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetUbezpieczeniaInfoResponse
 */
class GetUbezpieczeniaInfoResponse
{
    /**
     * @var \Abryb\ENadawca\Type\UbezpieczeniaInfoType[] $poziomyUbezpieczenia
     */
    private $poziomyUbezpieczenia = [
    ];

    /**
     * Adds as poziomyUbezpieczenia
     *
     * @param \Abryb\ENadawca\Type\UbezpieczeniaInfoType $poziomyUbezpieczenia
     *
     * @return self
     */
    public function addToPoziomyUbezpieczenia(UbezpieczeniaInfoType $poziomyUbezpieczenia)
    {
        $this->poziomyUbezpieczenia[] = $poziomyUbezpieczenia;

        return $this;
    }

    /**
     * isset poziomyUbezpieczenia
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPoziomyUbezpieczenia($index)
    {
        return isset($this->poziomyUbezpieczenia[$index]);
    }

    /**
     * unset poziomyUbezpieczenia
     *
     * @param int|string $index
     */
    public function unsetPoziomyUbezpieczenia($index)
    {
        unset($this->poziomyUbezpieczenia[$index]);
    }

    /**
     * Gets as poziomyUbezpieczenia
     *
     * @return \Abryb\ENadawca\Type\UbezpieczeniaInfoType[]
     */
    public function getPoziomyUbezpieczenia()
    {
        return $this->poziomyUbezpieczenia;
    }

    /**
     * Sets a new poziomyUbezpieczenia
     *
     * @param \Abryb\ENadawca\Type\UbezpieczeniaInfoType[] $poziomyUbezpieczenia
     *
     * @return self
     */
    public function setPoziomyUbezpieczenia(array $poziomyUbezpieczenia)
    {
        $this->poziomyUbezpieczenia = $poziomyUbezpieczenia;

        return $this;
    }
}
