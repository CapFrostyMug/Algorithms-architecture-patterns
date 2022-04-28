<?php

class PostgreSQLFactory extends Db
{
    protected function createDBConnection(): DBConnection
    {
        echo "Инициализация подключения к БД PostgreSQL..." . PHP_EOL;
        return new PostgreSQLConnection();
    }

    protected function createDBRecord(): DBRecord
    {
        return new PostgreSQLRecord();
    }
}
