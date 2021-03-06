<?php

namespace App\core\Database;

use PDO;
use PDOException;

class QueryBuilder
{
    protected PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * This method return data from DB, from given table name
     */
    public function getAll($table)
    {
        $sql = "SELECT * FROM {$table}";

        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * This method insert data to given table-name with given parameters
     *
     * @param $table
     * @param $parameters
     * @return void
     */
    public function insert($table, $parameters)
    {
        $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters)));

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function getById($table, $id)
    {
        $sql = "SELECT * FROM {$table} WHERE id = {$id}";

        $statement = $this->pdo->prepare($sql);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function update($table, $id, $parameters)
    {
        $keyValues = implode(', ', array_map(function ($key, $value) {
                return "{$value}='{$key}'";
            },
                $parameters,
                array_keys($parameters))
        );

        $sql = sprintf('UPDATE %s SET %s WHERE id = %s',
            $table,
            $keyValues,
            $id);
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }

    /**
     * This method delete a row from table
     */
    public function delete($table, $id)
    {
        $sql = sprintf('DELETE FROM %s WHERE id = %s',
            $table,
            $id,
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }
}