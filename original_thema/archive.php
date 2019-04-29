<?php get_header(); ?>

<section id="about" class="bg-normal">
<h2 class="ttl-common01 mb0">ATTENDANT<span>アテンダント</span></h2>
<div class="contents">

<ul class="attendant-list">
<?php if(have_posts()): while(have_posts()): the_post(); ?> 

<li>
<a href="<?php the_permalink(); ?>">
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
</a>
</li>

<?php endwhile; endif; ?> 
</ul>

</div><!--/contents-->
</section>

<?php get_footer(); ?>
