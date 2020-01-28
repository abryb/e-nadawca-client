<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PotwierdzenieDoreczeniaType
 *
 * XSD Type: potwierdzenieDoreczeniaType
 */
class PotwierdzenieDoreczeniaType
{
    /**
     * @var string $sposob
     */
    private $sposob;

    /**
     * @var string $kontakt
     */
    private $kontakt;

    /**
     * Gets as sposob
     *
     * @return string
     */
    public function getSposob()
    {
        return $this->sposob;
    }

    /**
     * Sets a new sposob
     *
     * @param string $sposob
     *
     * @return self
     */
    public function setSposob($sposob)
    {
        $this->sposob = $sposob;

        return $this;
    }

    /**
     * Gets as kontakt
     *
     * @return string
     */
    public function getKontakt()
    {
        return $this->kontakt;
    }

    /**
     * Sets a new kontakt
     *
     * @param string $kontakt
     *
     * @return self
     */
    public function setKontakt($kontakt)
    {
        $this->kontakt = $kontakt;

        return $this;
    }
}
