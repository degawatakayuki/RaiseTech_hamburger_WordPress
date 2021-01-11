/* デバイス画面サイズ */
let md_breakpoint = 641;
let pc_breakpoint = 769;

/* 画面サイズ取得変数 */
/* let w = $(document).width(); */
let wH = $(document).height();



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
/* $(function(){ */
    //画面サイズ変更時に呼ばれる
    /* $(window).resize(function(){ */
        /* デバイス判断フラグ */
/* let device = ''; 
let device_flg = ''; */ 
        /* let w = $(window).width(); */   //画面のwidthを取得
        /* 画面サイズがタブレット以上になった場合を判定 */
/*         if(w > md_breakpoint) {
            if($(".l-sidebar").hasClass("menu-open")) {
                $(".l-sidebar").removeClass("menu-open");
                $(".p-body-filter").removeClass("filter_open");
                $(".footer_nav").removeClass("filter_open");
            }
        }
    });
}); */

$(function(){
    $(document).ready(function(){ 
    //画面の高さを取得して、変数wHに代入
    /* let wH = $(document).height(); */
    $(".p-body-filter").css("height", (wH - 48) + "px"); 
    $(".l-sidebar").css("height", wH  + "px"); 
    }); 
});

/* スマホ　→　タブレット　クラスを外す */
/*$(function(){
    //画面サイズ変更時に呼ばれる
    $(window).resize(function(){
        let w = $(window).width();   //画面のwidthを取得
        /* 画面サイズがタブレット以上になった場合を判定 */
        /*if(w > md_breakpoint) {
            if($(".l-sidebar").hasClass("menu-open")) {
                $(".l-sidebar").removeClass("menu-open");
                $(".p-body-filter").removeClass("filter_open");
                $(".footer_nav").removeClass("filter_open");
            }
        }
    });
}); */

$(function() {
    w = $(window).width(); 

    if(w < md_breakpoint) {
        device = 'sp';
    } else if( w < pc_breakpoint) {
        device = 'tablet';
    } else {
        device = 'pc';
    }
}); 

$(function(){
    //画面サイズ変更時に呼ばれる
    $(window).resize(function(){
        let w_tmp = $(window).width();   //画面のwidthを取得
        if(w_tmp < md_breakpoint) {
            location.reload();
            /* device_flg = 'sp'; */
        } else if( w_tmp < pc_breakpoint) {
            location.reload();
            /* device_flg = 'tablet'; */
        } else {
            location.reload();
            /* device_flg = 'pc'; */
        }
        /* if(device != device_flg) {
            device = device_flg;
            w = 0;
            w_tmp = 0;
            device_flg = '';
            location.reload();
        }  */
    });
});