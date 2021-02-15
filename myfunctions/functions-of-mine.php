<?php
    /* サムネイル表示・ない場合の処理 */
    function my_post_thumbnail_display() {
        if (has_post_thumbnail()) {    
            the_post_thumbnail();
        } else {
            echo '<img src="'; echo esc_url(get_template_directory_uri()); echo '/img/nophoto.jpg" alt="サムネイルがありません。">';
        }
    }

    /* 文字制限の処理 */
    function my_post_str_cnt($str, $len) {
        $str = esc_html($str);
        $len = esc_html($len);
        if(mb_strlen($str, 'UTF-8') > $len) {
	        $str= mb_substr($str, 0, $len, 'UTF-8');
	        echo $str.'...';
        }else{
	        echo $str;
        }
    }

    /* 投稿コンテンツの文字制限の処理 */
    function my_post_content_str($str, $len) {
        /* brだけ残す
        if(mb_strlen($str, 'UTF-8') > $len){
            $content= mb_substr(strip_tags($str, '<br>'), 0, $len, 'UTF-8');
            echo $content.'...';
        }else{
            echo strip_tags($str, '<br>');
        } */
        /* brとspanを残す */
        if(mb_strlen($str, 'UTF-8') > $len){
            $content= mb_substr(strip_tags($str, '<br><span>'), 0, $len, 'UTF-8');
            echo $content.'...';
        }else{
            echo strip_tags($str, '<br><span>');
        }
    }
    /* サイドバー有無の判定して表示 */
    function my_sidebar_display($id) {
        if ( is_active_sidebar($id) ) :
            dynamic_sidebar($id);
        else:
        echo '<div class="widget">';
        echo '<h2>No Widget</h2>';
        echo '<p>ウィジットは設定されていません。</p>';
        echo '</div>';
        endif;
    }