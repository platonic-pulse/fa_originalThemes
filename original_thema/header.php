<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="<?php bloginfo(charset); ?>">
<!-- <meta name="viewport" content="width=720,initial-scale=2"> -->
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- メタエリアここから -->

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/common/favicon.ico">
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/common/webclip.png">

<!-- スタイルシート読み込みここから -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/common.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/layout.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slider-pro.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/drawer.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.default.min.css">
<!-- 170601追加　-->
<link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>" type="text/css">
<!-- ここまで170601追加　-->
<link href="https://fonts.googleapis.com/css?family=Bitter|Work+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sura" rel="stylesheet">

	<!-- スタイルシート読み込みここまで -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.11.2.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- JS読み込みここから -->
<script>
    var $172 = $.noConflict(true);
</script>
<script src="<?php bloginfo('template_directory'); ?>/js/setup.js"></script>



<script src="<?php bloginfo('template_directory'); ?>/js/jquery.sliderPro.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/iscroll.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/drawer.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/match-height.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.page-scroller-309.js"></script>
<!-- JS読み込みここまで -->

<!--[if lt IE 9]（編集不可領域）-->
<!--<script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/selectivizr.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/respond.js"></script>-->
<!-- [endif] -->

<!-- スクリプト記述ここから -->
<script>

$(document).ready(function($) {
$('#slider').fadeIn(500);
        $( '#slider' ).sliderPro({
 width:'100%',//横幅
    height:525,
    fade: true,
    touchSwipe: false,
    arrows: true,//左右の矢印
    buttons: false,//ナビゲーションボタンを出す
    breakpoints: {
      640: {
    width: 1000,//横幅
responsive:true,
      }
    }
        });
    });
</script>
<script>
$(document).ready(function() {
    $('.drawer').drawer();
    $('.drawer-menu li a').on('click', function() {
        $('.drawer').drawer('close');
    });
});
</script>

<script>
	$(document).ready(function(){
		//マウスオーバー時に残りを表示
		$('.boxgrid.caption').hover(function(){
			$(".cover", this).stop().animate({top:'0'},{queue:false,duration:300});
		}, function() {
			$(".cover", this).stop().animate({top:'78%'},{queue:false,duration:300});
		});
	});
</script>
<script>
$(function(){
　　$('.matchHeight').matchHeight();
});
</script>
<script>
$(document).ready(function(){
  $(".attendant").owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    stagePadding: 50,
 responsive: {
        0:{
        items:3
    },
    641:{
        items:5
    },
    1000:{
        items:5
    }
    }
});
});
</script>
<script>
$(document).ready(function(){
  $("#test").owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    stagePadding: 50,
 responsive: {
        0:{
        items:2
    },
    641:{
        items:4
    },
    1000:{
        items:4
    }
    }
});
});
</script>

<script>
jQuery(document).ready(function(){
$('.faq-open').each(function(){
        $(this).css("height","");
});
$('.faq-open:not()').hide();
$('.faq-btn').click(function () {
    $(this).next('.faq-open').slideToggle('slow').siblings('.faq-open').slideUp('slow');
    $(this).siblings('.faq-btn').removeClass('active');
    $(this).toggleClass('active');
});
});
</script>
<script>
// (function(window, $){
//   $(window).load(function(){
//     var $frame = $('.frame');
//     var innerHeight = $frame.get(0).contentWindow.document.body.scrollHeight;
//     var innerWidth = $frame.get(0).contentWindow.document.body.scrollWidth;
//     $frame.attr('height', innerHeight + 'px');
//     $frame.attr('width', innerWidth + 'px');
//   })
// })(window, jQuery)
</script>
<script>
$(document).ready(function(){
  $("#slideAnim").owlCarousel({
    loop:false,
    margin:0,
    nav:false,
    stagePadding: 0,
		items:1,
		autoplay: true,
		autoplaySpeed: 1000,
		dragEndSpeed: 1000
});
});
</script>
<script>

$(document).ready(function(){
  $(".voice-list").owlCarousel({
    loop:false,
    margin:50,
	nav:true,
    stagePadding: 0,
	responsive: {
        0:{
        items:1
    },
    641:{
        items:3
    },
    1000:{
        items:3
    },
    }
});
});
</script>

<meta name="google-site-verification" content="Bk3IYAM-RDF_9g-WkWObRTto1BzKxhJOQaO4Wh7iMac">
<?php if(is_mobile()): ?>
<meta name="viewport" content="width=device-width,user-scalable=1">
<?php else: ?>
<meta name="viewport" content="width=1110">
<?php endif; ?>
<!-- メタエリアここまで -->
<!-- Global site tag (gtag.js) - Google Ads: 880305439 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-880305439"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'AW-880305439');
</script>
<!-- Event snippet for コンバージョン（ボタン0117） conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
var callback = function () {
if (typeof(url) != 'undefined') {
window.location = url;
}
};
gtag('event', 'conversion', {
'send_to': 'AW-880305439/w7NyCJj1lpMBEJ_K4aMD',
'transaction_id': '',
'event_callback': callback
});
return false;
}
</script>
<?php wp_head(); ?><!-- 必須テンプレートタグ -->
</head>

