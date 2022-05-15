<?php

spl_autoload_register(function ($class) {
    include $class . '.php';
});

$onlineStore = new OnlineStore(new QiwiPaymentMethod());
$onlineStore->doSomePayment(100);

$onlineStore = new OnlineStore(new YandexPaymentMethod());
$onlineStore->doSomePayment(500);
