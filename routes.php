<?php
/* Include the Router Class */
require_once get_parent_theme_file_path('/modules/router.php');


/* Insert your Routes Here
 * '/subdirectory' => 'controller_name/method_name' 
 * absence of method_name will set default as index */
$route = array(
    '/' => 'welcome',
);

/* Intialize the Router */
new Routes($route);
?>