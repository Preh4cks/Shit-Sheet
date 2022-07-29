<?php

class WelcomeController extends Controller {
    function __construct() {
		parent::__construct();
       	$this->load('header.partials.php', array('title' => 'Home', 'styles' => array('global.css', 'welcome.css')));
		$this->load('welcome.template.php');
       	$this->load('footer.partials.php');
    }
}

?>