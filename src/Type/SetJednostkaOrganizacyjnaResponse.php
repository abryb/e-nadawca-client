<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing SetJednostkaOrganizacyjnaResponse
 */
class SetJednostkaOrganizacyjnaResponse
{
    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
    ];

    /**
     * @var \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     */
    protected $jednostkaOrganizacyjna = [
    ];

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

    /**
     * Adds as jednostkaOrganizacyjna
     *
     * @param \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $jednostkaOrganizacyjna
     *
     * @return self
     */
    public function addToJednostkaOrganizacyjna(JednostkaOrganizacyjnaType $jednostkaOrganizacyjna)
    {
        $this->jednostkaOrganizacyjna[] = $jednostkaOrganizacyjna;

        return $this;
    }

    /**
     * isset jednostkaOrganizacyjna
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetJednostkaOrganizacyjna($index)
    {
        return isset($this->jednostkaOrganizacyjna[$index]);
    }

    /**
     * unset jednostkaOrganizacyjna
     *
     * @param int|string $index
     */
    public function unsetJednostkaOrganizacyjna($index)
    {
        unset($this->jednostkaOrganizacyjna[$index]);
    }

    /**
     * Gets as jednostkaOrganizacyjna
     *
     * @return \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType[]
     */
    public function getJednostkaOrganizacyjna()
    {
        return $this->jednostkaOrganizacyjna;
    }

    /**
     * Sets a new jednostkaOrganizacyjna
     *
     * @param \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     *
     * @return self
     */
    public function setJednostkaOrganizacyjna(array $jednostkaOrganizacyjna)
    {
        $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;

        return $this;
    }
}
