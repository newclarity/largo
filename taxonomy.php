<?php
/**
 * The template for displaying content type archives
 */

get_header(); ?>

		<div id="content" class="stories span8" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="category-background clearfix">

				<h1 class="page-title"><?php single_term_title(); ?></h1>

				<?php
					$term_description = term_description();
					if ( $term_description )
						echo '<div class="taxonomy-description">' . $term_description . '</div>';
				?>
			</header> <!-- /.category-background -->

			<h3 class="recent-posts clearfix">Recent posts<a class="rss-link" href="<?php echo esc_url( get_term_feed_link( get_queried_object() ) ); ?>"><i class="social-icons rss24"></i></a></h3>

			<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();
					get_template_part( 'content', 'taxonomy' );
				endwhile;
				largo_content_nav( 'nav-below' );

			else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title">Nothing Found</h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

		</div>
		<!-- /.grid_8 #content -->
<aside id="sidebar" class="span4">
<?php get_sidebar('topic'); ?>
</aside>
<!-- /.grid_4 -->
<?php get_footer(); ?>
