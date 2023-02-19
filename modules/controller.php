<?php

class Controller {
	private static $root_dir;

	public function __construct() {
		self::$root_dir = get_template_directory(__DIR__);
	}
	
	/* Get the Extension Name */
	private function get_extension_name($file_name) {
		$file_names = explode('.', $file_name);
		$extension_name = $file_names[1];
		return $extension_name;
	}

	/* Load the Files */
	protected function load($file_name, $my_variables = array()) {
		$extension_name = self::get_extension_name($file_name);
		
		if($extension_name == 'partials') {
			self::load_with_variables(self::$root_dir . '/partials/' . $file_name, $my_variables);
		} elseif($extenstion_name = 'templates'){ 
			self::load_with_variables(self::$root_dir . '/templates/' . $file_name, $my_variables);
		}
	}

	/* Import Libraries */
	public function import($file_name) {
		$extension_name = self::get_extension_name($file_name);

		if($extenstion_name = 'templates') {
			include(self::$root_dir . '/modules/lib/' . $file_name);
		}
	}
	
	/* Includes PHP file with variables */
	private function load_with_variables($filePath, $variables = array()) {
		$output = NULL;
		
		// Change Directory
		foreach($variables as $variable => $values) {
			$include_types = array('styles', 'scripts');
			$array = array();

			if(in_array($variable, $include_types)) {
				foreach($values as $value) {
					array_push($array, get_template_directory_uri() . '/includes/' . $variable . '/' . $value);
				}

				$variables[$variable] = $array;
			}
		}

		if(file_exists($filePath)) {
			extract($variables);
			ob_start();
			
			include $filePath;
			$output = ob_get_clean();
		}

		print $output;
	}
}
?>