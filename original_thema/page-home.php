<?php
/*
Template Name: トップページ
*/
?>

<?php get_header(); ?>

<!--サービス-->
<section id="about" class="bg-normal">
<div class="contents">
<h2 class="ttl-common01">ABOUT<span>ファッションアテンダントについて</span></h2>
<h3 class="ttl-common02 centerOn">ファッションアテンダントは、オシャレな人があなたに似合う服選びをサポートする買い物同行サービスです。</h3>
<div class="slide-anim">
	<div id="slideAnim" class="owl-carousel">
		<div class="slide-content">
			<span>
					<img src="<?php bloginfo('template_directory'); ?>/images/top/slide-anim_1.jpg" alt="①まずは気になるアテンダントとコースを選んで、申し込み！" class="txt-anim">
			</span>
		</div>
		<div class="slide-content">
			<span>
				<img src="<?php bloginfo('template_directory'); ?>/images/top/slide-anim_2.jpg" alt="②  いきなり二人でのやり取りが不安でも大丈夫！最初はファッションアテンダントも入り、LINEグループを作ってやり取り♪" class="txt-anim">
			</span>
		</div>
		<div class="slide-content">
			<span>
					<img src="<?php bloginfo('template_directory'); ?>/images/top/slide-anim_3.jpg" alt="③ 待ち合わせの日程をLINEで相談♪要望も何でも質問してみよう！※日程が決まったら『お支払いのご案内』を登録メールアドレスにお送りいたします。" class="txt-anim">
			</span>
		</div>
		<div class="slide-content">
			<span>
					<img src="<?php bloginfo('template_directory'); ?>/images/top/slide-anim_4.jpg" alt="">
			</span>
		</div>
		<div class="slide-content">
			<span>
				<img src="<?php bloginfo('template_directory'); ?>/images/top/slide-anim_5.jpg" alt="⑤ アテンダントが貴方に似合う服をチョイス！" class="txt-anim">
			</span>
		</div>
		<div class="slide-content">
			<span>
					<img src="<?php bloginfo('template_directory'); ?>/images/top/slide-anim_6.jpg" alt="⑥ 昨日よりもオシャレな貴方に変身♪" class="txt-anim">
			</span>
		</div>
		<div class="slide-content">
			<a href="#pickup_attendant" id="slideAnimLink"><img src="<?php bloginfo('template_directory'); ?>/images/top/slide-anim_7.jpg" alt="まずは、気になるアテンダントがいるか見てみよう！ここをクリック！"></a>
			</div>
	</div>
</div>
</div><!--/contents-->
</section>
<!--サービス　ここまで-->



<!--サービス-->
<section class="bg-color01">
<h2 class="ttl-common01">MEDIA<span>現在多数のメディアに取り上げていただいております</span></h2>
<div class="contents">
<ul id="test" class="owl-carousel">
 <li><a href="http://withnews.jp/article/f0141004000qq000000000000000W0081001qq000010921A" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/top/ph_media06.jpg" alt=""><h3>withnews（ウィズニュース）</h3></a></li>
 <li><a href="https://next.rikunabi.com/journal/20171218_D1/" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/top/ph_media07.png" alt=""><h3>リクナビNEXTジャーナル</h3></a></li>
 <li><a href="http://startuptimes.jp/2018/08/01/91359/" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/top/ph_media08.png" alt=""><h3>Startup Times</h3></a></li>
 <li><a href="https://www.hatalike.jp/more/article/990/" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/top/ph_media09.png" alt=""><h3>はたらいくノート</h3></a></li>
 <li><a href="http://delaymania.com/201411/life/fashion-attendant-report/" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/top/ph_media01.jpg" alt=""><h3>delaymania</h3></a></li>
 <li><a href="http://www.sankeibiz.jp/business/news/141201/bsl1412010500002-n3.htm" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/top/ph_media02.jpg" alt=""><h3>SankeiBiz（サンケイビズ）</h3></a></li>
 <li><a href="http://datazoo.jp/tv/%E3%81%8A%E9%A1%98%E3%81%84%EF%BC%81%E3%83%A9%E3%83%B3%E3%82%AD%E3%83%B3%E3%82%B0/845570" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/top/ph_media03.jpg" alt=""><h3>お願い！ランキング</h3></a></li>
 <li><a href="http://mainichi.jp/articles/20170314/ddm/013/100/026000c" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/top/ph_media04.jpg" alt=""><h3>毎日新聞<br>衣・ＦＡＳＨＩＯＮ</h3></a></li>
 <li><a href="http://rn2btt.radionikkei.jp/webservice/000762.html" target="blank"><img src="<?php bloginfo('template_directory'); ?>/images/top/ph_media05.jpg" alt=""><h3>BIZ&amp;TECH Terminal</h3></a></li>
