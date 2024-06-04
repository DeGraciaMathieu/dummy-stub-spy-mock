<?php

/**
 * The Stub allows controlling the indirect calls of our SUT.
 * 
 * It is present to address system constraints.
 */
class StubTest extends TestCase
{
    /**
     * A configurable stub allows modifying the behavior of a SUT.
     */
    public function it_can_accept_payment()
    {
        $server = new Server(new CashRegisterStub(
            isConnectedToBank: true
        ));

        $this->assertTrue($server->canAcceptAPayment());
    }

    /**
     * The stub can also be configured to address a more specific use case.
     * 
     * For example, simulating a connection error during a payment attempt.
     */
    public function it_can_display_a_payment_error()
    {
        $server = new Server(new CashRegisterThatFailsDuringPaymentStub());

        $order = $this->oneOrder()->atThePriceOf(10);

        $this->expectExceptionMessage('Sorry, the payment did not go through');

        $server->payment($order);
    }
}