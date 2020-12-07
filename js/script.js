/* タブレット画面サイズ */
var md_breakpoint = 641;

/* ハンバーガーメニュー */
/* オープン */
$(function(){ 
    $(".menu-btn").on("click", function() {
        $(".l-sidebar").toggleClass("menu-open");
        $(".p-body-filter").toggleClass("filter_open");
        $(".footer_nav").toggleClass("filter_open");
    });
});
/* クローズ */
$(function(){ 
    $(".menu-btn_close").on("click", function() {
        $(".l-sidebar").toggleClass("menu-open");
        $(".p-body-filter").toggleClass("filter_open");
        $(".footer_nav").toggleClass("filter_open");
    });
});

/* スマホ　→　タブレット　クラスを外す */
$(function(){
    //画面サイズ変更時に呼ばれる
    $(window).resize(function(){
        var w = $(window).width();   //画面のwidthを取得
        /* 画面サイズがタブレット以上になった場合を判定 */
        if(w > md_breakpoint) {
            if($(".l-sidebar").hasClass("menu-open")) {
                $(".l-sidebar").removeClass("menu-open");
                $(".p-body-filter").removeClass("filter_open");
                $(".footer_nav").removeClass("filter_open");
            }
        }
    });
});

  