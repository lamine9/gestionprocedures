<?php

class Database
{
    public $hostname, $dbname, $username, $password, $connection;

    public function __construct(){
        $this->hostname = "localhost";
        $this->dbname = "gestionprocedures";
        $this->username = "root";
        $this->password = "";

        try {
            $this->connection =
                new PDO(
                    "mysql:host=".$this->hostname.";dbname=".$this->dbname,
                    $this->username,
                    $this->password
                );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }catch (PDOException $exception){
            echo "Error: ".$exception->getMessage();
        }
    }

    public function getConnection(){
        return $this->connection;
    }
}