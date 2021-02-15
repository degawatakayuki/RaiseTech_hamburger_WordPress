    <?php get_header(); ?><!-- ヘッダー読み込み -->
    <div class="p-MainVisual-contents">
        <div class="c-MainVisual MainImg archive">
            <h1 class="mainvisual-title">Menu:</h1>
            <p>チーズバーガー</p>
        </div>
        <div class="visual-content">
            <h2>小見出しが入ります</h2>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" class="c-item-box" <?php post_class(); ?>>
                <div class="item-img">
                    <?php my_post_thumbnail_display(); ?>   <!-- サムネイル表示自作関数 -->
                </div>
                <div class="item">
                    <h3 class="item-title">
                        <?php my_post_str_cnt($post->post_title, 15); ?>  <!-- 文字制限自作関数 -->
                    </h3>
                    <h4 class="item-topic">
                        <?php my_post_content_str($post->post_content, 40); ?>  <!-- コンテンツ文字制限自作関数 -->
                    </h4>
                    <p>
                        <?php my_post_str_cnt($post->post_excerpt, 15); ?>  <!-- 文字制限自作関数 -->
                    </p>
                    <a href="<?php echo esc_url(get_page_link()); ?>" class="item-btn">詳しく見る</a>
                </div>  <!-- item -->
            </div>  <!-- c-item-box -->
            <?php endwhile;?>
        <?php endif; ?>
        <div class="pager"> 
            <?php wp_pagenavi(); ?>      <!-- WP-PageNaviプラグイン --> 
        </div>
    </div> <!-- p-MainVisual-contents -->
</div>  <!-- l-Main-container -->
<?php get_sidebar(); ?><!-- サイドバー読み込み -->
<?php get_footer(); ?><!-- フッター読み込み -->
<script src="./js/script.js"></script>
<?php wp_footer(); ?><!-- WordPress必須関数（bodyの最後に設定） -->