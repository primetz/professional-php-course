<?php

class Db
{
    protected PDO $db;
    public function __construct()
    {
        $config = require_once dirname(__DIR__) . '/config/db.php';
        $this->db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['name'] . '', $config['user'], $config['password']);
    }

    private function query(string $sql, array $params = [])
    {
        $stmt = $this->db->prepare($sql);
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                $stmt->bindValue(':' . $key, $value);
            }
        }
        $stmt->execute();
        return $stmt;
    }

    public function find(string $sql, array $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function findAll(string $sql, array $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
