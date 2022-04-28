<?php

include_once "config.php";

function interaction(Db $db)
{
    $db->createConnection();
    $db->createRecord();
}

$db = new MySQLFactory();
interaction($db);

$db = new PostgreSQLFactory();
interaction($db);

$db = new OracleFactory();
interaction($db);
