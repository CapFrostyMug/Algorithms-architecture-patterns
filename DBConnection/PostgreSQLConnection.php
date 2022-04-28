<?php

class PostgreSQLConnection extends DBConnection
{
    public function connection()
    {
        echo "Соединение с БД PostgreSQL установлено" . PHP_EOL;
    }
}
