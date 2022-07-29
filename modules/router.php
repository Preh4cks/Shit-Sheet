<?php
class Routes {
    function __construct($subdirectories) {
        // Initialize the object Controller
        $controller = new Controller;

        // Run the Library
        $controller->import('url.lib.php');

        // Get the subdirectory
        $route = get_subdirectory();

        // Does controller exists
        $is_controller_exists = false;

        // Check for matching subdirectory and load the associated controller and model
        foreach($subdirectories as $subdirectory=>$class) {
            if($route == $subdirectory) {
                $the_controller = ucfirst($class) . 'Controller';
                $controller_directory = '/controllers/' . $class .'.controller.php';
                $the_model = ucfirst($class) . 'Model';
                $model_directory = '/models/' . $class .'.model.php';
                $is_controller_exists = true;
            }
        }
        
        // If there is no Subdirectory Load Error Page
        if($is_controller_exists == false) {
            require_once get_parent_theme_file_path('/controllers/error.controller.php');
            new ErrorController;
        } else {
            require_once get_parent_theme_file_path($controller_directory);
            require_once get_parent_theme_file_path($model_directory);
            new $the_controller;
            new $the_model;
        }    
    }
}
?>