<?php


class Db
{

    public $link;

    public function __construct()
    {
        $this->connect();
    }

    public function connect ()
    {
        $config = require_once 'config.php';

        $dsn = 'mysql:dbname=' . $config['dbname'] . ';host=' . $config['host'];

        $this->link = new PDO($dsn, $config['user'], $config['password']);

        return $this;
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->link->prepare($sql);
        return $sth->execute($params);
    }

    public function closeConnection()
    {
        $this->link = null;
    }

}




