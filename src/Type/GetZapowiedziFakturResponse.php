<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetZapowiedziFakturResponse
 */
class GetZapowiedziFakturResponse
{
    /**
     * @var mixed[] $zapowiedzFakturyZipFile
     */
    protected $zapowiedzFakturyZipFile = [
    ];

    /**
     * Adds as zapowiedzFakturyZipFile
     *
     * @return self
     */
    public function addToZapowiedzFakturyZipFile($zapowiedzFakturyZipFile)
    {
        $this->zapowiedzFakturyZipFile[] = $zapowiedzFakturyZipFile;

        return $this;
    }

    /**
     * isset zapowiedzFakturyZipFile
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetZapowiedzFakturyZipFile($index)
    {
        return isset($this->zapowiedzFakturyZipFile[$index]);
    }

    /**
     * unset zapowiedzFakturyZipFile
     *
     * @param int|string $index
     */
    public function unsetZapowiedzFakturyZipFile($index)
    {
        unset($this->zapowiedzFakturyZipFile[$index]);
    }

    /**
     * Gets as zapowiedzFakturyZipFile
     *
     * @return mixed[]
     */
    public function getZapowiedzFakturyZipFile()
    {
        return $this->zapowiedzFakturyZipFile;
    }

    /**
     * Sets a new zapowiedzFakturyZipFile
     *
     * @param mixed $zapowiedzFakturyZipFile
     *
     * @return self
     */
    public function setZapowiedzFakturyZipFile(array $zapowiedzFakturyZipFile)
    {
        $this->zapowiedzFakturyZipFile = $zapowiedzFakturyZipFile;

        return $this;
    }
}
