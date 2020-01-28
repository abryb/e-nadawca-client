<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetKierunkiInfoResponse
 */
class GetKierunkiInfoResponse
{
    /**
     * @var \DateTime $lastUpdate
     */
    private $lastUpdate;

    /**
     * @var \Abryb\ENadawca\Type\UslugiType[] $usluga
     */
    private $usluga = [
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    private $error = [
    ];

    /**
     * Gets as lastUpdate
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Sets a new lastUpdate
     *
     * @return self
     */
    public function setLastUpdate(\DateTime $lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Adds as usluga
     *
     * @param \Abryb\ENadawca\Type\UslugiType $usluga
     *
     * @return self
     */
    public function addToUsluga(UslugiType $usluga)
    {
        $this->usluga[] = $usluga;

        return $this;
    }

    /**
     * isset usluga
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetUsluga($index)
    {
        return isset($this->usluga[$index]);
    }

    /**
     * unset usluga
     *
     * @param int|string $index
     */
    public function unsetUsluga($index)
    {
        unset($this->usluga[$index]);
    }

    /**
     * Gets as usluga
     *
     * @return \Abryb\ENadawca\Type\UslugiType[]
     */
    public function getUsluga()
    {
        return $this->usluga;
    }

    /**
     * Sets a new usluga
     *
     * @param \Abryb\ENadawca\Type\UslugiType[] $usluga
     *
     * @return self
     */
    public function setUsluga(array $usluga)
    {
        $this->usluga = $usluga;

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
