<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing ChangePassword
 */
class ChangePassword
{
    /**
     * @var string $newPassword
     */
    private $newPassword;

    /**
     * Gets as newPassword
     *
     * @return string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * Sets a new newPassword
     *
     * @param string $newPassword
     *
     * @return self
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;

        return $this;
    }
}
