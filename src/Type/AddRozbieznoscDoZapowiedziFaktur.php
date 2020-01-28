<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing AddRozbieznoscDoZapowiedziFaktur
 */
class AddRozbieznoscDoZapowiedziFaktur
{
    /**
     * @var mixed[] $rozbieznosciZipFile
     */
    private $rozbieznosciZipFile = [
    ];

    /**
     * Adds as rozbieznosciZipFile
     *
     * @return self
     */
    public function addToRozbieznosciZipFile($rozbieznosciZipFile)
    {
        $this->rozbieznosciZipFile[] = $rozbieznosciZipFile;

        return $this;
    }

    /**
     * isset rozbieznosciZipFile
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetRozbieznosciZipFile($index)
    {
        return isset($this->rozbieznosciZipFile[$index]);
    }

    /**
     * unset rozbieznosciZipFile
     *
     * @param int|string $index
     */
    public function unsetRozbieznosciZipFile($index)
    {
        unset($this->rozbieznosciZipFile[$index]);
    }

    /**
     * Gets as rozbieznosciZipFile
     *
     * @return mixed[]
     */
    public function getRozbieznosciZipFile()
    {
        return $this->rozbieznosciZipFile;
    }

    /**
     * Sets a new rozbieznosciZipFile
     *
     * @param mixed $rozbieznosciZipFile
     *
     * @return self
     */
    public function setRozbieznosciZipFile(array $rozbieznosciZipFile)
    {
        $this->rozbieznosciZipFile = $rozbieznosciZipFile;

        return $this;
    }
}
