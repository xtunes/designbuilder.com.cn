<?php
/**
 * Template Name: 首页

 */

get_header(); ?>
    	<div class="clear"></div>
    <div id="main">
    	<div class="homebanner">
    		<img src="/img/banner.jpg">
    	</div>
    	<div class="homefeatured">
    		<a href="#"><img src="/img/web_07.jpg"></a>
    		<a href="#"><img src="/img/web_09.jpg"></a>
    		<a href="#"><img src="/img/web_11.jpg"></a>
    	</div>
    	<div class="homecontent">
    		<div class="news">
    			<img src="/img/title_news.gif">
    		</div>
    		<div class="productintro">
    			<img src="/img/title_intro.gif">
    			<div class="content">    			    				
    			     <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>    				
    			</div>    			
    		</div>
    	</div>
    </div>
<?php get_footer(); ?>
