    <?php get_header(); ?><!-- ヘッダー読み込み -->
    <!-- 404.php -->
    <h2>Nothing to see here</h2>
    <p>We can't find this page / 404 error/</p>
    <p>You might mistake type this page URL ： <span class="error_msg"> http://<?php echo esc_html($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']); ?> </span></p>
    <p><a href="<?php echo esc_url(home_url()); ?>">HOME</a></p>
</div>  <!-- l-Main-container -->
<?php get_sidebar(); ?><!-- サイドバー読み込み -->
<?php get_footer(); ?><!-- フッター読み込み -->
<script src="./js/script.js"></script>
<?php wp_footer(); ?><!-- WordPress必須関数（bodyの最後に設定） -->