</ul>
</div>
</section>
<!--サービス　ここまで-->
<div class="contents">
<?php echo do_shortcode('[showwhatsnew]'); ?>
<div class="btn_common_top"><a href="/news/">もっと見る</a></div>
</div>
<!--サービス-->
<!-- section class="bg-color01">
<h2 class="ttl-common01">BEFORE AFTER<span>ビフォーアフター集</span></h2>
<div class="contents">
<ul id="test" class="owl-carousel">
  <li><img src="<?php //bloginfo('template_directory'); ?>/images/top/ph_ba01.jpg" height="" alt=""></li>
  <li><img src="<?php //bloginfo('template_directory'); ?>/images/top/ph_ba01.jpg" height="" alt=""></li>
  <li><img src="<?php //bloginfo('template_directory'); ?>/images/top/ph_ba01.jpg" height="" alt=""></li>
  <li><img src="<?php //bloginfo('template_directory'); ?>/images/top/ph_ba01.jpg" height="" alt=""></li>
  <li><img src="<?php //bloginfo('template_directory'); ?>/images/top/ph_ba01.jpg" height="" alt=""></li>
  <li><img src="<?php //bloginfo('template_directory'); ?>/images/top/ph_ba01.jpg" height="" alt=""></li>
</ul>
</div>
</section -->
<!--サービス　ここまで-->


<section id="pickup_attendant" class="bg-normal">
<h2 class="ttl-common01">PICKUP ATTENDANT<span>ピックアップアテンダント</span></h2>
<div class="btn-attendant"><a href="http://fashion-attendant.com/old/item/" target="blank">その他アテンダント一覧</a></div>
<div class="contents">
<div id="tab" class="attendant owl-carousel mb20">

<?php query_posts('post_type=attendant&showposts=-1&orderby=rand'); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php
if (isFirst()) { ?>
<div class="selected">
<?php }
else { ?>
<div>
<?php }
?>
<a class="tabs noScroll" href="#<?php the_ID(); ?>"><?php if ( has_post_thumbnail() ): // サムネイルを持っているとき ?>
<?php
$title= get_the_title();
the_post_thumbnail(medium,
array( 'alt' =>$title,'class' => 'img-fit-cover'));
?>
<?php else: // サムネイルを持っていないとき ?>
<img class="img-fit-cover" src="<?php bloginfo('template_directory'); ?>/images/common/img_no.jpg" alt="写真無し">
<?php endif; ?>
</a></div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
<?php endif; ?>
</div>
</div>

<div class="contents">
<?php query_posts('post_type=attendant&showposts=-1&orderby=rand'); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div id="<?php the_ID(); ?>" class="tabbox">
<div class="tabbox-inner">
<div class="clearfix">
<div class="top-atendant-ph">
<?php if ( has_post_thumbnail() ): // サムネイルを持っているとき ?>
<?php
$title= get_the_title();
the_post_thumbnail(large,
array( 'alt' =>$title,'class' => 'img-fit-cover'));
?>
<?php else: // サムネイルを持っていないとき ?>
<img class="img-fit-cover" src="<?php bloginfo('template_directory'); ?>/images/common/img_no.jpg" alt="写真無し">
<?php endif; ?>
</div>
<div class="top-atendant-txt">
<!-- h3>キャッチコピーがはいります</h3 -->
<h4><?php the_title(); ?></h4>
<?php the_content(); ?>
</div>
</div>
</div>
<div class="btn_common_top"><a href="?postID=<?php the_ID(); ?>#contact">このアテンダントに依頼</a></div>
<!-- #tab1 --></div>

<?php endwhile; ?>
<?php wp_reset_query(); ?>
<?php endif; ?>
<!-- #detail --></div>
</section>





<!--サービス-->
<section id="price" class="bg-color01">
<div class="contents">
<h2 class="ttl-common01">PRICE<span>ご利用料金</span></h2>
<ul class="plan-list01">
<li>
<h3><img src="<?php bloginfo('template_directory'); ?>/images/top/img_course03.gif" alt="1時間コース 7,500円 (税別)"></h3>
<p><img src="<?php bloginfo('template_directory'); ?>/images/top/icon_about10min.png" alt="10分" class="icon_min">&nbsp;チャットヒアリング</p>
<p><img src="<?php bloginfo('template_directory'); ?>/images/top/icon_about50min.png" alt="50分" class="icon_min">&nbsp;ショッピング</p>
<small>※ショッピングは必ず何か買わないといけないわけでは有りません</small>
</li>

