<?php get_header(); ?>
<div class="row">
	<div class="image">
		<img src="<?php bloginfo('template_directory');?>/images/slider-img.jpg" alt="">
	</div>
</div>
<div class="row">
	<div class="main_nav container">
		<ul>
			<li><a href="">کتابخانه مجازی</a></li>
			<li><a href="">پورتال دانشگاه </a></li>
			<li><a href="">نشریه ها</a></li>
			<li><a href="">جنبشهای دانشجویی</a></li>
			<li><a href="">مکاتبات اعضا</a></li>
			<li><a href="">نظر سنجی</a></li>
		</ul>
	</div>
</div>
	<div class="row">
				<div class="span8">
					    <?php
					  $count=0;
					    $the_query = new WP_Query( 'posts_per_page=1' );?>
					     <?php if (have_posts()) : while ( have_posts()) :  the_post();?>
					     <?php if (($count%2) == 0)
					     {
					       echo " <div class=' news'>";
					     } ?>
					     <div class="span6" id="box">
					       <h2><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></h2>
					       <?php
					    if(is_home())
					    {
					    if(has_post_thumbnail())
					    {
					    echo "<a href='".get_permalink()."'>";
					    the_post_thumbnail( 'thumbnail');
					    echo "</a>";
					    }
					    // the_excerpt();
					    }
					    // else
					    // {
					    // the_content();
					    // }
					    $count = $count+1;
					    ?>
					     </div>
					     <?php endwhile; else: ?>
					     <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
				</div>
		</div>




<!----------------------------------------------------------------------------- end slider -->
 <!-- start main box  -->

<div id="delimiter"></div>

<?php get_footer(); ?>