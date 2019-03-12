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

                  <!--  <h1 class="page-title">
					<?php the_title(); ?>
				</h1> -->

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
<section class="section-wrapper">
	<div class="reasons-container">
      <div class="content-container-centered">
		<h2>Reasons To Own A Closet Factory Franchise </h2>
		<p>Nulla lectus augue, vulputate quis elit id, iaculis auctor sem. Vivamus porta diam libero, a rutrum ligula dignissim ac. Ut facilisis lacus a quam ullamcorper, dapibus efficitur arcu viverra. Ut nec laoreet nulla. </p>
          <p>Nunc tortor ipsum, sodales at ex id, gravida pulvinar leo. Cras tempus condimentum sagittis. Praesent metus nisi, imperdiet non nunc consequat, interdum pretium turpis.</p>
    </div><!--// content-container -->

    <div class="col-container">
        <div class="group-container">
            <div class="circleBase type1">
                <img src="/wp-content/themes/brandjo/img/users.png"/>
            </div>
            <p>Nulla lectus augue, vulputate quis elit id, iaculis auctor sem. Vivamus porta diam libero, a rutrum ligula. </p>

            <div class="learn_more_link">
                <a href="#">Learn More</a>
            </div>

        </div>

        <div class="group-container">
            <div class="circleBase type1">
                <img src="/wp-content/themes/brandjo/img/shop.png"/>
            </div>
            <p>Nulla lectus augue, vulputate quis elit id, iaculis auctor sem. Vivamus porta diam libero, a rutrum ligula. </p>

            <div class="learn_more_link">
                <a href="#">Learn More</a>
            </div>

        </div>
        <div class="group-container">
            <div class="circleBase type1">
                <img src="/wp-content/themes/brandjo/img/cog.png"/>
            </div>
            <p>Nulla lectus augue, vulputate quis elit id, iaculis auctor sem. Vivamus porta diam libero, a rutrum ligula. </p>

            <div class="learn_more_link">
                <a href="#">Learn More</a>
            </div>

        </div>
        <div class="group-container">
            <div class="circleBase type1">
                <img src="/wp-content/themes/brandjo/img/chart.png"/>
            </div>
            <p>Nulla lectus augue, vulputate quis elit id, iaculis auctor sem. Vivamus porta diam libero, a rutrum ligula.  </p>

            <div class="learn_more_link">
                <a href="#">Learn More</a>
            </div>

        </div>
    </div>
</div><!-- // reasons-container -->
</section> <!-- section-wrapper -->

<!-- Invest In A Closet Factory Franchise -->

    <section class="page-wrapper">
        <div class="group">
              <article>
                  <div class="content-container-centered">
	        <h2 class="home-h2">Invest In A Closet Factory Franchise</h2>
	        <p class="sub">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure</p>
                  </div>
              </article>
            <div class="video-container">

                <div style="position: static; clear: both; width: 800px; height: 400px;">
                    <div style="position: relative">
                        <img id="vidimg" width="800px" height="400px" src="/wp-content/themes/brandjo/img/CF-Video-Thumbnail-youtube.jpg" style="position: absolute; top: 0; left: 0; cursor: pointer; pointer-events: none; z-index: 2;" />
                        <iframe id="unlocked-video" style="position: absolute; top: 0; left: 0; z-index: 1;" src="https://www.youtube.com/embed/PT0aszT5ZT4" width="800" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                </div>
                <script type="application/javascript">
                    // Adapted from https://stackoverflow.com/a/32138108
                    var monitor = setInterval(function(){
                        var elem = document.activeElement;
                        if(elem && elem.id == 'unlocked-video'){
                            document.getElementById('vidimg').style.display='none';
                            clearInterval(monitor);
                        }
                    }, 100);
                </script>

            </div><!-- group -->
    </div><!-- page-wrapper -->
</section><!-- // section page-wrapper -->

<!--// END Invest In A Closet Factory Franchise -->

<!-- Banner -->
<section class="section-wrapper">
<div class="talk-banner">
    <h2>Talk to us about franchising with closet factory  <span><a href="tel:555-555-5555">call 555-555-5555</a></span></h2>

</div>
</section>

<!-- banner -->

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
