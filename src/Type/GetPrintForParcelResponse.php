<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetPrintForParcelResponse
 */
class GetPrintForParcelResponse
{
    /**
     * @var \Abryb\ENadawca\Type\PrintResultType[] $printResult
     */
    private $printResult = [
    ];

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    private $error = [
    ];

    /**
     * Adds as printResult
     *
     * @param \Abryb\ENadawca\Type\PrintResultType $printResult
     *
     * @return self
     */
    public function addToPrintResult(PrintResultType $printResult)
    {
        $this->printResult[] = $printResult;

        return $this;
    }

    /**
     * isset printResult
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetPrintResult($index)
    {
        return isset($this->printResult[$index]);
    }

    /**
     * unset printResult
     *
     * @param int|string $index
     */
    public function unsetPrintResult($index)
    {
        unset($this->printResult[$index]);
    }

    /**
     * Gets as printResult
     *
     * @return \Abryb\ENadawca\Type\PrintResultType[]
     */
    public function getPrintResult()
    {
        return $this->printResult;
    }

    /**
     * Sets a new printResult
     *
     * @param \Abryb\ENadawca\Type\PrintResultType[] $printResult
     *
     * @return self
     */
    public function setPrintResult(array $printResult)
    {
        $this->printResult = $printResult;

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
