<?php

class YandexPaymentMethod implements iPaymentMethod
{
    public function doConcretePayment(string $data): string
    {
        return "Произвожу оплату на сумму $data у.е. с помощью сервиса Яндекс" . PHP_EOL;
    }
}
