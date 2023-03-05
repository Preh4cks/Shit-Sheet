<?php

class ProfileController extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index($fields) {
        $fields = array('fields' => $fields);
        $header_values = array(
            'styles' => array(
                'header.css',
                'profile.css',
                'footer.css',
                'modal-video.min.css',
            ),

            'custom_css_cdn' => array(
                'https://unpkg.com/aos@2.3.1/dist/aos.css',
            ),
            
            'custom_js_cdn' => array(
                'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js',
                'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js',
            ),

            'scripts' => array(
                'profile.js',
                'jquery-popup.min.js'
            ),
        );

        $this->load('header.partials.php', $header_values);
        $this->load('profile.partials.php', $fields);
        $this->load('footer.partials.php');
    }
}

?>