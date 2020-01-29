<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing SetJednostkaOrganizacyjna
 */
class SetJednostkaOrganizacyjna
{
    /**
     * @var \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     */
    protected $jednostkaOrganizacyjna = [
    ];

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
