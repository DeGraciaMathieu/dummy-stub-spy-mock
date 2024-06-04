<?php

/**
 * Mock, like the spy, ensures that the SUT makes the desired calls on its dependencies.
 *
 * Unlike the spy, it directly verifies assertions at the call of the mocked method.
 */
class MockTest extends TestCase
{
    public function it_can_process_the_payment_of_an_order()
    {
        $cashRegisterMock = new CashRegisterMock(
            expectedAmount: 10,
        );

        $server = new Server($cashRegisterMock);

        $order = $this->oneOrder()->atThePriceOf(10);

        $server->payment($order);
    }
}