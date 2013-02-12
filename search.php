<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Unga kreatörer 3
 * @since Unga kreatörer 3 1.0
 */

get_header(); ?>

		<section id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h3 class="page-title"><?php printf( __( 'Search Results for: %s', 'uk3' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
					<hr />
				</header><!-- .page-header -->

				<?php uk3_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>

				<?php uk3_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'search' ); ?>

			<?php endif; ?>

			</div><!-- #content .site-content -->
		</section><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>