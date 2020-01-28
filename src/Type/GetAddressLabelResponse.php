<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetAddressLabelResponse
 */
class GetAddressLabelResponse
{
    /**
     * @var \Abryb\ENadawca\Type\AddressLabelContentType[] $content
     */
    private $content = [
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    private $error = [
    ];

    /**
     * Adds as content
     *
     * @param \Abryb\ENadawca\Type\AddressLabelContentType $content
     *
     * @return self
     */
    public function addToContent(AddressLabelContentType $content)
    {
        $this->content[] = $content;

        return $this;
    }

    /**
     * isset content
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetContent($index)
    {
        return isset($this->content[$index]);
    }

    /**
     * unset content
     *
     * @param int|string $index
     */
    public function unsetContent($index)
    {
        unset($this->content[$index]);
    }

    /**
     * Gets as content
     *
     * @return \Abryb\ENadawca\Type\AddressLabelContentType[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * @param \Abryb\ENadawca\Type\AddressLabelContentType[] $content
     *
     * @return self
     */
    public function setContent(array $content)
    {
        $this->content = $content;

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
