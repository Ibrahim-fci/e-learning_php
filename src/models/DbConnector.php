<?php

// namespace APP\User;

// use PDO;
// use PDOException;



class DbConnector
{

    private $connection;

    public function __construct()
    {

        $servername = "localhost";
        $username = "root";
        // $port = '3307';
        // $password = 'P@ssw0rd';
        $database = "e_learning";
        $password = '';

        /// crete db connection using pdo
        $this->connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        try {
            // echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    // gett connection
    public function getConnection()
    {
        return $this->connection;
    }



    public function  runDml($sql)
    {
        return $this->connection->query($sql);
    }
}