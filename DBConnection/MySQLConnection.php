<?php

class MySQLConnection extends DBConnection
{
    public function connection()
    {
        echo "Соединение с БД MySQL установлено" . PHP_EOL;
    }
}
