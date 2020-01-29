<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetPlacowkiPocztowe
 */
class GetPlacowkiPocztowe
{
    /**
     * @var string $idWojewodztwo
     */
    protected $idWojewodztwo;

    /**
     * Gets as idWojewodztwo
     *
     * @return string
     */
    public function getIdWojewodztwo()
    {
        return $this->idWojewodztwo;
    }

    /**
     * Sets a new idWojewodztwo
     *
     * @param string $idWojewodztwo
     *
     * @return self
     */
    public function setIdWojewodztwo($idWojewodztwo)
    {
        $this->idWojewodztwo = $idWojewodztwo;

        return $this;
    }
}
