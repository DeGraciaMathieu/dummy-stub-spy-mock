<?php

interface CashRegister
{
    public function isConnectedToTheBank(): bool;
    public function payment(Order $order): void;
}