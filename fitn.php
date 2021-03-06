<?php

get_header(); ?>

  <header id="masthead" class="site-header" style="background-image: url(<?php the_field('top_background_image'); ?>)" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <ul class="side-menu">
            <li>
              <a href="/iump-login" class="login-link">
                <img src="<?php echo get_template_directory_uri(); ?>/img/layout/login-icon.png"> LOGG INN
              </a>
            </li>
            <li>
              <a href="<?php the_field('twitter', 'options'); ?>" class="social-link" target="_blank">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="<?php the_field('instagram', 'options'); ?>" class="social-link" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="<?php the_field('facebook', 'options'); ?>" class="social-link" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
          </ul>
          <div class="promotion-border-box">
              <h3>LIVSSTILSENDRING<br>PÅ NETT</h3>
              <p class="price-from">KUN 349,-</p>
          </div>
          <div class="text-center">
            <a href="#bli-medlem" class="btn btn--xl wow flipInY" style="border-radius: 0; margin-top: 2em; margin-right: 0; width: 250px; font-weight: 400; padding: 0.7em 1.5em 0.6em 1.5em;">PRØV GRATIS</a>
          </div>
        </div>
      </div>
    </div>
  </header><!-- #masthead -->

  <!-- PROMO SECTION -->
  <!-- <section id="promo">
    <div class="promo__text">
      <div class="container">
        <div class="row flex items-center justify-center display-block-xs">
          <div class="col-sm-5">
            <h2 class="pink-gradient__color wow fadeInLeft"><?php the_field('left_text_under_top_background'); ?></h2>
          </div>
          <div class="separator"></div>
          <div class="col-sm-5">
            <h3 class="pink-gradient__color wow fadeInRight"><?php the_field('right_text_under_top_background'); ?></h3>
          </div>
        </div>
      </div>
    </div>
    <div class="promo-bg__wrapper wow flipInY">
      <div class="promo-mask"></div>
      <div class="promo-bg">
        <div class="promo-bg__content flex flex-column items-center justify-center">
          <svg><use xlink:href="#logo"></use></svg>
          <p>VI GJØR TRENINGEN <br> GJENNOMFØRBAR</p>
        </div>
      </div>
    </div>
  </section> -->
  <!-- END OF PROMO SECTION -->

  <!-- SHOWCASE SECTION -->
  <section id="showcase">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-3">
          <div class="bordered-box wow fadeInRight">
            <div class="col-left">
              <img src="<?php echo get_template_directory_uri(); ?>/img/layout/mockup.png" class="img-responsive">
            </div>
            <div class="col-right">
              <h3>DET DU BEHØVER FOR EN<br> VARIG OG GJENNOMFØRBAR<br> LIVSSTILSENDRING!</h3>
              <a href="#bli-medlem" class="btn btn-bordered">PRØV GRATIS</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END OF SHOWCASE SECTION -->

   <!-- DETTE SECTION -->
  <section id="dette">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="section-header text-center">DETTE FA°R DU</h2>
          <div class="boxes-wrapper">
            <div class="box wow fadeInUp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/layout/dette-icons/icon-1.png" class="img-responsive" style="width: 100px;">
              <h4>UKENTLIG<br> TRENINGSPROGRAM</h4>
            </div>
            <div class="box wow fadeInUp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/layout/dette-icons/icon-2.png" class="img-responsive" style="width: 65px; position: relative; margin-top: -25px;">
              <h4>KOSTHOLDSVEILEDNING</h4>
            </div>
            <div class="box wow fadeInUp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/layout/dette-icons/icon-3.png" class="img-responsive" style="width: 80px;">
              <h4>ONLINE GRUPPETRENING<br> HVER UKE</h4>
            </div>
            <div class="box wow fadeInUp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/layout/dette-icons/icon-4.png" class="img-responsive" style="width: 60px; margin-top: -30px;">
              <h4>MAGASIN HVER MA°NED!</h4>
            </div>
            <div class="box wow fadeInUp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/layout/dette-icons/icon-5.png" class="img-responsive" style="width: 75px;">
              <h4>OPPFØLGING<br> VIA FORUM</h4>
            </div>
            <div class="box wow fadeInUp">
              <img src="<?php echo get_template_directory_uri(); ?>/img/layout/dette-icons/icon-6.png" class="img-responsive" style="width: 60px;">
              <h4>UKENTLIGE<br> WEBMINARER</h4>
            </div>
          </div>
          <div class="text-center">
            <a href="/dette-far-du/" class="btn btn--xl wow flipInY" style="border-radius: 0px; border: 1px solid #e5517b; margin-top: 3em; margin-right: 0px; width: 250px; font-weight: 400; padding: 0.7em 1.5em 0.6em; visibility: visible; animation-name: flipInY;">LES MER</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END OF DETTE SECTION -->

  <!-- BLI MEDLEM SECTION -->
  <section id="bli-medlem">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
           <h3 class="section-header text-center wow fadeInUp"  style="margin-bottom: 45px;">BLI MEDLEM</h3>
           <div class="register-form-wrapper wow fadeInUp">
             <?php echo do_shortcode('[ihc-register]'); ?>
           </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END OF BLI MEDLEM SECTION -->

  <!-- BLOGG SECTION -->
  <section id="blogg">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h3 class="section-header wow fadeInUp" style="color: #fff; margin-bottom: 2em;">SISTE FRA BLOGGEN</h3>
        </div>
      </div>
      <div style="max-width: 900px; margin: 0 auto;">
        <div class="row">
          <div class="col-sm-12">
            <div id="rss-agregator" style="display: none !important;">
              <?php echo do_shortcode('[wp-rss-aggregator]'); ?>
            </div>
          </div>
          <div class="col-sm-7">
            <a id="rss-one" href="#" class="blogg-item flex items-center wow zoomIn" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/layout/blogg-placeholder.jpg');">
              <div class="blogg-item__content">
                <h4>MITT ALLER BESTE TIPS FOR A° KOMME I GANG MED TRENINGEN!</h4>
                <p>6.NOVEMBER 2016</p>
              </div>
            </a>
          </div>
          <div class="col-sm-5">
            <a id="rss-two" href="#" class="blogg-item flex items-center wow zoomIn" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/layout/blogg-placeholder.jpg');">
              <div class="blogg-item__content">
                <h4>MITT ALLER BESTE TIPS FOR A° KOMME I GANG MED TRENINGEN!</h4>
                <p>6.NOVEMBER 2016</p>
              </div>
            </a>
            <a href="http://www.fitnok.no/blogg" target="_blank" class="btn btn-bordered btn--medium">SE MER FRA BLOGGEN</a>
          </div>
        </div>
      </div>
  </section>
  <!-- END OF BLOGG SECTION -->

  <!-- BLI MEDLEM POSTER SECTION -->
  <!-- <section id="bli-medlem-poster">
    <div class="grey-mask"></div>
    <div class="content text-center">
      <h2 class="header__huge wow fadeInUp"> HER SKAPES SELVTILLIT</h2>
      <h2 class="header__huge font-queen wow fadeInUp">gjennom mestring</h2>
      <a href="#bli-medlem" class="btn btn--xl wow flipInY">BLI MEDLEM</a>
    </div>
    <div class="big-logo hidden-xs">
      <img class="img-responsive wow slideInRight" src="<?php echo get_template_directory_uri(); ?>/img/layout/logo-bli.svg" alt="FITNOK logo">
    </div>
  </section> -->
  <!-- END OF BLI MEDLEM POSTER SECTION -->

  <!-- OM CAMILLA SECTION -->
 <!--  <section id="om-camilla">
    <div class="container flex items-center">
      <div class="content wow fadeInDown">
        <h3 class="header-pink__underlined">OM FITNOKJENTENE</h3>
        <?php the_field('om_camilla'); ?>
      </div>
      <div class="hidden-xs photo__safari-helper">
        <div class="photo wow slideInRight" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/content/_DSC7550.jpg');">
          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/content/_DSC7550.jpg">
        </div>
      </div>
    </div>
  </section> -->
  <!-- END OF OM CAMILLA SECTION -->

  <!-- KONTAKT SECTION -->
  <section id="kontakt">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3 class="section-header wow fadeInUp">KONTAKT</h3>
          </div>
        </div>
        <div class="row">
          <?php echo do_shortcode('[contact-form-7 id="13" title="Contact form 1"]'); ?>
        </div>
      </div>
    </div>
  </section>
  <!-- END OF KONTAKT SECTION -->

<?php
get_footer();
