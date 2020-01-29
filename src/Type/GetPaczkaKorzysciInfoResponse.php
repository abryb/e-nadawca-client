<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetPaczkaKorzysciInfoResponse
 */
class GetPaczkaKorzysciInfoResponse
{
    /**
     * @var string $status
     */
    protected $status;

    /**
     * @var int $idKarta
     */
    protected $idKarta;

    /**
     * @var \Abryb\ENadawca\Type\InfoPaczkaKorzysciType $info
     */
    protected $info;

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
    ];

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as idKarta
     *
     * @return int
     */
    public function getIdKarta()
    {
        return $this->idKarta;
    }

    /**
     * Sets a new idKarta
     *
     * @param int $idKarta
     *
     * @return self
     */
    public function setIdKarta($idKarta)
    {
        $this->idKarta = $idKarta;

        return $this;
    }

    /**
     * Gets as info
     *
     * @return \Abryb\ENadawca\Type\InfoPaczkaKorzysciType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * @param \Abryb\ENadawca\Type\InfoPaczkaKorzysciType $info
     *
     * @return self
     */
    public function setInfo(InfoPaczkaKorzysciType $info)
    {
        $this->info = $info;

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
