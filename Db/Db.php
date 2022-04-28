<?php

abstract class Db
{
    private DBConnection $connect;
    private DBRecord $record;

    public function __construct()
    {
        $this->connect = $this->createDBConnection();
        $this->record = $this->createDBRecord();
    }

    public function createConnection()
    {
        echo "Создание подключения к БД..." . PHP_EOL;
        $this->connect->connection();
    }

    public function createRecord()
    {
        echo "Идет запись таблицы БД..." . PHP_EOL;
        $this->record->recording();
    }

    abstract protected function createDBConnection(): DBConnection;
    abstract protected function createDBRecord(): DBRecord;
}
