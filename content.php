<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->

	<?php the_post_thumbnail( 'full', array('class'=>'img-fluid' )); ?>

	<div class="socialShare">
		<div class="shareText">SHARE:</div>
		<div><a target=_blank href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(the_permalink()); ?>"><span class="icon-facebook"></span></a></div>
		<div><a target=_blank href="https://twitter.com/intent/tweet?text=<?php urlencode(the_title())?>%20<?php echo urlencode(the_permalink()); ?>&source=webclient"><span class="icon-twitter"></span></a></div>
		<div><a target=_blank href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo urlencode(the_permalink()); ?>&amp;title=<?php urlencode(the_title())?>e&amp;summary=<?php //echo shareExcerpt(); ?>"><span class="icon-linkedin"></span></a></div>
	</div>
	<div class="singleContent">
		<div class="entry-content">
			<?php the_content('Read more »');?>
		</div><!-- .entry-content -->
		<div style="clear:both;"></div>
	</div>
	<footer class="entry-footer">
	</footer><!-- .entry-footer -->	
	<hr/>
</article><!-- #post-## -->
