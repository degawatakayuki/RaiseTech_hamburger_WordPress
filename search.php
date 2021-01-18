<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
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
            <div class="c-MainVisual MainImg archive">
                <h1 class="mainvisual-title">Search:</h1>
                <p>チーズバーガー</p>
            </div>
            <div class="visual-content">
                <h2>小見出しが入ります</h2>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
            <div class="c-item-box">
                <div class="item-img"></div>
                <div class="item">
                    <h3 class="item-title">チーズバーガー</h3>
                    <h4 class="item-topic">小見出しが入ります</h4>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <a href="single.html" class="item-btn">詳しく見る</a>
                </div>
            </div>
            <div class="c-item-box">
                <div class="item-img"></div>
                <div class="item">
                    <h3 class="item-title">ダブルチーズバーガー</h3>
                    <h4 class="item-topic">小見出しが入ります</h4>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <a href="single.html" class="item-btn">詳しく見る</a>
                </div>
            </div>
            <div class="c-item-box">
                <div class="item-img"></div>
                <div class="item">
                    <h3 class="item-title">スペシャルバーガー</h3>
                    <h4 class="item-topic">小見出しが入ります</h4>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <a href="single.html" class="item-btn">詳しく見る</a>
                </div>
            </div>
            <div class="c-item-box">
                <div class="item-img"></div>
                <div class="item">
                    <h3 class="item-title">スペシャルバーガー</h3>
                    <h4 class="item-topic">小見出しが入ります</h4>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <a href="single.html " class="item-btn">詳しく見る</a>
                </div>
            </div>
            <div class="pager">
                <a href="">prev</a>
                <a href="">next</a>
            </div>
        </div> 
         
    </div>
    <?php get_sidebar(); ?><!-- サイドバー読み込み -->
    <?php get_footer(); ?><!-- フッター読み込み -->
    <script src="./js/script.js"></script>
    <?php wp_footer(); ?><!-- WordPress必須関数（bodyの最後に設定） -->
    <script src="./js/script.js"></script>
</body>
</html>