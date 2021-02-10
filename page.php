<?php get_header(); ?><!-- ヘッダー読み込み -->
    <div class="p-MainVisual-contents">
        <?php if ( have_posts() ) : ?>   <!-- 投稿表示 -->
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="c-MainVisual MainImg single">
                    <?php  my_post_thumbnail_display();  ?>     <!-- サムネイル表示の自作関数 -->
                    <h1 class="mainvisual-title single-h1"><?php the_title(); ?></h1>
                </div>
                <div class="p-single-edit">
                    <?php the_content(); ?>
                    <?php echo esc_html(get_post_meta(get_the_ID(), 'price', true)); ?>
                </div>
            <?php endwhile;?>
        <?php endif; ?>      <!-- 投稿表示 -->
    </div>  <!-- p-MainVisual-contents -->
</div>    <!-- <div class="l-Main-container">   -->
<?php get_sidebar(); ?><!-- サイドバー読み込み -->
<?php get_footer(); ?><!-- フッター読み込み -->