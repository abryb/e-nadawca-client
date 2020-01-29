<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetUrzedyNadaniaResponse
 */
class GetUrzedyNadaniaResponse
{
    /**
     * @var \Abryb\ENadawca\Type\UrzadNadaniaFullType[] $urzedyNadania
     */
    protected $urzedyNadania = [
    ];

    /**
     * Adds as urzedyNadania
     *
     * @param \Abryb\ENadawca\Type\UrzadNadaniaFullType $urzedyNadania
     *
     * @return self
     */
    public function addToUrzedyNadania(UrzadNadaniaFullType $urzedyNadania)
    {
        $this->urzedyNadania[] = $urzedyNadania;

        return $this;
    }

    /**
     * isset urzedyNadania
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetUrzedyNadania($index)
    {
        return isset($this->urzedyNadania[$index]);
    }

    /**
     * unset urzedyNadania
     *
     * @param int|string $index
     */
    public function unsetUrzedyNadania($index)
    {
        unset($this->urzedyNadania[$index]);
    }

    /**
     * Gets as urzedyNadania
     *
     * @return \Abryb\ENadawca\Type\UrzadNadaniaFullType[]
     */
    public function getUrzedyNadania()
    {
        return $this->urzedyNadania;
    }

    /**
     * Sets a new urzedyNadania
     *
     * @param \Abryb\ENadawca\Type\UrzadNadaniaFullType[] $urzedyNadania
     *
     * @return self
     */
    public function setUrzedyNadania(array $urzedyNadania)
    {
        $this->urzedyNadania = $urzedyNadania;

        return $this;
    }
}