<li>
<h3><img src="<?php bloginfo('template_directory'); ?>/images/top/img_course02.gif" alt="2時間コース 10,000円 (税別)"></h3>
<p><img src="<?php bloginfo('template_directory'); ?>/images/top/icon_about10min.png" alt="約10分"  class="icon_min">&nbsp;チャットヒアリング</p>
<p><img src="<?php bloginfo('template_directory'); ?>/images/top/icon_about20min.png" alt="約20分"  class="icon_min">&nbsp;お茶タイム（任意）</p>
<p><img src="<?php bloginfo('template_directory'); ?>/images/top/icon_about90min.png" alt="約90分"  class="icon_min">&nbsp;ショッピング</p>
</li>
<li>
<h3><img src="<?php bloginfo('template_directory'); ?>/images/top/img_course01.gif" alt="3時間コース 15,000円 (税別)"></h3>
<p><img src="<?php bloginfo('template_directory'); ?>/images/top/icon_about10min.png" alt="約10分"  class="icon_min">&nbsp;チャットヒアリング</p>
<p><img src="<?php bloginfo('template_directory'); ?>/images/top/icon_about20min.png" alt="約20分"  class="icon_min">&nbsp;お茶タイム（任意）</p>
<p><img src="<?php bloginfo('template_directory'); ?>/images/top/icon_about150min.png" alt="約150分"  class="icon_min">&nbsp;ショッピング</p>
</li>

<li class="end">
<h3><img src="<?php bloginfo('template_directory'); ?>/images/top/img_course04.gif" alt="6時間コース 30,000円 (税別)"></h3>
<p><img src="<?php bloginfo('template_directory'); ?>/images/top/icon_about20min.png" alt="約20分"  class="icon_min">&nbsp;チャットヒアリング</p>
<p><img src="<?php bloginfo('template_directory'); ?>/images/top/icon_about30min_2.png" alt="約30分×2"  class="icon_min">&nbsp;お茶タイム（任意）</p>
<p><img src="<?php bloginfo('template_directory'); ?>/images/top/icon_about280min.png" alt="約280分"  class="icon_min">&nbsp;ショッピング</p>
<img src="<?php bloginfo('template_directory'); ?>/images/top/icon_new.png" alt="NEW" class="icon_new">
<small>※お茶タイムをランチタイム60分にするなどカスタム可能</small>
</li>

</ul>
<ul class="plan-list02">
<li>
<h3><img src="<?php bloginfo('template_directory'); ?>/images/top/img_course05.gif" alt="断捨離コース 20,000円 (税別・移動時間フィー込み)"></h3>
<div>
		<p><img src="<?php bloginfo('template_directory'); ?>/images/top/icon_about10min.png" alt="約10分"  class="icon_min">&nbsp;チャットヒアリング</p>
		<p><img src="<?php bloginfo('template_directory'); ?>/images/top/icon_about170min.png" alt="約170分"  class="icon_min">&nbsp;自宅訪問 断捨離アドバイス&コーディネートレクチャー</p>
	<p>個別カスタム、細かい要望等につきましては右下チャット窓から質問、相談ください。<br><small>※別途アテンダントさん自宅最寄り駅0往復交通費（ガソリン代）のご負担お願いします。</small></p>
</div>
<img src="<?php bloginfo('template_directory'); ?>/images/top/icon_new.png" alt="NEW" class="icon_new">
</li>
</ul>
<p class="text-coution"> ※基本的にはお一人様でのご利用になりますが、複数人でご利用希望の場合（ご夫婦、親子で利用等）は問い合わせ欄にその旨記載ください。</p>
<p class="text-coution"> ※友人同士でのご利用で2人に別々で提案してほしい！場合はオプションで＋5,000円いただくことになります。（例　友人と2人で3時間コース申し込み→利用料20,000円）</p>
<!-- p class="text-coution">※家族、配偶者、婚約者、恋人、兄弟に限り、1人につき＋5000円のオプション料金でアテンダントさんがＯＫであれば同伴可能とします<br>
（ノウハウを教えることになるので無料での同行はＮＧとさせていただいています）</p -->

<!-- 0210追加 -->
<a class="n-bunner-position" target="_blank" href="https://fashion-attendant.com/lp/">
  <img src="<?php bloginfo('template_directory'); ?>/images/top/n-lp-bunner.jpeg" alt="">
</a>
<!-- /.n-bunner-position -->


</div><!--/contents-->
</section>
<!--サービス　ここまで-->


