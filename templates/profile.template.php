<?php
// Template Name: Profile
class ProfileTemplate {
    public function __construct() {}

    protected function get_fields() {
        $fields = get_fields();
        return $fields;
    }
}

/* Intialize the Router */
new Routes($route);

/* Set uses_template to remove 404 message */
$uses_template = true;

?>