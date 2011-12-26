<?php
/**
 * Template Name: 首页

 */

get_header(); ?>
    	<div class="clear"></div>
    <div id="main">
    	<div class="homebanner relative">
    		<a href="/?cat=6" class="btn_try"><img src="/img/btn_try.jpg"></a>
    		<a href="/?page_id=27" class="btn_buy"><img src="/img/btn_buy.jpg"></a>
    	</div>
    	<div class="homefeatured">
    		<a href="/?page_id=58"><img src="/img/web_07.jpg"></a>
    		<a href="/?page_id=64"><img src="/img/web_09.jpg"></a>
    		<a href="/?page_id=66"><img src="/img/web_11.jpg"></a>
    	</div>
    	<div class="homecontent">
    		<div class="news">
    			<img src="/img/title_news.gif">
    			<ul  class="newslist">
					<?php
global $post;
$args = array( 'numberposts' => 9, 'offset'=> 0, 'category' => 18 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
				</ul>
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
