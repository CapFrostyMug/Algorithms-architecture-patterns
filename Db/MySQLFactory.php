<?php

class MySQLFactory extends Db
{
    protected function createDBConnection(): DBConnection
    {
        echo "Инициализация подключения к БД MySQL..." . PHP_EOL;
        return new MySQLConnection();
    }

    protected function createDBRecord(): DBRecord
    {
        return new MySQLRecord();
    }
}
