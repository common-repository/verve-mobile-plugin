<?php get_header(); ?>
<div class="websitez-container">
	<div id="container" class="homeCont">
	
	<?php if(have_posts()) : ?>
		<?php $i=0; ?>
		<?php while(have_posts()) : the_post(); ?>
	
			<div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<div class="secHead">
				<div class="post-wrapper">
					<div class="calendar">
		    		<div class="calendar-month">
		    			<?php the_time('M') ?>
		    		</div>
		    		<div class="calendar-day">
		    			<?php the_time('j') ?>
		    		</div>
		    	
		    	</div>
		    	
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-title"><?php the_title(); ?></a>
					<p class="post-author"><?php echo __("Author: <strong>".get_the_author()); ?></strong></p>
			
					
				
			
				
					
					
					<div style="clear: both;"></div>
				</div>
					</div>
				
	
			
			
				<div class="post-more">
				
					<div style="clear: both;"></div>
				</div>
			</div>
		
			<?php $i++; ?>
		<?php endwhile; ?>
		
	  <div class="websitez-navigation">
	  	<?php posts_nav_link(' &#124; ','&#171; previous','next &#187;'); ?>
	  </div>          
	<?php else : ?>
		<div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post-wrapper">
				<h3><?php _e('No posts are added.'); ?></h3>
			</div>
		</div>
	<?php endif; ?>
</div>

</div>
<?php get_footer(); ?>      