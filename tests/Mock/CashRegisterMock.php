<?php

/**
 * Mock, like the spy, ensures that the SUT makes the desired calls on its dependencies.
 *
 * Unlike the spy, it directly verifies assertions at the call of the mocked method.
 */
class CashRegisterMock implements CashRegister
{
    public function __construct(
        private int $expectedAmount,
    ) {}

    public function isConnectedToTheBank(): bool
    {
        return true;
    }

    public function payment(Order $order): void
    {
        Assert::assertEquals($this->expectedAmount, $order->totalAmount());
    }
}