<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetJednostkaOrganizacyjna
 */
class GetJednostkaOrganizacyjna
{
    /**
     * @var \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $jednostka
     */
    private $jednostka;

    /**
     * Gets as jednostka
     *
     * @return \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType
     */
    public function getJednostka()
    {
        return $this->jednostka;
    }

    /**
     * Sets a new jednostka
     *
     * @param \Abryb\ENadawca\Type\JednostkaOrganizacyjnaType $jednostka
     *
     * @return self
     */
    public function setJednostka(JednostkaOrganizacyjnaType $jednostka)
    {
        $this->jednostka = $jednostka;

        return $this;
    }
}
