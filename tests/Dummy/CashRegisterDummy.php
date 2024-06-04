<?php

/**
 * The Dummy is a class without logic serving as a placeholder.
 * 
 * It facilitates the instantiation of a SUT.
 */
class CashRegisterDummy implements CashRegister
{
    public function isConnectedToTheBank(): bool
    {
        //
    }

    public function payment(Order $order): void
    {
        //
    }
}