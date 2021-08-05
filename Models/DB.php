<?php

namespace Models;

class DB
{

    public $sql;
    public $query;
    public $result;
    public $num_rows;
    public $error;

    function __construct($sql)
    {

        // database credentials
        $host = "localhost";
        $database = "auth";
        $username = "root";
        $password = "password";

        $this->sql = $sql;

        $connection = new \mysqli($host, $username, $password, $database);

        $query = $connection->query($sql);

        if ($query) {
            if (substr($sql, 0, 6) != "INSERT") {
                $this->result = $query->fetch_all(MYSQLI_ASSOC);
                $this->num_rows = $query->num_rows;
            }
            $this->query = $query;
        } else {
            $this->result = null;
            $this->num_rows = 0;
            $this->error = $connection->error . " <br /> SQL: " . $sql;
            print($this->error);
        }
    }
}
