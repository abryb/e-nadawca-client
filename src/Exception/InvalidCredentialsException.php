<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Exception;

/**
 * @author Błażej Rybarkiewicz <b.rybarkiewicz@gmail.com>
 */
class InvalidCredentialsException extends ENadawcaException
{
    public static function create(\Throwable $previous): InvalidCredentialsException
    {
        return new static('Credentials to e-nadawca are invalid. Be aware that after 3 mistakes your account will be disabled!', 0, $previous);
    }
}
