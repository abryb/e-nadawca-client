<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing HelloResponse
 */
class HelloResponse
{
    /**
     * @var string $out
     */
    protected $out;

    /**
     * Gets as out
     *
     * @return string
     */
    public function getOut()
    {
        return $this->out;
    }

    /**
     * Sets a new out
     *
     * @param string $out
     *
     * @return self
     */
    public function setOut($out)
    {
        $this->out = $out;

        return $this;
    }
}
