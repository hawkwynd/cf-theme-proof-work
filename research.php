<?php //Template Name: Research ?>
<?php get_header(); ?>

<section class="header-nav research">
	<div class="wrapper group">
		<h1 class="page-title">
			<?php the_title(); ?>
		</h1>
	</div>
</section>
<article class="page-wrapper group">
	<div class="content">
		<div class="group bottom-nav"><?php echo dbdb_prev_page_link(); ?><?php echo dbdb_next_page_link(); ?></div>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="post group">
			<?php the_content(); ?>
		</div>
		<?php endwhile; ?>
		<div class="group bottom-nav"><?php echo dbdb_prev_page_link(); ?><?php echo dbdb_next_page_link(); ?></div>
	</div>
	<aside class="group">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-research') ) ?>
		</aside>
</article>
<section id="req-form" class="group">
	<div class="split-content">
		<?php gravity_form(3, true, true, false, '', true, 12); ?>
	</div>
</section>
<section id="featured-posts">
	<div class="wrapper group">
		<h2>Recent Franchise Articles</h2>
		<ul>
			<?php
						// WP_Query arguments
						$args = array ('posts_per_page' => 3, 'category_name' => 'featured');

						// The Query
						$query = new WP_Query( $args );
						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post(); ?>
			<li>
				<div class="featured-thumb"> <a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
					<?php if ( has_post_thumbnail() ) { ?>
					<?php the_post_thumbnail('default-post-footer'); ?>
					<?php } else { ?>
					<img src="<?php bloginfo('template_directory'); ?>/images/default-post-footer.jpg" >
					<?php } ?>
					</a> </div>
				<!-- featured-thumb -->
				<div class="featured-title"> <a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
					<?php the_title(); ?>
					</a> </div>
				<!-- featured-title -->
				<div class="description">
					<?php wpe_excerpt('wpe_excerptlength_small', 'wpe_excerptmore'); ?>
				</div>
				<p><a class="learn-more" href="<?php the_permalink()?>">Read Blog</a></p>
			</li>
			<?php }
						}
						// Restore original Post Data
						wp_reset_postdata();

					?>
		</ul>
	</div>
</section>
<?php get_footer(); ?>
