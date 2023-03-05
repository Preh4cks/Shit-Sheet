<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_the_title(); ?></title>
    
<?php if(isset($styles)) { ?>
    <!-- Linked Style Sheets -->
    <?php for($i = 0; $i < count($styles); $i++) { ?>
<link rel="stylesheet" href='<?= $styles[$i]; ?>'> 
    <?php } ?>
<?php } ?>

    <style>
        /* Global Styling */
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            /* outline: 1px solid red; */
            font-size: 21px;
            font-family: 'Poppins', sans-serif;
        }

        /* Global Variables */
        :root {
            /* Colors */
            --black: #090909;
            --ebony: #4B5043;
            --cambridge-blue: #9BC4BC;
            --nyanza: #D3FFE9;
            --tiffany-blue: #8DDBE0;
        }
    </style>
    
<?php if(isset($custom_css_cdn)) { ?>
    <!-- Custom CSS CDN -->
    <?php for($i = 0; $i < count($custom_css_cdn); $i++) { ?>
<link rel="stylesheet" href='<?= $custom_css_cdn[$i]; ?>'> 
    <?php } ?>
<?php } ?>

<?php if(isset($custom_js_cdn)) { ?>
    <!-- Custom Javascript CDN -->
<?php   for($i = 0; $i < count($custom_js_cdn); $i++) { ?>
    <script src="<?= $custom_js_cdn[$i]; ?>"></script>
<?php   } ?>
<?php } ?>

<?php if(isset($scripts)) { ?>
    <!-- Linked JavaScript -->
    <?php for($i = 0; $i < count($scripts); $i++) { ?>
<script src='<?= $scripts[$i]; ?>'> </script>
    <?php } ?>
<?php } ?>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tomorrow:wght@500;600;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
