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
        <div class="p-MainVisual-contents">
            <div class="c-MainVisual MainImg index">
                <h1 class="mainvisual-title">ダミーサイト</h1>
            </div>
        </div>
        <div class="p-Maincontents">
            <section>
                <a href="<?php echo get_category_link(get_cat_ID('Take Out')); ?>" class="takeOut c-mainContent-card">
                    <h2>Take Out</h2>
                    <div class="content">
                        <h3>小見出しが入ります</h3>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                    <div class="content">
                        <h3>小見出しが入ります</h3>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                </a>
            </section>
            <section>
                <a href="<?php echo get_category_link(get_cat_ID('Eat In')); ?>" class="eatIn c-mainContent-card">
                    <h2>Eat In</h2>
                    <div class="content">
                        <h3>小見出しが入ります</h3>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                    <div class="content">
                    <h3>小見出しが入ります</h3>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                </a>
            </section>
        </div>
         <div class="p-accessMap"> 
            <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25920.016557032577!2d139.69169076968518!3d35.70156668251571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ce1d57598f5%3A0x99a274835327fd96!2z5paw5a6_5Yy656uL5oi45bGx55Sf5rav5a2m57-S6aSo!5e0!3m2!1sja!2sjp!4v1607249182672!5m2!1sja!2sjp" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="map-filter">
                <h3>見出しが入ります</h3>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
         </div>
    </div>
    <?php get_sidebar(); ?><!-- サイドバー読み込み -->
    <?php get_footer(); ?><!-- フッター読み込み -->
    <script src="js/script.js"></script>
    <?php wp_footer(); ?><!-- WordPress必須関数（bodyの最後に設定） -->
</body>
</html>