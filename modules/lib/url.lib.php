<?php
	/* Get subdirectory */
	function get_subdirectory() {
		$full_url = home_url( $_SERVER['REQUEST_URI'] );
		$route = parse_url($full_url, PHP_URL_PATH);
		return $route;
	}
?>