<?php

spl_autoload_register(function ($class) {
    include $class . '.php';
});

$handHunter = new HandHunter();

$applicant1 = new Applicant("Семён", "iloveit@email.com", "0");
$applicant2 = new Applicant("Саня", "it-guru@email.com", "50");

$handHunter->attach($applicant1);
$handHunter->attach($applicant2);

$handHunter->setState("PHP-developer, $1000");

$handHunter->detach($applicant2);
