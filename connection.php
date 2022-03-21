<?php

const DB_SERVER = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'dieng';


class DBConnector{
    private $conn;

    function __construct()
    {
        $conn = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);


        if ($conn->connect_error) {
            die("connection failed: ".$conn->connect_error);
        }
    }

    public function closeDatabase(){

        mysqli_close($this->conn);
    }

}