<?php //Template Name: Home ?>
<?php get_header(); ?>

<div class="royal-container">
	<?php layerslider(1) ?>
</div>
<section class="page-wrapper">
	<div class="group">
		<div class="content">
			<article>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<h1 class="page-title">
					<?php the_title(); ?>
				</h1>
				<div class="post">
					<?php the_content(); ?>
				</div>
				<?php endwhile; ?>
			</article>
		</div>
		<aside class="group">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-home') ) ?>
		</aside>
	</div>
</section>
<section id="costs-fees" class="group">
	<div class="split-right">
		<h2>What Does It Cost To Own A (Franchise Name) Franchise?</h2>
		<p>Nulla lectus augue, vulputate quis elit id, iaculis auctor sem. Vivamus porta diam libero, a rutrum ligula dignissim ac. Ut facilisis lacus a quam ullamcorper, dapibus efficitur arcu viverra. Ut nec laoreet nulla. Nunc tortor ipsum, sodales at ex id, gravida pulvinar leo. Cras tempus condimentum sagittis. Praesent metus nisi, imperdiet non nunc consequat, interdum pretium turpis.</p>
		<ul>
			<li>Total Investment: <span>$65,250 to $90,400</span></li>
			<li>Franchise Fee: <span>$42,900 - $48,900</span></li>
			<li>Minimum Liquid Capital: <span>$45,000</span></li>
			<li>Financing Available: <span>Yes</span></li>
			<li>Business Type: <span>Franchise</span></li>
		</ul>
		<p><a class="learn-more" href="/research/what-are-my-startup-costs/" title="Learn more about (Franchise Name) Franchise start-up costs">Learn More</a></p>
	</div>
</section>
<section id="benefits-list" class="group">
	<h2>Benefits of Owning a (Franchise Name) Franchise</h2>
	<p class="sub">Ut nec laoreet nulla. Nunc tortor ipsum, sodales at ex id, gravida pulvinar leo. Praesent metus nisi, imperdiet non nunc consequat, interdum pretium turpis:</p>
	<ul>
		<li>
			<h3>Lorem ipsum dolor sit amet</h3>
			<p>Nulla lectus augue, vulputate quis elit id, iaculis auctor sem. Vivamus porta diam libero, a rutrum ligula dignissim ac. Ut facilisis lacus a quam ullamcorper, dapibus efficitur arcu viverra. Ut nec laoreet nulla. Nunc tortor ipsum, sodales at ex id, gravida pulvinar leo. Cras tempus condimentum sagittis.</p>
			<p><a class="learn-more" href="" title="Learn more about (Franchise Name) Franchise">Learn More</a></p>
		</li>
		<li>
			<h3>Lorem ipsum dolor sit amet</h3>
			<p>Nulla lectus augue, vulputate quis elit id, iaculis auctor sem. Vivamus porta diam libero, a rutrum ligula dignissim ac. Ut facilisis lacus a quam ullamcorper, dapibus efficitur arcu viverra. Ut nec laoreet nulla. Nunc tortor ipsum, sodales at ex id, gravida pulvinar leo. Cras tempus condimentum sagittis.</p>
			<p><a class="learn-more" href="" title="Learn more about (Franchise Name) Franchise">Learn More</a></p>
		</li>
		<li>
			<h3>Lorem ipsum dolor sit amet</h3>
			<p>Nulla lectus augue, vulputate quis elit id, iaculis auctor sem. Vivamus porta diam libero, a rutrum ligula dignissim ac. Ut facilisis lacus a quam ullamcorper, dapibus efficitur arcu viverra. Ut nec laoreet nulla. Nunc tortor ipsum, sodales at ex id, gravida pulvinar leo. Cras tempus condimentum sagittis.</p>
			<p><a class="learn-more" href="" title="Learn more about (Franchise Name) Franchise">Learn More</a></p>
		</li>
		<li>
			<h3>Lorem ipsum dolor sit amet</h3>
			<p>Nulla lectus augue, vulputate quis elit id, iaculis auctor sem. Vivamus porta diam libero, a rutrum ligula dignissim ac. Ut facilisis lacus a quam ullamcorper, dapibus efficitur arcu viverra. Ut nec laoreet nulla. Nunc tortor ipsum, sodales at ex id, gravida pulvinar leo. Cras tempus condimentum sagittis.</p>
			<p><a class="learn-more" href="" title="Learn more about (Franchise Name) Franchise">Learn More</a></p>
		</li>
		<li>
			<h3>Lorem ipsum dolor sit amet</h3>
			<p>Nulla lectus augue, vulputate quis elit id, iaculis auctor sem. Vivamus porta diam libero, a rutrum ligula dignissim ac. Ut facilisis lacus a quam ullamcorper, dapibus efficitur arcu viverra. Ut nec laoreet nulla. Nunc tortor ipsum, sodales at ex id, gravida pulvinar leo. Cras tempus condimentum sagittis.</p>
			<p><a class="learn-more" href="" title="Learn more about (Franchise Name) Franchise">Learn More</a></p>
		</li>
		<li>
			<h3>Lorem ipsum dolor sit amet</h3>
			<p>Nulla lectus augue, vulputate quis elit id, iaculis auctor sem. Vivamus porta diam libero, a rutrum ligula dignissim ac. Ut facilisis lacus a quam ullamcorper, dapibus efficitur arcu viverra. Ut nec laoreet nulla. Nunc tortor ipsum, sodales at ex id, gravida pulvinar leo. Cras tempus condimentum sagittis.</p>
			<p><a class="learn-more" href="" title="Learn more about (Franchise Name) Franchise">Learn More</a></p>
		</li>
	</ul>
</section>
<section id="franchisee-quotes" class="group">
	<h2>What Our Franchisees Have To Say</h2>
	<ul>
		<li>
			<p>"Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure"</p>
			<p class="quote-auth">-John Doe, Nashville, TN</p>
		</li>
		<li>
			<p>"Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure"</p>
			<p class="quote-auth">-John Doe, Nashville, TN</p>
		</li>
		<li>
			<p>"Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure"</p>
			<p class="quote-auth">-John Doe, Nashville, TN</p>
		</li>
		<li>
			<p>"Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure"</p>
			<p class="quote-auth">-John Doe, Nashville, TN</p>
		</li>
	</ul>
</section>
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
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
