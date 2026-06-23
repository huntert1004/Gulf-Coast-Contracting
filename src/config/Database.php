<?php

class Database
{
    public static function connect(): PDO
    {
        $host = 'db';
        $dbname = 'gulf_coast_contracting';
        $username = 'gcc_user';
        $password = 'gcc_password';

        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

        return new PDO($dsn, $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
}