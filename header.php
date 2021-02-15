<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title><?php esc_html(bloginfo( 'name' )); ?></title>
    <?php wp_head(); ?><!-- WordPress必須関数（headの最後に設定） -->
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="p-body-filter">
    </div>
    <div class="l-Main-container">
        <header class="header-container">
            <p class="header-title"><a href="<?php echo esc_url(home_url('/')); ?>">Hamburger</a></p>
            <button href="#" class="menu-btn">Menu</button>
            <?php get_search_form(); ?>
        </header>