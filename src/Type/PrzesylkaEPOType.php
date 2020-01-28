<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaEPOType
 *
 * XSD Type: przesylkaEPOType
 */
class PrzesylkaEPOType
{
    /**
     * @var string $guid
     */
    private $guid;

    /**
     * @var string $numerNadania
     */
    private $numerNadania;

    /**
     * @var string $statusEPO
     */
    private $statusEPO;

    /**
     * @var \Abryb\ENadawca\Type\EPOInfoType $ePOInfo
     */
    private $ePOInfo;

    /**
     * @var mixed $biometricSignatureContent
     */
    private $biometricSignatureContent;

    /**
     * @var int $version
     */
    private $version;

    /**
     * Gets as guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Sets a new guid
     *
     * @param string $guid
     *
     * @return self
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Gets as numerNadania
     *
     * @return string
     */
    public function getNumerNadania()
    {
        return $this->numerNadania;
    }

    /**
     * Sets a new numerNadania
     *
     * @param string $numerNadania
     *
     * @return self
     */
    public function setNumerNadania($numerNadania)
    {
        $this->numerNadania = $numerNadania;

        return $this;
    }

    /**
     * Gets as statusEPO
     *
     * @return string
     */
    public function getStatusEPO()
    {
        return $this->statusEPO;
    }

    /**
     * Sets a new statusEPO
     *
     * @param string $statusEPO
     *
     * @return self
     */
    public function setStatusEPO($statusEPO)
    {
        $this->statusEPO = $statusEPO;

        return $this;
    }

    /**
     * Gets as ePOInfo
     *
     * @return \Abryb\ENadawca\Type\EPOInfoType
     */
    public function getEPOInfo()
    {
        return $this->ePOInfo;
    }

    /**
     * Sets a new ePOInfo
     *
     * @param \Abryb\ENadawca\Type\EPOInfoType $ePOInfo
     *
     * @return self
     */
    public function setEPOInfo(EPOInfoType $ePOInfo)
    {
        $this->ePOInfo = $ePOInfo;

        return $this;
    }

    /**
     * Gets as biometricSignatureContent
     */
    public function getBiometricSignatureContent()
    {
        return $this->biometricSignatureContent;
    }

    /**
     * Sets a new biometricSignatureContent
     *
     * @return self
     */
    public function setBiometricSignatureContent($biometricSignatureContent)
    {
        $this->biometricSignatureContent = $biometricSignatureContent;

        return $this;
    }

    /**
     * Gets as version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param int $version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }
}
