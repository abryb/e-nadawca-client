<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing Hello
 */
class Hello
{
    /**
     * @var string $in
     */
    private $in;

    /**
     * Gets as in
     *
     * @return string
     */
    public function getIn()
    {
        return $this->in;
    }

    /**
     * Sets a new in
     *
     * @param string $in
     *
     * @return self
     */
    public function setIn($in)
    {
        $this->in = $in;

        return $this;
    }
}
