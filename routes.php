<?php
/* Include the Router Class */
require_once get_parent_theme_file_path('/modules/router.php');
require_once get_parent_theme_file_path('/modules/lib/dynamo_electric_machine.lib.php');

/* Insert your Routes Here
 * '/subdirectory' => 'controller_name/method_name' 
 * absence of method_name will set default as index */
$route = array(
    '/' => 'welcome',
);

/* Generate code can be customize for the generation
 * t - Template
 * c - Controller
 * m - Model
 * s - style
 * p - partials
 * 
 * Here are some mnemonics you can use
 * tcmsp - Thursty Cat Makes Sipping Noises
 * mct - Men Cut Twig
 * */
$generate_code = 'Thursty Cat Makes Sipping Noises';

/* Automatically Generate Files 
 * TIP: Make Sure to turn this feature off when not developing
 * */
// new DynamoElectricMachine($route, strtolower($generate_code));
?>