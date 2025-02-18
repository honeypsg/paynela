<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php /* <div class="frontPage">
    <?php get_template_part( 'template-parts/hero' ); ?>
    
    <div class="frontPage__targets">
      <?php $xdemvTarget = get_field('xdemvy_target'); ?>
      <div class="container-fluid px-0">
        <div class="row justify-content-center">
          <div class="col-12 col-md-5  position-relative">
            <div class="frontPage__targets--innerText d-flex">
              <p class="frontPage__targets--text"><?php echo $xdemvTarget['text']; ?></p>
            </div>
            <?php echo wp_get_attachment_image($xdemvTarget['mite_icon'],'full',false,array('class'=>'frontPage__targets--miteIcon')); ?>
          </div>
          <div class="col-12 col-md-7">
            <div class="frontPage__targets--imageFrame">
              <?php echo wp_get_attachment_image($xdemvTarget['image'],'full',false,array('class'=>'frontPage__targets--image')); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php $demodexCommon = get_field('demodex_common'); ?>
    <div class="frontPage__demodexCommon" style="background-image: url('<?php echo $demodexCommon['background_image']; ?>');">
      <div class="frontPage__demodexCommon--inner">
        <div class="container-xxl">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
              <h3><?php echo $demodexCommon['headline']; ?></h3>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-12 col-md-11 col-lg-9">
              <div class="frontPage__demodexCommon--percentage d-flex flex-column flex-md-row justify-content-center align-items-center">
                <?php echo wp_get_attachment_image($demodexCommon['stat_section']['graphic'],'full',false,array('class'=>'frontPage__demodexCommon--percentage--graphic')); ?>
                <p><?php echo $demodexCommon['stat_section']['text']; ?></p>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-md-8 text-center mb-4">
                <a class="frontPage__demodexCommon--link" href="<?php echo $demodexCommon['link']['url']; ?>" target="<?php echo $demodexCommon['link']['target']; ?>"><?php echo $demodexCommon['link']['title']; ?><i class="white-arrow"></i></a>
              </div>
            </div>
            <div class="row justify-content-center mt-1">
              <div class="col-12 col-md-7">
                <p class="frontPage__demodexCommon--studyDesign"><?php echo $demodexCommon['section_reference']; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php echo wp_get_attachment_image($demodexCommon['background_image_mobile'],'full',false,array('class'=>'frontPage__demodexCommon--mobile d-md-none img-fluid')); ?>
    </div>
    
    <div class="frontPage__howXdemvyWorks">
      <?php $howXdemvyWorks = get_field('how_xdemvy_works'); ?>
      <div class="container-xxl">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-9 col-md-7 text-center">
                <div class="frontPage__howXdemvyWorks--textContainer text-center">
                  <h4 class="frontPage__howXdemvyWorks--headline"><?php echo $howXdemvyWorks['headline']; ?></h4>
                  <p class="frontPage__howXdemvyWorks--text"><?php echo $howXdemvyWorks['text']; ?></p>
                  <p class="frontPage__howXdemvyWorks--reference text-start"><?php echo $howXdemvyWorks['reference_text']; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="frontPage__howXdemvyWorks--leftLash" style="background-image: url('<?php echo $howXdemvyWorks['background_elements']['left']; ?>');"></div>
      <div class="frontPage__howXdemvyWorks--rightLash" style="background-image: url('<?php echo $howXdemvyWorks['background_elements']['right']; ?>');"></div>      
    </div>

    <?php $signupCTA = get_field('sign_up_cta'); ?>
    <div class="frontPage__signupCTA" style="background-image: url('<?php echo $signupCTA['background_element']; ?>')">
      <div class="container-xxl py-5">
        <div class="row justify-content-center">
          <div class="order-last col-12 col-md-7 ps-md-5 d-flex flex-column justify-content-center mb-5 mb-md-0">
            <h4 class="frontPage__signupCTA--headline text-center text-md-start"><?php echo $signupCTA['headline']; ?></h4>
            <a class="frontPage__signupCTA--link mx-auto mx-md-0" target="<?php echo $signupCTA['button']['target']; ?>" href="<?php echo $signupCTA['button']['url']; ?>"><?php echo $signupCTA['button']['title']; ?><i class="white-arrow"></i></a>
          </div>
          <div class="order-first order-md-last col-12 col-md-4">
            <?php echo wp_get_attachment_image($signupCTA['character'],'full',false,array('class'=>'frontPage__signupCTA--character')); ?>
          </div>
        </div>
      </div>
    </div>
    
  </div>
    */ ?>
<?php get_template_part( 'template-parts/hero' ); ?>
<?php get_template_part( 'template-parts/introducing-nelacare' ); ?>
<?php get_template_part( 'template-parts/experienced-leaders' ); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>