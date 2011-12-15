<?php
/**
 * The template for displaying Category Archive pages.
 * Template Name: homepage
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
    <div id="main" class="wrap">
    	<?php get_sidebar(); ?>
    	<div class="rightpart">
    		<div class="content">
    		    		<div class="breadcrumbs">
<?php
if(function_exists('bcn_display'))
{
	bcn_display();
}
?>
</div>
    		   <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
    	</div>
    	<div class="clear"></div>
    </div>
<?php get_footer(); ?>

