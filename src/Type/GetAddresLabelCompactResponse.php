<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetAddresLabelCompactResponse
 */
class GetAddresLabelCompactResponse
{
    /**
     * @var mixed $pdfContent
     */
    protected $pdfContent;

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
    ];

    /**
     * Gets as pdfContent
     */
    public function getPdfContent()
    {
        return $this->pdfContent;
    }

    /**
     * Sets a new pdfContent
     *
     * @return self
     */
    public function setPdfContent($pdfContent)
    {
        $this->pdfContent = $pdfContent;

        return $this;
    }

    /**
     * Adds as error
     *
     * @param \Abryb\ENadawca\Type\ErrorType $error
     *
     * @return self
     */
    public function addToError(ErrorType $error)
    {
        $this->error[] = $error;

        return $this;
    }

    /**
     * isset error
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * @param int|string $index
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * @return \Abryb\ENadawca\Type\ErrorType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param \Abryb\ENadawca\Type\ErrorType[] $error
     *
     * @return self
     */
    public function setError(array $error)
    {
        $this->error = $error;

        return $this;
    }
}
