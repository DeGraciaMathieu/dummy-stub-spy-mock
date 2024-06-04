<?php

/**
 * The Dummy is a class without logic serving as a placeholder.
 * 
 * It facilitates the instantiation of a SUT.
 */
class DummyTest extends TestCase
{
    public function it_can_give_the_price_of_an_order()
    {
        $server = new Server(new CashRegisterDummy());

        $order = $this->oneOrder()->atThePriceOf(10);

        $this->assertEquals(10, $server->whatIsThePriceOf($order));
    }
}