<?php include_once("body-id.php") ?>
<article id="conbox">
<!-- ヘッダーここから -->
<header>
<div class="header-inner">

<div class="logo-box">
<h1><a href="<?php echo home_url(); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/common/img_logo.gif" width="250" alt="ファッションアテンダント"/></a></h1>
</div>
<!-- /logo-box -->

<div class="nav-box">
<nav>
<!-- PC用ナビここから -->
<ul id="globalnav" class="dropmenu">
<li><a href="<?php echo home_url(); ?>/#about">ABOUT</a></li>
<li><a href="<?php echo home_url(); ?>/#pickup_attendant">ATTENDANT</a></li>
<li><a href="<?php echo home_url(); ?>/#price">PRICE</a></li>
<li><a href="<?php echo home_url(); ?>/#flow">FLOW</a></li>
<li><a href="<?php echo home_url(); ?>/#faq">FAQ</a></li>
<li class="end"><a href="<?php echo home_url(); ?>/report/" target="blank">REPORT</a></li>
<li class="contact-nav"><a href="<?php echo home_url(); ?>/#contact">ORDER</a></li>
<li class="sns-nav"><a href="https://www.facebook.com/fashionattendant/" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/common/icon_hd_fb.gif" width="32" height="32" alt=""></a></li>
<li class="sns-nav"><a href="https://twitter.com/fashionattend" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/common/icon_hd_tw.gif" width="32" height="32" alt=""></a></li>
<li class="sns-nav"><a href="https://www.instagram.com/fashion_attendant/" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/common/icon_hd_ig.gif" width="32" height="32" alt=""></a></li>
</ul>

<!-- PC用ナビここまで -->

<!-- スマホ用ナビここから -->
<div class="menu">
<div class="drawer drawer--right">
	<div role="banner">
		<button type="button" class="drawer-toggle drawer-hamburger">
			<span class="sr-only">toggle navigation</span>
			<span class="drawer-hamburger-icon"></span>
		</button>
		<div class="drawer-nav" role="navigation">
			<ul class="drawer-menu">
<li><a href="<?php echo home_url(); ?>/#about">ABOUT</a></li>
<li><a href="<?php echo home_url(); ?>/#pickup_attendant">ATTENDANT</a></li>
<li><a href="<?php echo home_url(); ?>/#price">PRICE</a></li>
<li><a href="<?php echo home_url(); ?>/#flow">FLOW</a></li>
<li><a href="<?php echo home_url(); ?>/#faq">FAQ</a></li>
<li><a href="<?php echo home_url(); ?>/#contact">ORDER</a></li>
<li><a href="<?php echo home_url(); ?>/report/" target="blank">REPORT</a></li>
<li><ul>

<li class="sns-nav"><a href="https://www.facebook.com/fashionattendant/" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/common/icon_hd_fb.gif" width="32" height="32" alt=""></a></li>
<li class="sns-nav"><a href="https://twitter.com/fashionattend" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/common/icon_hd_tw.gif" width="32" height="32" alt=""></a></li>
<li class="sns-nav"><a href="https://www.instagram.com/fashion_attendant/" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/common/icon_hd_ig.gif" width="32" height="32" alt=""></a></li>
</ul></li>
			</ul>
		</div>
	</div>
</div>
</div><!-- .menu -->
<!-- スマホ用ナビここまで -->

</nav>
</div><!--/nav-box-->

<!-- ナビここから -->



<!-- ナビここまで -->

</div><!-- /header-inner -->
</header>
<!-- ヘッダーここまで -->


<!-- トップページメインイメージここから -->
<?php if(is_front_page()): ?>
<div id="img-main">

<div id="slider" class="slider-pro">
<div class="sp-slides">
<div class="sp-slide">
<img class="sp-image" src="<?php bloginfo('template_directory'); ?>/images/top/img_main01.jpg" alt=""/>
</div>
</div><!-- /sp-slides -->
</div><!-- /slider -->
<h2 class="main-catch">おしゃれな自分が見つかる<span>〜アテンダントがあなたに合ったファッションを提案します〜</span>
<span class="icon-tv"><a href="https://drive.google.com/file/d/1Ia27ycNuJ29QSzyb2uX-Wa1CPErR6IoF/view?usp=sharing" target="_blank">TBSテレビ<br class="none">Nスタ<span>でも</span><br class="none">
紹介<span>されました</span><br>
<span>詳しくはこちら</a></span>

<!-- 0210追加 -->
<a class="n-top-link" target="_blank" href="https://fashion-attendant.com/lp/" ><p>【男性必見！】<br class="sp_none">楽しく買い物しながら<br class="sp_none">男の格を上げる<br class="sp_none"><span class="n-lien-style">『銀座眉サロン<br class="sp_none">×買い物同行サービス』</span>
</p>
</a>
<!-- /.top-link -->


</h2>
</div><!-- /mainimg -->
<!-- トップページメインイメージここまで -->
<!-- 下層メインイメージここから -->
<?php else: ?>
<?php endif; ?>
<!-- 下層メインイメージここまで -->

<div id="wrapper">

<!-- パンくずここから -->
<?php if(!is_front_page()): ?>
<?php include_once("breadcrumb.php") ?>
<?php endif; ?>
<!-- パンくずここまで -->
