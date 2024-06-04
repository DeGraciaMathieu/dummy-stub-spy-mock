<?php

/**
 * The spy is useful for ensuring that the system under test makes the desired calls on its dependencies.
 * 
 * It allows monitoring the indirect outputs of our system under test.
 */
class CashRegisterSpy implements CashRegister
{
    public bool $numberOfPaymentsAccepted = 0;
    public bool $amountCollected = 0;

    public function isConnectedToTheBank(): bool
    {
        return true;
    }

    public function payment(Order $order): void
    {
        $this->numberOfPaymentsAccepted++;

        $this->amountCollected += $order->totalAmount();
    }
}
