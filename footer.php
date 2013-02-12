<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Unga kreatörer 3
 * @since Unga kreatörer 3 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			&copy; <?php $the_year = date("Y"); echo $the_year; ?> <a href="<?php bloginfo('url');?>"><?php bloginfo('name'); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>