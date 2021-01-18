<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet"> -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?><!-- WordPress必須関数（headの最後に設定） -->
</head>
<body>
    <div class="p-body-filter">
    </div>
    <div class="l-Main-container">
        <?php get_header(); ?><!-- ヘッダー読み込み -->
        
        <!-- 404.php -->
        <h2>Nothing to see here</h2>
        <p>We can't find this page / 404 error/</p>
        <p>You might mistake type this page URL ： <span class="error_msg"> http://<?php echo esc_html($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']); ?> </span></p>
        <p><a href="<?php echo home_url(); ?>">HOME</a></p>
    </div>
    <?php get_sidebar(); ?><!-- サイドバー読み込み -->
    <?php get_footer(); ?><!-- フッター読み込み -->
    <script src="./js/script.js"></script>
    <?php wp_footer(); ?><!-- WordPress必須関数（bodyの最後に設定） -->
</body>
</html>