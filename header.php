<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?>
</head>
<body <?php body_class('position-relative'); ?>>
  <header>
    <div class="container-fluid custom-container">
      <div class="row">
        <div class="col-12 text-start text-sm-center">
          <a class="d-block" href="<?php echo trailingslashit( home_url() ); ?>">
            <img class="productLogo" src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ) , 'full' ); ?>" alt="Paynela Logo">
          </a>
        </div>
      </div>
      <button type="button" class="contact__button" data-bs-toggle="modal" data-bs-target="#contactModal"><?php echo get_field('contact_button_title','options')?></button>
    </div>
  </header>
