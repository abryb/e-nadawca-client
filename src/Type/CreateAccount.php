<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing CreateAccount
 */
class CreateAccount
{
    /**
     * @var \Abryb\ENadawca\Type\AccountType $account
     */
    private $account;

    /**
     * Gets as account
     *
     * @return \Abryb\ENadawca\Type\AccountType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * @param \Abryb\ENadawca\Type\AccountType $account
     *
     * @return self
     */
    public function setAccount(AccountType $account)
    {
        $this->account = $account;

        return $this;
    }
}
