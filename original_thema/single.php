<?php get_header(); ?>

<section>
<h2 class="ttl-common01 mb0">ATTENDANT<span>アテンダント</span></h2>
<div class="contents mb70 clearfix">

<div class="contents-main">
<?php if(have_posts()): while(have_posts()): the_post(); ?> 
<div class="blog-post-box">

<div>
<?php if ( has_post_thumbnail() ): // サムネイルを持っているとき ?>
<?php
$title= get_the_title();
the_post_thumbnail(medium,
array( 'alt' =>$title,'class' => 'img-fit-cover'));
?>
<?php else: // サムネイルを持っていないとき ?>
<img class="img-fit-cover" src="<?php bloginfo('template_directory'); ?>/images/common/img_no.jpg" alt="写真無し" />
<?php endif; ?>
</div>

<?php the_content(); ?>

<div class="btn_common01"><a href="/?postID=<?php the_ID(); ?>#contact">このアテンダントに依頼</a></div>
<?php endwhile; endif; ?> 
</div><!--/blog-post-box-->
</div><!--/contents-main-->

<div class="contents-sub">
<?php get_sidebar(); ?>
</div>

</div>

</section>


<section id="attendant" class="bg-normal">
<h2 class="ttl-common01 mb0">PICKUP ATTENDANT<span>ピックアップアテンダント</span></h2>
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
<img class="img-fit-cover" src="<?php bloginfo('template_directory'); ?>/images/common/img_no.jpg" alt="写真無し" />
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
<img class="img-fit-cover" src="<?php bloginfo('template_directory'); ?>/images/common/img_no.jpg" alt="写真無し" />
<?php endif; ?>
</div>
<div class="top-atendant-txt">
<!-- h3>キャッチコピーがはいります</h3 -->
<h4><?php the_title(); ?></h4>
<?php the_content(); ?>
</div>
</div>
</div>
<div class="btn_common01"><a href="?postID=<?php the_ID(); ?>#contact">このアテンダントに依頼</a></div>
<!-- #tab1 --></div>

<?php endwhile; ?>
<?php endif; ?>
<!-- #detail --></div>
</section>

<?php get_footer(); ?>