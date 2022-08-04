<?php

class DynamoElectricMachine {
    public function __construct($route, $generate_code) {
        if(strpos($generate_code, 't') !== false){
            $this->generate_template($route);
        }
        
        if(strpos($generate_code, 'c') !== false){
            $this->generate_controller($route);
        }
        
        if(strpos($generate_code, 'm') !== false){
            $this->generate_model($route);
        }
        
        if(strpos($generate_code, 's') !== false){
            $this->generate_style($route);
        }
        
        if(strpos($generate_code, 'p') !== false){
            $this->generate_partials($route);
        }
    }

    private function generate_template($route) {
        foreach($route as $sub_directory => $template) {
            $template_path = get_template_directory(__DIR__) . '/templates/' . $template. '.template.php';
            $template_exists = file_exists($template_path);

            if(!$template_exists) {
                $file = fopen($template_path, 'a');

                fwrite($file, "<?php\n");  
                fwrite($file, "// Template Name: ".ucfirst($template)."\n");  
                fwrite($file, "class ".ucfirst($template)."Template {\n");  
                fwrite($file, "    public function __construct() {}\n\n");  
                fwrite($file, "    protected function get_fields() {\n");  
                fwrite($file, "        ".'$fields'." = get_fields();\n");  
                fwrite($file, "        return ".'$fields'.";\n");  
                fwrite($file, "    }\n");  
                fwrite($file, "}\n\n");  
                fwrite($file, "/* Intialize the Router */\n"); 
                fwrite($file, "new Routes(".'$route'.");\n\n"); 
                fwrite($file, "/* Set uses_template to remove 404 message */\n"); 
                fwrite($file, "".'$uses_template'." = true;\n\n"); 
                fwrite($file, "?>"); 

                fclose($file);
            }
        }
    }

    private function generate_controller($route) {
        foreach($route as $sub_directory => $controller) {
            $controller_path = get_template_directory(__DIR__) . '/controllers/' . $controller. '.controller.php';
            $controller_exists = file_exists($controller_path);

            if(!$controller_exists) {
                $file = fopen($controller_path, 'a');

                fwrite($file, "<?php\n\n"); 
                fwrite($file, "class ".ucfirst($controller)."Controller extends Controller {\n"); 
                fwrite($file, "    public function __construct() {\n"); 
                fwrite($file, "        parent::__construct();\n"); 
                fwrite($file, "    }\n\n"); 
                fwrite($file, "    public function index(".'$fields'.") {\n"); 
                fwrite($file, "        ".'$fields'." = array('fields' => ".'$fields'.");\n"); 
                fwrite($file, "        ".'$header_values'." = array(\n"); 
                fwrite($file, "            'title' => 'Home',\n"); 
                fwrite($file, "            'styles' => array('global.css', '$controller.css'),\n"); 
                fwrite($file, "        );\n\n"); 
                fwrite($file, "        ".'$this->load'."('header.partials.php', ".'$header_values'.");\n"); 
                fwrite($file, "        ".'$this->load'."('$controller.partials.php', ".'$fields'.");\n"); 
                fwrite($file, "        ".'$this->load'."('footer.partials.php');\n"); 
                fwrite($file, "    }\n"); 
                fwrite($file, "}\n\n"); 
                fwrite($file, "?>"); 

                fclose($file);
            }
        }
    }

    private function generate_model($route) {
        foreach($route as $sub_directory => $model) {
            $model_path = get_template_directory(__DIR__) . '/models/' . $model. '.model.php';
            $model_exists = file_exists($model_path);

            if(!$model_exists) {
                $file = fopen($model_path, 'a');
                
                fwrite($file, "<?php\n\n");
                fwrite($file, "class ".ucfirst($model)."Model extends Model {\n");
                fwrite($file, "    public function __construct() {\n");
                fwrite($file, "        parent::__construct();\n");
                fwrite($file, "        // ".'$this->db_connect'."('127.0.0.1:3306', 'root', 'password', 'sample_data');\n");
                fwrite($file, "    }\n");
                fwrite($file, "}\n\n");
                fwrite($file, "?>");

                fclose($file);
            }
        }
    }

    private function generate_style($route) {
        foreach($route as $sub_directory => $style) {
            $style_path = get_template_directory(__DIR__) . '/includes/styles/' . $style. '.css';
            $style_exists = file_exists($style_path);

            if(!$style_exists) {
                $file = fopen($style_path, 'a');

                fwrite($file, "h1 {\n");
                fwrite($file, "    width: fit-content;\n");
                fwrite($file, "    margin: 40vh auto 0px auto;\n");
                fwrite($file, "    font-family: 'Courier New', Courier, monospace;\n");
                fwrite($file, "    font-size: 64px;\n");
                fwrite($file, "}\n\n");

                fwrite($file, "p {\n");
                fwrite($file, "    width: fit-content;\n");
                fwrite($file, "    font-family: 'Courier New', Courier, monospace;\n");
                fwrite($file, "    margin: 12px auto;\n");
                fwrite($file, "    font-size: 24px;\n");
                fwrite($file, "}\n");

                fclose($file);
            }
        }
    }

    private function generate_partials($route) {
        foreach($route as $sub_directory => $partial) {
            $partial_path = get_template_directory(__DIR__) . '/partials/' . $partial. '.partials.php';
            $partial_exists = file_exists($partial_path);

            if(!$partial_exists) {
                $file = fopen($partial_path, 'a');

                fwrite($file, "<?php while (have_rows('welcome_content')) : the_row(); ?>\n");
                fwrite($file, "<?php     if(get_row_layout() == 'header_section'): ?>\n");
                fwrite($file, "    <h1><?= get_sub_field('heading'); ?></h1>\n");
                fwrite($file, "    <p><?= get_sub_field('sub_heading'); ?></p>\n");
                fwrite($file, "<?php     endif; ?>\n");
                fwrite($file, "<?php endwhile; ?>\n");

                fclose($file);
            }
        }
    }

    
}
?>