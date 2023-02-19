<?php
class Routes {
    public function __construct($subdirectories) {
        // Initialize the object Controller
        $controller = new Controller;

        // Run the Library
        $controller->import('url.lib.php');

        // Get the subdirectory
        $route = get_subdirectory();

        // Does controller exists
        $is_controller_exists = false;

        $class = NULL;
        // Check for matching subdirectory and load the associated controller and model
        foreach($subdirectories as $subdirectory=>$string) {
            if($route == $subdirectory || $route == $subdirectory . '/') {
                // Separate Controller to method name
                $class = explode('/', $string);
                $the_controller = ucfirst($class[0]) . 'Controller';
                $controller_directory = '/controllers/' . $class[0] .'.controller.php';
                $the_model = ucfirst($class[0]) . 'Model';
                $model_directory = '/models/' . $class[0] .'.model.php';
                $is_controller_exists = true;
            }
        }

        // If there is no Subdirectory Load Error Page
        if(isset($route)) {
			$my_subdirectories = explode('/', $route);
		}
		
        if($my_subdirectories[1] == 'wp-admin' || $my_subdirectories[1] == 'wp-login.php') {
			require_once get_parent_theme_file_path('/index.php');
		} elseif($is_controller_exists == false) {
            require_once get_parent_theme_file_path('/controllers/error.controller.php');
            $error_controler = new ErrorController;
            $error_controler->index();
        } else {
            require_once get_parent_theme_file_path($controller_directory);

            if(isset($class[1])) {
                try {
                    $new_controller = new $the_controller;
                    $new_controller->{$class[1]}();
                } catch (\Error $ex) {
                    $new_controller = NULL;
                    require_once get_parent_theme_file_path('/controllers/error.controller.php');
                    $error_controler = new ErrorController;
                    $error_controler->index();
                    return 1;
                }
            } else {
                $new_controller = new $the_controller;
                $new_controller->index(array());
                
            }

            // require_once get_parent_theme_file_path($model_directory);
            // new $the_model;
        }    
    }
}
?>