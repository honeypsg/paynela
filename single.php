<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container" id="postHeader">
  <div class="row">
    <div class="col-12 pt-md-2 pb-md-5 pb-4">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header text-center">
          <?php the_title( '<h1 class="entry-title mx-auto">', '</h1>' );?>
          <h2><?php the_field('sub_headline'); ?></h2>
        </header><!-- .entry-header -->
    </div>
  </div>
</div>
<div class="container-fluid tinted">
  <div class="container" id="articlePhoto">
    <div class="row">
      <div class="col-12 pb-5">
        <?php the_post_thumbnail( 'full', array('class'=>'img-fluid d-block mx-auto' )); ?>
        <div class="photoCaption text-center"><?php the_field('feature_image_caption'); ?></div>
      </div>
    </div>
  </div>
  <div class="container pt-md-5 pt-3">
    <div class="row">
      <div class="col-2 d-lg-block d-none" id="socialShare">
        <div class="socialShare">
          <div><a target=_blank href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(the_permalink()); ?>"><img src="<?php the_field('facebook_link_icon','options'); ?>" /></a></div>
          <div><a target=_blank href="https://twitter.com/intent/tweet?text=<?php urlencode(the_title())?>%20<?php echo urlencode(the_permalink()); ?>&source=webclient"><img src="<?php the_field('twitter_link_icon','options'); ?>" /></a></div>
          <div><a target=_blank href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo urlencode(the_permalink()); ?>&amp;title=<?php urlencode(the_title())?>e&amp;summary=<?php echo substr(get_the_excerpt(),0,255); ?>"><img src="<?php the_field('linkedin_link_icon','options'); ?>" /></a></div>
        </div>
      </div>
      <div class="col-12 col-lg-8" id="postContent">
        <div id="blogMeta">
          <p class="author">By <?php the_author(); ?></p>
          <p class="blogDate"><?php the_time('M j, Y') ?></p>
        </div>
        <div class="entry-content">
          <?php the_content();?>
        </div>
        <div id="lowerSocialShare" class="socialShare d-lg-none d-block">
          <a target=_blank href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(the_permalink()); ?>"><img src="<?php the_field('facebook_link_icon','options'); ?>" /></a>
          <a target=_blank href="https://twitter.com/intent/tweet?text=<?php urlencode(the_title())?>%20<?php echo urlencode(the_permalink()); ?>&source=webclient"><img src="<?php the_field('twitter_link_icon','options'); ?>" /></a>
          <a target=_blank href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo urlencode(the_permalink()); ?>&amp;title=<?php urlencode(the_title())?>e&amp;summary=<?php echo substr(get_the_excerpt(),0,255); ?>"><img src="<?php the_field('linkedin_link_icon','options'); ?>" /></a>
        </div>
        <?php if($actionBoxID = get_field('select_action_box')): ?>
        <div class="actionBlock">
          <div class="row no-gutters bg-white">
            <div class="col-md-6 col-12 colorSection colorTheme__grey">
              <?php echo wp_get_attachment_image(get_field('image',$actionBoxID),'medium_large',false,array('class'=>'img-fluid ')); ?>
            </div>
            <div class="col-md-6 col-12 textSection my-auto">
              <div class="innerContent">
                <h3><?php the_field('headline',$actionBoxID); ?></h3>
                <hr />
                <p style="color: <?php the_field('text_color',$actionBoxID); ?>"><?php the_field('text',$actionBoxID); ?></p>
                <div class="actionButton">
                  <?php $theLink = get_field('button',$actionBoxID); ?>
                  <a target="<?php echo $theLink['target']; ?>" style="color: <?php the_field('button_color',$actionBoxID); ?>;" href="<?php echo $theLink['url']; ?>"><?php echo $theLink['title']; ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
</article>

<?php endwhile; endif; ?>
<?php get_footer(); ?>