<!--サービス-->
<section id="flow" class="bg-normal">
<div class="contents">
<h2 class="ttl-common01">FLOW<span>ご利用の流れ</span></h2>
<ul class="top-flow-list">
<li>
<p class="top-flow-ph"><img src="<?php bloginfo('template_directory'); ?>/images/top/ph_flow01.png" alt=""></p>
<h3>お申し込み</h3>
<p class="top-flow-txt">お好みのアテンダントとコースを選択し、お申込みフォームよりその他必要事項を記入して送信してください。</p>
</li>
<li>
<p class="top-flow-ph"><img src="<?php bloginfo('template_directory'); ?>/images/top/ph_flow02.png" alt=""></p>
<h3>確認連絡</h3>
<p class="top-flow-txt">ファッションアテンダントよりオーダー頂いた情報が正しいかどうか確認の連絡をさせていただきます。</p>
</li>
<li>
<p class="top-flow-ph"><img src="<?php bloginfo('template_directory'); ?>/images/top/ph_flow03.png" alt=""></p>
<h3>マッチング</h3>
<p class="top-flow-txt">ファッションアテンダントが間に入り申込者とご指名いただいたアテンダントさん３者間でLINEグループを作ります。</p>
</li>
<li>
<p class="top-flow-ph"><img src="<?php bloginfo('template_directory'); ?>/images/top/ph_flow04.png" alt=""></p>
<h3>日程調整</h3>
<p class="top-flow-txt">アテンダントさんと日時、場所、要望など当日の詳細をLINE上ですり合わせていきます。</p>
</li>
<li>
<p class="top-flow-ph"><img src="<?php bloginfo('template_directory'); ?>/images/top/ph_flow05.png" alt=""></p>
<h3>お支払い</h3>
<p class="top-flow-txt">日程がLINE上の会話で確定しましたら事務局より『お支払のご案内』を登録メールアドレスにお送ります。日程が双方合意してから3日位内に指定口座へのご入金お願いします。</p>
</li>
<li>
<p class="top-flow-ph"><img src="<?php bloginfo('template_directory'); ?>/images/top/ph_flow06.png" alt=""></p>
<h3>お買い物</h3>
<p class="top-flow-txt">決定した日時でご指定のアテンダントと待ち合わせの場所より実際のサービスをご利用頂きます。</p>
</li>
</ul>
</div><!--/contents-->
</section>
<!--サービス　ここまで-->
<!--ユーザーボイス-->

<?php
$args = array(
	'post_type' => 'voice',
	'posts_per_page' => -1,
  );
  $the_query = new WP_Query( $args );?>
  <?php if ( $the_query->have_posts() ) :?>
  <section id="voice">
	<div class="contents">
		<h2 class="ttl-common01">USER VOICE<span>利用者の声</span></h2>
		<h3 class="ttl-common02 centerOn">サービス後に利用者さんへインタビューして正直な感想を語ってもらってます。</h3>
		<ul class="voice-list owl-carousel">
 		<?php  while( $the_query->have_posts()):$the_query->the_post(); ?>
		 <li>
		 <div class="movie-wrap">
					<?php
						the_field('movieCode');
					?>
				</div>
				<?php
						$atLink = get_field('attendantId');
					?>
				<div class="btn_common01"><a href="<?php the_field('attendantId'); ?>">このアテンダントの詳細を見る</a></div>
		</li>
		<?php endwhile;?>
		</ul>
	</div>
</section>
	<?php  wp_reset_postdata(); endif;?>
<!--ユーザーボイス-->
<?php
$args = array(
	'post_type' => 'interview',
	'posts_per_page' => -1,
  );
  $the_query = new WP_Query( $args );?>
  <?php if ( $the_query->have_posts() ) :?>
  <section id="voice">
	<div class="contents">
		<h2 class="ttl-common01">ATTENDANT INTERVIEW<span>アテンダント インタビュー</span></h2>
		<h3 class="ttl-common02 centerOn">所属アテンダントの声をお届けします。</h3>
		<ul class="voice-list owl-carousel">

 <?php  while( $the_query->have_posts()):$the_query->the_post(); ?>
 <li>
				<div class="movie-wrap">
					<?php
						the_field('interviewMovieCode');
					?>
				</div>
				<div class="btn_common01"><a href="<?php the_field('interviewAttendantId'); ?>">このアテンダントの詳細を見る</a></div>
			</li>
	<?php endwhile;?>
	</ul>
	</div>
</section>
	<?php  wp_reset_postdata(); endif;?>

<!--ユーザーボイス-->
<!--ユーザーボイス-->

<!--サービス-->
<section id="faq" class="bg-color01">
<div class="contents">
<h2 class="ttl-common01">FAQ<span>よくある質問</span></h2>
<?php query_posts('post_type=faq&showposts=-1&orderby=order&order=desc'); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<h3 class="top-faq-ques faq-btn"><?php the_title(); ?></h3>
<div class="top-faq-ance faq-open"><?php the_content(); ?></div>
<?php endwhile; ?>
<?php endif; ?>

</div><!--/contents-->
</section>
<!--サービス　ここまで-->

<!--お問い合わせ-->
<section id="contact" class="bg-normal">
<div id="contact" class="contents">
<h2 class="ttl-common01">ORDER<span>ご依頼フォーム</span></h2>
<article>
<?php echo do_shortcode('[contact-form-7 id="5" title="依頼フォーム"]'); ?>
</article>
</div><!--/contents-->
</section>
<!--お問い合わせ　ここまで-->



<?php get_footer(); ?>