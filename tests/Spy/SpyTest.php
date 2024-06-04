<?php

/**
 * The spy is useful for ensuring that the SUT makes the desired calls on its dependencies.
 * 
 * It allows monitoring the indirect outputs of our SUT.
 */
class SpyTest extends TestCase
{
    public function it_can_process_the_payment_of_an_order()
    {
        $cashRegisterSpy = new CashRegisterSpy();

        $server = new Server($cashRegisterSpy);

        $order = $this->oneOrder()->atThePriceOf(10);

        $server->payment($order);

        $this->assertEquals(1, $cashRegisterSpy->numberOfPaymentsAccepted);
        $this->assertEquals(10, $cashRegisterSpy->amountCollected);
    }
}