<?php

class OracleConnection extends DBConnection
{
    public function connection()
    {
        echo "Соединение с БД Oracle установлено" . PHP_EOL;
    }
}
