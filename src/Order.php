<?php

class Order
{
    public function __construct(
        private int $amount,
    ) {}

    public function totalAmount(): int
    {
        return $this->amount;
    }
}