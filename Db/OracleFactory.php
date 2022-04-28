<?php

class OracleFactory extends Db
{
    protected function createDBConnection(): DBConnection
    {
        echo "Инициализация подключения к БД Oracle..." . PHP_EOL;
        return new OracleConnection();
    }

    protected function createDBRecord(): DBRecord
    {
        return new OracleRecord();
    }
}
