<?php

class WelcomeModel extends Model {
    public function __construct() {
		parent::__construct();
        // $this->db_connect('127.0.0.1:3306', 'root', 'password', 'sample_data');

        // var_dump($this->fetch_all('SELECT * FROM users;'));
    }
}

?>