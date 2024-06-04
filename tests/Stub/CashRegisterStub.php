<?php

/**
 * Configurable stub allows modifying the behavior of a SUT.
 */
class CashRegisterStub implements CashRegister
{
    public function __construct(
        private bool $isConnectedToBank,
    ) {}

    public function isConnectedToTheBank(): bool
    {
        return $this->isConnectedToBank;
    }

    public function payment(Order $order): void
    {
        //
    }
}