<?php

class ErrorController extends Controller {
    function __construct() {
      parent::__construct();
      $this->load('error.template.php');
    }
}

?>