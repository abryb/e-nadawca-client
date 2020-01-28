<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing GetAccountListResponse
 */
class GetAccountListResponse
{
    /**
     * @var \Abryb\ENadawca\Type\AccountType[] $account
     */
    private $account = [
    ];

    /**
     * Adds as account
     *
     * @param \Abryb\ENadawca\Type\AccountType $account
     *
     * @return self
     */
    public function addToAccount(AccountType $account)
    {
        $this->account[] = $account;

        return $this;
    }

    /**
     * isset account
     *
     * @param int|string $index
     *
     * @return bool
     */
    public function issetAccount($index)
    {
        return isset($this->account[$index]);
    }

    /**
     * unset account
     *
     * @param int|string $index
     */
    public function unsetAccount($index)
    {
        unset($this->account[$index]);
    }

    /**
     * Gets as account
     *
     * @return \Abryb\ENadawca\Type\AccountType[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * @param \Abryb\ENadawca\Type\AccountType[] $account
     *
     * @return self
     */
    public function setAccount(array $account)
    {
        $this->account = $account;

        return $this;
    }
}
