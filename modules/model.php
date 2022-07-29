<?php

class Model {
    private $connection;

	function __construct() { }

    /* Connect to database */
    function db_connect($hostname, $username, $password, $db_name) {
        $this->$connection = new mysqli($hostname, $username, $password, $db_name) or die("Connect failed: %s\n". $this->$connection -> error);    
    }

    /* Get all Records */
    function fetch_all($query) {
        $data = array();
        $this->$connection;
        $result = $this->$connection->query($query);

        while($row = mysqli_fetch_assoc($result))  {
            $data[] = $row;
        }

        return $data;
    }

    /* Get Single Record */
    function fetch_record($query) {
        $this->$connection;
        $result = $this->$connection->query($query);
        return mysqli_fetch_assoc($result);
    }

    /* Run Query but returns if query is successful or not */
    function run_mysql_query($query) {
        $this->$connection;
        $result = $this->$connection->query($query);
        return $this->$connection->insert_id;
    }

    /* Escape the string */
    function escape_this_string($string) {
        $this->$connection;
        return $this->$connection->real_escape_string($string);
    }

    /* Disconnect to Database */
    function __destruct() {
        if($connection > 0) {
            mysqli_close($this->$connection);
        }
    }
}
?>