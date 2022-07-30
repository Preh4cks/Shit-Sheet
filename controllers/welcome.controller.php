<?php

class WelcomeController extends Controller {
    public function __construct() {
		parent::__construct();
    }

	public function index() {
       	$this->load('header.partials.php', array('title' => 'Home', 'styles' => array('global.css', 'welcome.css')));
		$this->load('welcome.template.php');
       	$this->load('footer.partials.php');
    }
}

?>