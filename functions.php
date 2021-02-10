<?php
    function custom_theme_support() {
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',    
        ) );
        /* 管理画面から設定できるようにする設定 */
        add_theme_support( 'post-thumbnails' );     /*サムネイル追加*/
        add_theme_support( 'title-tag' );           /* タイトルタグ追加 */
       /*  add_theme_support( 'menus' );  */              /* カスタムメニュー追加 */
        register_nav_menus( array(
            'footer_nav' => esc_html__( 'footer navigation', 'hamburger' ),
            'category_nav' => esc_html__( 'category navigation', 'hamburger' ),
        ));
    }

    add_action( 'after_setup_theme', 'custom_theme_support' );  /* テーマ初期化中に実行する。 */

    //ウィジット追加
    function my_theme_widgets_init() {
        register_sidebar( array(
          'name' => 'Main Sidebar',
          'id' => 'main-sidebar',
        ) );
    }
    add_action( 'widgets_init', 'my_theme_widgets_init' );

    /* ファイルの読み込み */
    function readScript() {
        wp_enqueue_style(  'style', get_template_directory_uri() . '/css/style.css' , array(), $theme_version ); 
        wp_enqueue_style(  'style', get_template_directory_uri() . '/css/pagenavi-css.css' , array(), $theme_version ); 
        wp_enqueue_style(  'fontawesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css' , array(),'' ); 
        wp_enqueue_style(  'robot', '//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), '' );
        wp_enqueue_style(  'mplus', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap', array(), '' ); 
        wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js','jquery', $theme_version, true );
        wp_enqueue_script( 'js', get_template_directory_uri() . '/js/script.js', 'jquery', $theme_version, true );
    }
    
    add_action( 'wp_enqueue_scripts', 'readScript' );

    /* 自作関数読み込み */
    $myFunctionsList = glob(dirname(__FILE__) . '/myfunctions/*.php');
        foreach($myFunctionsList as $file) {
        require_once ($file);
    } 
    		
?>