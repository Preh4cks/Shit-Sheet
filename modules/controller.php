<?php

class Controller {
	function __construct() { }
	
	/* Get the Extension Name */
	function get_extension_name($file_name) {
		$file_names = explode('.', $file_name);
		$extension_name = $file_names[1];
		return $extension_name;
	}

	/* Load the Files */
	function load($file_name, $my_variables = array()) {
		$extension_name = $this->get_extension_name($file_name);
		$dir = get_template_directory(__DIR__);
		
		if($extension_name == 'partials') {
			$this->includeWithVariables($dir . '/views/partials/' . $file_name, $my_variables);
		} elseif($extenstion_name = 'templates'){ 
			$this->includeWithVariables($dir . '/views/templates/' . $file_name, $my_variables);
		}
	}

	/* Import Libraries */
	function import($file_name) {
		$extension_name = $this->get_extension_name($file_name);
		$dir = get_template_directory(__DIR__);

		if($extenstion_name = 'templates') {
			include($dir . '/modules/lib/' . $file_name);
		}
	}
	
	function includeWithVariables($filePath, $variables = array()) {
		$output = NULL;
		
		// Change Style URL
		foreach($variables as $variable=>$styles) {
			if($variable == 'styles' || $variable == 'style') {
				$new_styles = array();
				
				foreach($styles as $style) {
					array_push($new_styles, get_template_directory_uri() . '/includes/styles/' . $style);
				}
				
				$variables['style'] = $new_styles;
				$variables['styles'] = $new_styles;
			} elseif($variable == 'images' || $variable == 'image') {
				$new_images = array();
				
				foreach($images as $image) {
					array_push($new_images, get_template_directory_uri() . '/includes/images/' . $image);
				}
				
				$variables['image'] = $new_images;
				$variables['images'] = $new_images;
			} elseif($variable == 'scripts' || $variable == 'script') {
				$new_scripts = array();
				
				foreach($scripts as $script) {
					array_push($new_scripts, get_template_directory_uri() . '/includes/scripts/' . $script);
				}
				
				$variables['script'] = $new_scripts;
				$variables['scripts'] = $new_scripts;
			}
		}

		if(file_exists($filePath)){
			// Extract the variables to a local namespace
			extract($variables);

			// Start output buffering
			ob_start();

			// Include the template file
			include $filePath;

			// End buffering and return its contents
			$output = ob_get_clean();
		}

		print $output;
	}
}

?>