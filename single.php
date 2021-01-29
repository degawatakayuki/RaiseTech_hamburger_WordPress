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
            <?php if ( have_posts() ) : ?>   <!-- 投稿表示 -->
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="c-MainVisual MainImg single">
                <?php  my_post_thumbnail_display();  ?>
                <h1 class="mainvisual-title single-h1"><?php the_title(); ?></h1>
            </div>
            <div class="p-single-edit">
                <?php the_content(); ?>
            </div>
               
            <?php endwhile;?>
            <?php endif; ?>      <!-- 投稿表示 -->
        </div>
    </div>    <!-- <div class="l-Main-container">   
    

         <div class="p-MainVisual-contents">
            <div class="c-MainVisual MainImg single">
                <h1 class="mainvisual-title single-h1">h1 チーズバーガー</h1>
            </div>
            <div class="visual-content u-mb-0">          
                <h2 class="single-h2">見出しh2</h2>
                <p class="single-p">Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                <h3 class="single-h3">見出しh3</h3>
                <h4 class="single-h4">見出しh4</h4>
                <h5 class="single-h5">見出しh5</h5>
                <h6 class="single-h6">見出しh6</h6>
                <div class="c-quotebox">
                    <p class="blockquote">Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
                    <p class="quote_link">出典元：<a href="">○○○○○○○○○○○○</a></p>
                </div>
            </div>
            <div class="p-single-main">
                <div class="single-MainVisual"><img src="img/single_foods01.jpg" alt=""></div>
                <ul class="single_contents">
                    <li class="single_item">
                        <div class="content-img"><img src="img/single_foods01.jpg" alt=""></div>
                        <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                    </li>
                    <li class="single_item">
                        <div class="single_item">
                            <div class="content-img"><img src="img/single_foods01.jpg" alt=""></div>
                            <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                        </div>
                    </li>
                </ul>
                <div class="menu-img"><img src="img/single_foods02.jpg" alt=""></div>
                <ul class="menu-imgList">
                    <li><img src="img/single_foods02.jpg" alt=""></li>
                    <li><img src="img/single_foods02.jpg" alt=""></li>
                    <li><img src="img/single_foods02.jpg" alt=""></li>
                    <li><img src="img/single_foods02.jpg" alt=""></li>
                    <li><img src="img/single_foods02.jpg" alt=""></li>
                    <li><img src="img/single_foods02.jpg" alt=""></li>
                </ul>
                <div class="single-list">
                    <ol class="ol-list">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ol>
                    <ol class="ol-list u-pl-50">
                        <li>リスト2リスト2リスト2</li>
                        <li>リスト2リスト2リスト2</li>
                    </ol>
                    <ol class="ol-list">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ol>
                    <ul class="ul-list">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ul>
                    <ul class="ul-list u-pl-50">
                        <li>リスト2リスト2リスト2</li>
                        <li>リスト2リスト2リスト2</li>
                    </ul>
                    <ul class="ul-list">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ul>
                </div>
                <div class="html-tag u-mb-30">
                    <pre>
                        <code>
&lt;html>
    &lt;head>
    &lt;/head>
    &lt;body>
    &lt;/body>
&lt;/html>
                        </code>
                    </pre>
                </div>
                <div class="table-area">
                    <table class="single-table">
                        <tr><td>テーブル</td><td>テーブル</td></tr>
                        <tr><td>テーブル</td><td>テーブル</td></tr>
                        <tr><td>テーブル</td><td>テーブル</td></tr>
                        <tr><td>テーブル</td><td>テーブル</td></tr>
                    </table>
                </div>
                <div class="button">
                    <button class="single-btn">ボタン</button>
                </div>
                <div class="bold-area">
                    <p class="single-bold">boldboldboldboldboldboldboldbold</p>
                </div>
            </div> 
        </div>    
    </div> -->
    <?php get_sidebar(); ?><!-- サイドバー読み込み -->
    <?php get_footer(); ?><!-- フッター読み込み -->
    <script src="./js/script.js"></script>
    <?php wp_footer(); ?><!-- WordPress必須関数（bodyの最後に設定） -->
    <script src="./js/script.js"></script>
</body>
</html>