<?php get_header(); ?>

<section>
<div class="contents">
<article>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="editor-box mb50"><?php the_content(); ?></div>
<?php endwhile; endif; ?>
</article>
</div><!--/contents-->
</section>


<!--ニュース-->
<!--
<section class="bg-top-news">
<div class="contents">
<h2 class="ttl01">NEWS</h2>
<article>
<ul class="top-news-list clearfix">
<?php query_posts( 'posts_per_page=4&cat=1' ); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<li class="matchHeight">
<a href="<?php the_permalink(); ?>">
<p><img src="<?php bloginfo('template_directory'); ?>/images/top/ph_news01.jpg" width="230" height="200" alt=""/></p>
<p>
<span class="news-txt-date"><?php the_time('Y/m/d'); ?></span>
<span class="news-txt-category">
<?php $cat = get_the_category(); ?>
<?php $cat = $cat[0]; ?>
<?php echo get_cat_name($cat->term_id); ?>
</span>
</p>
<p><?php the_title(); ?></p>
</a>
</li>
<?php endwhile; endif; ?> 

</ul>
<div class="common-btn01"><a href="<?php echo home_url(); ?>/blog/">一覧を見る</a></div>
</article>
</div><!--/contents-->
</section>
-->
<!--ニュース　ここまで-->

<!--お問い合わせ-->
<!--
<section class="mb70">
<div id="contact" class="contents">
<h2 class="ttl01">CONTACT</h2>
<article>
<?php echo do_shortcode('[contact-form-7 id="7" title="お問い合わせ"]'); ?>
</article>
</div><!--/contents-->
</section>
-->
<!--お問い合わせ　ここまで-->


<?php get_footer(); ?>

