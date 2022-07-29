<?php
/* Include the Router Class */
require_once get_parent_theme_file_path('/modules/router.php');


/* Insert your Routes Here */
$route = array(
    '/' => 'welcome'
);

/* Intialize the Router */
new Routes($route);
?>