<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PakietType
 *
 * XSD Type: pakietType
 */
class PakietType
{
    /**
     * @var string $pakietGuid
     */
    protected $pakietGuid;

    /**
     * @var string $miejsceOdbioru
     */
    protected $miejsceOdbioru;

    /**
     * @var string $sposobNadania
     */
    protected $sposobNadania;

    /**
     * Uwaga w tym miejscu wystarczy jak obiekt kierunke będzie miał ustawioną tylko własność id (nie jest potrzebne przesyłanie pełnego
     *  obiektu kierunekType pobranego z metody getKierunki)
     *
     * @var \Abryb\ENadawca\Type\KierunekType $kierunek
     */
    protected $kierunek;

    /**
     * @var \Abryb\ENadawca\Type\OpakowanieType[] $opakowanie
     */
    protected $opakowanie = [
    ];

    /**
     * @var string[] $czynnoscUpustowa
     */
    protected $czynnoscUpustowa = [
    ];

    /**
     * Gets as pakietGuid
     *
     * @return string
     */
    public function getPakietGuid()
    {
        return $this->pakietGuid;
    }

    /**
     * Sets a new pakietGuid
     *
     * @param string $pakietGuid
     *
     * @return self
     */
    public function setPakietGuid($pakietGuid)
    {
        $this->pakietGuid = $pakietGuid;

        return $this;
    }

    /**
     * Gets as miejsceOdbioru
     *
     * @return string
     */
    public function getMiejsceOdbioru()
    {
        return $this->miejsceOdbioru;
    }

    /**
     * Sets a new miejsceOdbioru
     *
     * @param string $miejsceOdbioru
     *
     * @return self
     */
    public function setMiejsceOdbioru($miejsceOdbioru)
    {
        $this->miejsceOdbioru = $miejsceOdbioru;

        return $this;
    }

    /**
     * Gets as sposobNadania
     *
     * @return string
     */
    public function getSposobNadania()
    {
        return $this->sposobNadania;
    }

    /**
     * Sets a new sposobNadania
     *
     * @param string $sposobNadania
     *
     * @return self
     */
    public function setSposobNadania($sposobNadania)
    {
        $this->sposobNadania = $sposobNadania;

        return $this;
    }

    /**
     * Gets as kierunek
     *
     * Uwaga w tym miejscu wystarczy jak obiekt kierunke będzie miał ustawioną tylko własność id (nie jest potrzebne przesyłanie pełnego
     *  obiektu kierunekType pobranego z metody getKierunki)
     *
     * @return \Abryb\ENadawca\Type\KierunekType
     */
    public function getKierunek()
    {
        return $this->kierunek;
    }

    /**
     * Sets a new kierunek
     *
     * Uwaga w tym miejscu wystarczy jak obiekt kierunke będzie miał ustawioną tylko własność id (nie jest potrzebne przesyłanie pełnego
     *  obiektu kierunekType pobranego z metody getKierunki)
     *
     * @param \Abryb\ENadawca\Type\KierunekType $kierunek
     *
     * @return self
     */
    public function setKierunek(KierunekType $kierunek)
    {
        $this->kierunek = $kierunek;

        return $this;
    }

    /**
     * Adds as opakowanie
     *
     * @param \Abryb\ENadawca\Type\OpakowanieType $opakowanie
     *
     * @return self
     */
    public function addToOpakowanie(OpakowanieType $opakowanie)
    {
        $this->opakowanie[] = $opakowanie;

        return $this;
    }

    /**
     * isset opakowanie
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetOpakowanie($index)
    {
        return isset($this->opakowanie[$index]);
    }

    /**
     * unset opakowanie
     *
     * @param int|string $index
     */
    public function unsetOpakowanie($index)
    {
        unset($this->opakowanie[$index]);
    }

    /**
     * Gets as opakowanie
     *
     * @return \Abryb\ENadawca\Type\OpakowanieType[]
     */
    public function getOpakowanie()
    {
        return $this->opakowanie;
    }

    /**
     * Sets a new opakowanie
     *
     * @param \Abryb\ENadawca\Type\OpakowanieType[] $opakowanie
     *
     * @return self
     */
    public function setOpakowanie(array $opakowanie)
    {
        $this->opakowanie = $opakowanie;

        return $this;
    }

    /**
     * Adds as czynnoscUpustowa
     *
     * @param string $czynnoscUpustowa
     *
     * @return self
     */
    public function addToCzynnoscUpustowa($czynnoscUpustowa)
    {
        $this->czynnoscUpustowa[] = $czynnoscUpustowa;

        return $this;
    }

    /**
     * isset czynnoscUpustowa
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetCzynnoscUpustowa($index)
    {
        return isset($this->czynnoscUpustowa[$index]);
    }

    /**
     * unset czynnoscUpustowa
     *
     * @param int|string $index
     */
    public function unsetCzynnoscUpustowa($index)
    {
        unset($this->czynnoscUpustowa[$index]);
    }

    /**
     * Gets as czynnoscUpustowa
     *
     * @return string[]
     */
    public function getCzynnoscUpustowa()
    {
        return $this->czynnoscUpustowa;
    }

    /**
     * Sets a new czynnoscUpustowa
     *
     * @param string $czynnoscUpustowa
     *
     * @return self
     */
    public function setCzynnoscUpustowa(array $czynnoscUpustowa)
    {
        $this->czynnoscUpustowa = $czynnoscUpustowa;

        return $this;
    }
}
