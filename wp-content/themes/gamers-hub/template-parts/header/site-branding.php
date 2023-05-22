<?php
/*
* Display Logo and contact details
*/
?>

<div class="headerbox">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 align-self-center">
        <?php $gamers_hub_logo_settings = get_theme_mod( 'gamers_hub_logo_settings','Different Line');
        if($gamers_hub_logo_settings == 'Different Line'){ ?>
          <div class="logo">
            <?php if( has_custom_logo() ) gamers_hub_the_custom_logo(); ?>
            <?php if( get_theme_mod('gamers_hub_site_title_text',true) == 1){ ?>
              <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php }?>
            <?php $gamers_hub_description = get_bloginfo( 'description', 'display' );
            if ( $gamers_hub_description || is_customize_preview() ) : ?>
              <?php if( get_theme_mod('gamers_hub_site_tagline_text',false)){ ?>
                <p class="site-description"><?php echo esc_html($gamers_hub_description); ?></p>
              <?php }?>
            <?php endif; ?>
          </div>
        <?php }else if($gamers_hub_logo_settings == 'Same Line'){ ?>
          <div class="logo logo-same-line">
            <div class="row">
              <div class="col-lg-5 col-md-5 align-self-center">
                <?php if( has_custom_logo() ) gamers_hub_the_custom_logo(); ?>
              </div>
              <div class="col-lg-7 col-md-7 align-self-center">
                <?php if(get_theme_mod('gamers_hub_site_title_text',true) != ''){ ?>
                  <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php }?>
                <?php $gamers_hub_description = get_bloginfo( 'description', 'display' );
                if ( $gamers_hub_description || is_customize_preview() ) : ?>
                  <?php if(get_theme_mod('gamers_hub_site_tagline_text',false) != ''){ ?>
                    <p class="site-description"><?php echo esc_html($gamers_hub_description); ?></p>
                  <?php }?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="col-lg-8 align-self-center pl-0">
        <div class="row top-bar">
          <div class="col-lg-4 col-md-4 col-12 email align-self-center">
            <?php if( get_theme_mod( 'gamers_hub_mail' ) != '') { ?>
                <span class="mr-2"><i class="fas fa-envelope-open mr-2"></i><?php echo esc_html( get_theme_mod('gamers_hub_mail')); ?></span>
              <?php } ?>
          </div>
          <div class="col-lg-8 col-md-8 align-self-center">
            <div class="row">
              <div class="col-lg-6 col-md-6 text-md-right col-12 align-self-center">
                <div class="social-media">
                  <?php if( get_theme_mod( 'gamers_hub_facebook_url' ) != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'gamers_hub_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'gamers_hub_twitter_url' ) != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'gamers_hub_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'gamers_hub_instagram_url' ) != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'gamers_hub_instagram_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'gamers_hub_youtube_url' ) != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'gamers_hub_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'gamers_hub_pint_url' ) != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'gamers_hub_pint_url','' ) ); ?>"><i class="fab fa-pinterest"></i></a>
                  <?php } ?>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 text-lg-right text-md-right col-12 align-self-center">
                <div class="log-btn">
                    <span><?php if( get_theme_mod( 'gamers_hub_login_button_link' ) != '' || get_theme_mod( 'gamers_hub_login_button' ) != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'gamers_hub_login_button_link','' ) ); ?>" class="register-btn"><?php echo esc_html( get_theme_mod( 'gamers_hub_login_button','' ) ); ?></a>
                  <?php } ?></span>
                  <span><?php if( get_theme_mod( 'gamers_hub_sign_up_button_link' ) != '' || get_theme_mod( 'gamers_hub_sign_up_button' ) != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'gamers_hub_sign_up_button_link','' ) ); ?>" class="login-btn"><?php echo esc_html( get_theme_mod( 'gamers_hub_sign_up_button','' ) ); ?></a>
                  <?php } ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row top-header p-2">
          <div class="col-lg-10 col-md-6 align-self-center">
            <?php get_template_part( 'template-parts/navigation/site', 'nav' ); ?>
          </div>
          <div class="col-lg-2 col-md-6 text-lg-center text-md-right search-box align-self-center">
            <?php if(get_theme_mod('gamers_hub_search_icon',false) != ''){ ?>
  		        	<button class="search_btn"><i class="fas fa-search"></i></button>
  		        <?php }?>
          </div>
          <div class="search_outer">
  	      	<div class="search_inner">
  	        	<?php get_search_form(); ?>
  	        </div>
        	</div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
