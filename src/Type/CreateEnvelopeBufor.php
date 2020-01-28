<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing CreateEnvelopeBufor
 */
class CreateEnvelopeBufor
{
    /**
     * @var \Abryb\ENadawca\Type\BuforType[] $bufor
     */
    private $bufor = [
    ];

    /**
     * Adds as bufor
     *
     * @param \Abryb\ENadawca\Type\BuforType $bufor
     *
     * @return self
     */
    public function addToBufor(BuforType $bufor)
    {
        $this->bufor[] = $bufor;

        return $this;
    }

    /**
     * isset bufor
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetBufor($index)
    {
        return isset($this->bufor[$index]);
    }

    /**
     * unset bufor
     *
     * @param int|string $index
     */
    public function unsetBufor($index)
    {
        unset($this->bufor[$index]);
    }

    /**
     * Gets as bufor
     *
     * @return \Abryb\ENadawca\Type\BuforType[]
     */
    public function getBufor()
    {
        return $this->bufor;
    }

    /**
     * Sets a new bufor
     *
     * @param \Abryb\ENadawca\Type\BuforType[] $bufor
     *
     * @return self
     */
    public function setBufor(array $bufor)
    {
        $this->bufor = $bufor;

        return $this;
    }
}
