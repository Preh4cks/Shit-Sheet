<?php

class ErrorController extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $custom_css_cdn = array(
            'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css',
            'https://fonts.googleapis.com/css?family=Arvo'
        );
        
        $this->load('header.partials.php', array('title' => 'ERROR 404 Page not Found', 'styles' => array('error.css'), 'custom_css_cdn' => $custom_css_cdn));
        $this->load('error.template.php');
        $this->load('footer.partials.php');
    }
}

?>