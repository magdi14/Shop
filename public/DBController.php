<?php


class DBController
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "shop";
    private $conn;

    function __construct()
    {
        $this->conn = $this->connectDB();
    }
    function connectDB()
    {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        else
            return $conn;
    }
    function runQuery($query)
    {
        $result = mysqli_query($this->conn, $query);
        while($row = mysqli_fetch_object($result))
        {
            $resultSet[] = $row;
        }
        if(!empty($resultSet))
        {
            return $resultSet;
        }
        else
        {
            echo "No Result";
        }


    }
}