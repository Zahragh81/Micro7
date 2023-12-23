<?php

namespace App\Models\Contracts;

class mysqlBaseModel extends BaseModel
{
    protected function __construct()
  {
    try {

        $this->connection = new \PDO("mysql:dbname={$_ENV['DB_NAME']};host={$_ENV['DB_HOST']}", $_ENV['DB_USER'], $_ENV['DB_PASS']);
        $this->connection->exec("set names utf8;");
    } catch (PDOException $e) {
        echo "Connection Faild: " . $e->getMessage();
    }
  }
    #create(insert)['name' => 'zahra', 'email' => 'zahra@gholizadeh.com']
    public function create(array $new_data): int
    {
        return 1;
    }
    #Read (select) single | multiple
    public function find($id): object
    {
        return null;
    }
    public function getAll() : array{
        return [];
    }
    public function get(array $columns, array $where): array
    {
        return [];
    }
    #Update records
    public function update(array $data, array $where): int
    {
        return 1;
    }

    #Delete
    public function delete(array $where): int
    {
        return 1;
    }
}

