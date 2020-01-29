<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing CreateEnvelopeBuforResponse
 */
class CreateEnvelopeBuforResponse
{
    /**
     * @var \Abryb\ENadawca\Type\BuforType[] $createdBufor
     */
    protected $createdBufor = [
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
    ];

    /**
     * Adds as createdBufor
     *
     * @param \Abryb\ENadawca\Type\BuforType $createdBufor
     *
     * @return self
     */
    public function addToCreatedBufor(BuforType $createdBufor)
    {
        $this->createdBufor[] = $createdBufor;

        return $this;
    }

    /**
     * isset createdBufor
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCreatedBufor($index)
    {
        return isset($this->createdBufor[$index]);
    }

    /**
     * unset createdBufor
     *
     * @param int|string $index
     */
    public function unsetCreatedBufor($index)
    {
        unset($this->createdBufor[$index]);
    }

    /**
     * Gets as createdBufor
     *
     * @return \Abryb\ENadawca\Type\BuforType[]
     */
    public function getCreatedBufor()
    {
        return $this->createdBufor;
    }

    /**
     * Sets a new createdBufor
     *
     * @param \Abryb\ENadawca\Type\BuforType[] $createdBufor
     *
     * @return self
     */
    public function setCreatedBufor(array $createdBufor)
    {
        $this->createdBufor = $createdBufor;

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
