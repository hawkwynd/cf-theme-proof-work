<?php 

	$x=1;
	
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;		
		
	query_posts('post_type=post&paged='.$paged);
	
	if ( have_posts() ) : while ( have_posts() ) : the_post();
	
		// is this a full post or a half post? Check to see if we've done two itinerations. 
		if ($x>2){ 
			$class = "blog-small"; 
		} else { 
			$class="blog-big"; 
		}
	
		// toss in some logic using the mod operator to determine how and when to output rows.
		if ($x<=2 OR ($x>2 AND $x%2!=0)) {
			echo '<div class="post group">';
		}
		
?>
		
<div class="<?=$class;?> group">

	<div class="blog-image">
		
		<a href="<?php the_permalink();?>">
				
			<?php 
			
			if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) {
			
			the_post_thumbnail('blog-featured');
			
			} else { ?> 
						
			
			<?php }?>
		
		</a>
		
	</div>
	
	<div class="blog-content">
	
		<div class="time">On <?php the_time('F jS, Y') ?></div>
			
		<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				
		<?php
			
			// show social networking only if we're doing full posts
			
			if ($class=='blog-big'):
			
			?>
				
			<div class="group blog-listing-socials"><?php site_socials();?></div>
				
			<?php endif; ?>
			
			<?php
					
				// show excerpt 1 for big
				
				if ($class=='blog-big'):
				
			?>
					
				<?php wpe_excerpt('wpe_excerptlength_big', 'wpe_excerptmore'); ?>
				
			<?php endif; ?>
				
			<?php
					
				// show excerpt 1 for big
				
				if ($class=='blog-small'):
				
			?>
					
				<?php wpe_excerpt('wpe_excerptlength_small', 'wpe_excerptmore'); ?>
				
			<?php endif; ?>
				
			<a class="learn-more" href="<?php the_permalink();?>">read more</a> 
		
	</div>		         
		
</div> 
	
<?
	
	// if we've already displayed the first two, now we need to start outputting rows. Using modulus operator. Will use same logic at the end of the loop to ouput the closing div.
	if ($x<=2 OR ($x>2 AND $x%2==0)) {
		echo '</div>';
	}
	
	$x++; // iterate our post count
	endwhile; endif;
	if ($x%2==0 and $x>2) { echo '</div>'; }
	
?>

<!-- BLOG -->

<?php if(function_exists('wp_paginate')) {wp_paginate();} ?>