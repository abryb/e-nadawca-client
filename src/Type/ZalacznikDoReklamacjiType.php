<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing ZalacznikDoReklamacjiType
 *
 * XSD Type: zalacznikDoReklamacjiType
 */
class ZalacznikDoReklamacjiType
{
    /**
     * @var mixed $fileContent
     */
    protected $fileContent;

    /**
     * @var string $fileName
     */
    protected $fileName;

    /**
     * @var string $fileDesc
     */
    protected $fileDesc;

    /**
     * Gets as fileContent
     */
    public function getFileContent()
    {
        return $this->fileContent;
    }

    /**
     * Sets a new fileContent
     *
     * @return self
     */
    public function setFileContent($fileContent)
    {
        $this->fileContent = $fileContent;

        return $this;
    }

    /**
     * Gets as fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName
     *
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Gets as fileDesc
     *
     * @return string
     */
    public function getFileDesc()
    {
        return $this->fileDesc;
    }

    /**
     * Sets a new fileDesc
     *
     * @param string $fileDesc
     *
     * @return self
     */
    public function setFileDesc($fileDesc)
    {
        $this->fileDesc = $fileDesc;

        return $this;
    }
}
