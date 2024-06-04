<?php

class Server
{
    public function __construct(
        private CashRegister $cashRegister,
    ) {}

    public function whatIsThePriceOf(Order $order): int
    {
        return $order->totalAmount(); 
    }

    public function canAcceptAPayment(): bool
    {
        return $this->cashRegister->isConnectedToTheBank();
    }

    public function payment(Order $order): void
    {
        try {
            $this->cashRegister->payment($order);
        } catch (BankConnectionException $th) {
            throw new Exception('Sorry, the payment did not go through');
        }
    }
}