<?php

/**
 * Stub can also be configured to address a more specific use case.
 * 
 * For example, simulating a connection error during a payment attempt.
 */
class CashRegisterThatFailsDuringPaymentStub implements CashRegister
{
    public function isConnectedToTheBank(): bool
    {
        return true;
    }

    public function payment(Order $order): void
    {
        throw new BankConnectionException();
    }
}