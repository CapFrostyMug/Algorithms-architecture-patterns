<?php

interface iPaymentMethod
{
    public function doConcretePayment(string $data): string;
}
