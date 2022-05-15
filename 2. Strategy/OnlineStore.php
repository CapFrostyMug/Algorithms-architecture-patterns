<?php

class OnlineStore
{

    private iPaymentMethod $paymentMethod;

    public function __construct(iPaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function setPaymentMethod(iPaymentMethod $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function doSomePayment(int $data): void
    {
        $result = $this->paymentMethod->doConcretePayment($data);
        echo $result;
    }

}
