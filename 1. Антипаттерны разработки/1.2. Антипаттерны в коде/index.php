<?php

/* Антипаттерн "ЖЁСТКОЕ КОДИРОВАНИЕ" */

/* Пояснение: сильная привязка к окружению */

const HOSTNAME = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const DATABASE = "php_basic";

$link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
