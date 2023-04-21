<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo($show ='charset' ) ?>">
    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body <?php body_class('example'); ?>>
<?php wp_body_open(); ?>
    <h1>I am classic editor</h1>
    <?php wp_footer(); ?>
</body>
</html>