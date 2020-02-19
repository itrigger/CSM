<?php ?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="/wp-content/themes/csm/assets/css/normalize.css">

  <?php wp_head(); ?>

  <link rel="stylesheet" href="/wp-content/themes/csm-mobile/assets/css/main.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>

</head>


<body <?php body_class(); ?>>

<!--[if IE]>
<p class="browserupgrade">Вы используете <strong>старую</strong> версию браузера. Пожалуйста, <a
  href="https://browsehappy.com/">обновите Ваш браузер</a> для правильного отображения сайта.</p>
<![endif]-->
<?php
wp_body_open();
?>
<div class="body_wrapper">

  <header id="site-header" class="header-footer-group" role="banner">


    <div class="mobile topcontacts">

        <div>
          <a href="/" class="logo"></a>
        </div>

        <div>
          <a data-fancybox data-src="#callmeback" href="javascript:;" class="btn btn-left">Связаться<br/>с&nbsp;нами</a>
        </div>

    </div>


    <div id="popupmenu" style="display: none;">
      <div class="flex tels">
        <a href="tel:89257713153" class="ico-tel top-tel">8 925 771 31 53</a>
        <a href="tel:84953693042" class="ico-tel top-tel">8 495 369 30 42</a>
      </div>

      <div class="flex">
        <ul class="social-links">
          <li><a href="https://api.whatsapp.com/send?phone=79257753467" target="_blank" class="ico-wh"></a></li>
          <li><a href="viber://chat?number=79257753467" target="_blank" class="ico-vb"></a></li>
          <li><a href="https://t.me/CSMIG" target="_blank" class="ico-tg"></a></li>
        </ul>
      </div>
    </div>

  </header><!-- #site-header -->


<?php
// Output the menu modal.
get_template_part('template-parts/modal-menu');