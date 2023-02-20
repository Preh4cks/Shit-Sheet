<?php

class CheatsheetController extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index($fields) {
        $fields = array('fields' => $fields);
        $header_values = array(
            'title' => 'Home',
            'styles' => array('global.css', 'prism.css', 'cheatsheet.css'),
            'scripts' => array('prism.js'),
        );

        $this->load('header.partials.php', $header_values);
        $this->load('cheatsheet.partials.php', $fields);
        $this->load('footer.partials.php');
    }
}

?>