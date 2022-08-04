<?php

class WelcomeController extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index($fields) {
        $fields = array('fields' => $fields);
        $header_values = array(
            'title' => 'Home',
            'styles' => array('global.css', 'welcome.css'),
        );

        $this->load('header.partials.php', $header_values);
        $this->load('welcome.partials.php', $fields);
        $this->load('footer.partials.php');
    }
}

?>