<?php

class MysqlDatabase{
    private $connection;

    public function __construct($servername, $username, $password, $dbname){
        $conn = mysqli_connect(
            $servername,
            $username,
            $password,
            $dbname
        );

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $this->connection = $conn;
    }

    public function query($sql){
        $result = mysqli_query($this->connection, $sql) or die ("Problemas en query:".mysqli_error($this->connection));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function queryInsert($sql){
        $result = mysqli_query($this->connection, $sql) or die ("Problemas en quertInsert: ".mysqli_error($this->connection));
    }

    public function buscaUserName($sql){
        $result = mysqli_query($this->connection, $sql) or die ("Problemas en quertInsert: ".mysqli_error($this->connection));
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function execute($sql){
        mysqli_query($this->connection, $sql);
    }
}