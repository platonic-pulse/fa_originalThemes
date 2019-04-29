<?php get_header(); ?>

<section>
<div class="contents mb70 clearfix">

<div class="contents-main">



<h2 class="box-category-list-ttl"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></h2>
<article>
<ul class="box-category-list">
<?php if(have_posts()): while(have_posts()): the_post(); ?>

<li>
<p><span><?php the_time('Y/m/d'); ?></span>&emsp;<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
</li>

<?php endwhile; endif; ?> 
</ul>
</article>


</div><!--/contents-main-->

<div class="contents-sub">
<?php get_sidebar(); ?>
</div>

</div><!--/contents-->
</section>
<?php get_footer(); ?>
