//▼別ページからの遷移時にスムーススクロール（?id=で指定）
$(window).on('load', function() {
    var url = $(location).attr('href'); //ロード後少し時間を置く
    setTimeout(function(){
        if(url.indexOf("#") != -1){
            var id = url.split("#");
            var $target = $('#' + id[id.length - 1]);
            if($target.length){
                var pos = $target.offset().top;
                $("html, body").animate({scrollTop:pos}, 500);
            }
        }
    },100);
});


$(window).load(function(){
	$('.tabbox:first').show();
	$('#tab div:first').addClass('active');
	$('#tab div').click(function() {
		$('#tab li').removeClass('active');
		$(this).addClass('active');
		$('.tabbox').hide();
		$($(this).find('a').attr('href')).fadeIn();
		return false;
	});
});


$(document).ready(function(){
 
    $("#pagetop").hide();
     // ↑ページトップボタンを非表示にする
 
    $(window).on("scroll", function() {
 
        if ($(this).scrollTop() > 100) {
            // ↑ スクロール位置が100よりも小さい場合に以下の処理をする
            $('#pagetop').fadeIn();
            // ↑ (100より小さい時は)ページトップボタンをスライドダウン
        } else {
            $('#pagetop').fadeOut();
            // ↑ それ以外の場合の場合はスライドアップする。
        }
         
    // フッター固定する
 
        scrollHeight = $(document).height(); 
        // ドキュメントの高さ
        scrollPosition = $(window).height() + $(window).scrollTop(); 
        //　ウィンドウの高さ+スクロールした高さ→　現在のトップからの位置
        footHeight = $("footer").innerHeight();
        // フッターの高さ
                 
        if ( scrollHeight - scrollPosition  <= footHeight ) {
        // 現在の下から位置が、フッターの高さの位置にはいったら
        //  ".gotop"のpositionをabsoluteに変更し、フッターの高さの位置にする        
            $("#pagetop").css({
                "position":"absolute",
		"right":"25px",
                "bottom": footHeight
            });
        } else {
        // それ以外の場合は元のcssスタイルを指定
            $("#pagetop").css({
                "position":"fixed",
                "bottom": "10px",
		"right": "25px"
		
            });
        }
    });
$(function(){
    $('a[href*=#], area[href*=#]').not(".noScroll").click(function() {
 
        var speed = 400, // ミリ秒(この値を変えるとスピードが変わる)
            href = $(this).prop("href"), //リンク先を絶対パスとして取得
            hrefPageUrl = href.split("#")[0], //リンク先を絶対パスについて、#より前のURLを取得
            currentUrl = location.href, //現在のページの絶対パスを取得
            currentUrl = currentUrl.split("#")[0]; //現在のページの絶対パスについて、#より前のURLを取得
 
        //#より前の絶対パスが、リンク先と現在のページで同じだったらスムーススクロールを実行
        if(hrefPageUrl == currentUrl){
 
            //リンク先の#からあとの値を取得
            href = href.split("#");
            href = href.pop();
            href = "#" + href;
 
            //スムースクロールの実装
            var target = $(href == "#" || href == "" ? 'html' : href),
                position = target.offset().top, //targetの位置を取得
                body = 'body',
                userAgent = window.navigator.userAgent.toLowerCase();
            if (userAgent.indexOf('msie') > -1 || userAgent.indexOf('trident') > -1 || userAgent.indexOf("firefox") > -1 ) { /*IE8.9.10.11*/
                body = 'html';
            }
            $(body).animate({
                scrollTop: position
            }, speed, 'swing', function() {
                //スムーススクロールを行ったあとに、アドレスを変更(アドレスを変えたくない場合はここを削除)
                if(href != "#top" && href !="#") {
                    location.href = href; 
                }
            });
 
            return false;
        }
 
    });
	
    // トップへスクロールしてしまう挙動を削除するために追記した修正コードです。by Nora
    jQuery( '#pickup_attendant .tabs' ).off( 'click' );

});
    // トップへスムーススクロール
    $('#pagetop a').click(function () {
        $('body,html').animate({
        scrollTop: 0
        }, 500);
        // ページのトップへ 500 のスピードでスクロールする
        return false;
     });
 
});

// フォームにテキストを入れておき、フォーカスで消す（文字色も変更）
jQuery(function(){
     jQuery(".focus").focus(function(){
          if(this.value == "キーワードを入力"){
               jQuery(this).val("").css("color","#333");
          }
     });
     jQuery(".focus").blur(function(){
          if(this.value == ""){
               jQuery(this).val("キーワードを入力").css("color","#969696");
          }
     });
});


