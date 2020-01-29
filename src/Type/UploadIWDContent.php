<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing UploadIWDContent
 */
class UploadIWDContent
{
    /**
     * @var int $urzadNadania
     */
    protected $urzadNadania;

    /**
     * @var mixed $iWDContent
     */
    protected $iWDContent;

    /**
     * Gets as urzadNadania
     *
     * @return int
     */
    public function getUrzadNadania()
    {
        return $this->urzadNadania;
    }

    /**
     * Sets a new urzadNadania
     *
     * @param int $urzadNadania
     *
     * @return self
     */
    public function setUrzadNadania($urzadNadania)
    {
        $this->urzadNadania = $urzadNadania;

        return $this;
    }

    /**
     * Gets as iWDContent
     */
    public function getIWDContent()
    {
        return $this->iWDContent;
    }

    /**
     * Sets a new iWDContent
     *
     * @return self
     */
    public function setIWDContent($iWDContent)
    {
        $this->iWDContent = $iWDContent;

        return $this;
    }
}
