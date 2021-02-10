    <?php get_header(); ?><!-- ヘッダー読み込み -->
        <div class="p-MainVisual-contents">
        <div class="c-MainVisual MainImg archive">
            <h1 class="mainvisual-title">Menu:</h1>
            <p><?php echo esc_html(get_search_query()); ?></p>
        </div>
        <?php
            global $wp_query;
            $total_results = $wp_query->found_posts;
            $search_query = esc_html(get_search_query());
        ?>
        <div class="visual-content">
            <h2>「<?php echo $search_query; ?>」の検索結果<span>（<?php echo $total_results; ?>件）</span></h2>
        </div>
        <?php if($total_results > 0):
            if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="c-item-box">
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
                </div>
            </div>
            <?php endwhile;?>
        <?php endif;?>
        <?php endif; ?>
        
        <div class="pager">
            <?php wp_pagenavi(); ?>
            <?php the_posts_navigation(); ?>
        </div>
    </div> 
</div>
<?php get_sidebar(); ?><!-- サイドバー読み込み -->
<?php get_footer(); ?><!-- フッター読み込み -->