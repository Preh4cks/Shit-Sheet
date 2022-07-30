<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php if($title > 0) { ?>
    <title><?= $title ?></title>
<?php } ?>
<?php if($styles > 0) { ?>
    <?php for($i = 0; $i < count($styles); $i++) { ?>
<link rel="stylesheet" href='<?= $styles[$i]; ?>'>
    <?php } ?>
<?php } ?>
<?php if($custom_css_cdn > 0) { ?>
    <?php for($i = 0; $i < count($custom_css_cdn); $i++) { ?>
<link rel="stylesheet" href='<?= $custom_css_cdn[$i]; ?>'>
    <?php } ?>
<?php } ?>

</head>
<body>
