<?php

namespace PostgreSQL;

class PostgreSQLCreateTable
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function createTables()
    {
        $sql = 'CREATE TABLE if NOT EXISTS posts (
            userId INT NOT NULL,
            id INT PRIMARY KEY,
            title VARCHAR (255) NOT NULL,
            body TEXT NOT NULL
        )';

        $this->pdo->exec($sql);

        $sql2 = 'CREATE TABLE IF NOT EXISTS comments (
            postId INT NOT NULL REFERENCES posts (id),
            id INT PRIMARY KEY,
            name VARCHAR (255) NOT NULL,
            email VARCHAR (255) NOT NULL,
            body TEXT NOT NULL
        )';

        $this->pdo->exec($sql2);
        return $this;
    }
}