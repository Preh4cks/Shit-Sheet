<?php

class Model {
    private $connection;

	public function __construct() { }

    /* Connect to database */
    protected function db_connect($hostname, $username, $password, $db_name) {
        $this->$connection = new mysqli($hostname, $username, $password, $db_name) or die("Connect failed: %s\n". $this->$connection -> error);    
    }

    /* Get all Records */
    protected function fetch_all($query) {
        $data = array();
        $this->$connection;
        $result = $this->$connection->query($query);

        while($row = mysqli_fetch_assoc($result))  {
            $data[] = $row;
        }

        return $data;
    }

    /* Get Single Record */
    protected function fetch_record($query) {
        $this->$connection;
        $result = $this->$connection->query($query);
        return mysqli_fetch_assoc($result);
    }

    /* Run Query but returns if query is successful or not */
    protected function run_mysql_query($query) {
        $this->$connection;
        $result = $this->$connection->query($query);
        return $this->$connection->insert_id;
    }

    /* Escape the string */
    protected function escape_this_string($string) {
        $this->$connection;
        return $this->$connection->real_escape_string($string);
    }

    /* Disconnect to Database */
    public function __destruct() {
        if(isset($this->$connection)) {
            mysqli_close($this->$connection);
        }
    }
}
?>