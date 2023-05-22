<?php
/**
 * Template part for displaying slider section
 *
 * @package Gamers Hub
 * @subpackage gamers_hub
 */

?>

<?php if( get_theme_mod( 'gamers_hub_slider_arrows') != '') { ?>

<section id="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <?php $gamers_hub_slide_pages = array();
      for ( $gamers_hub_count = 1; $gamers_hub_count <= 4; $gamers_hub_count++ ) {
        $gamers_hub_mod = intval( get_theme_mod( 'gamers_hub_slider_page' . $gamers_hub_count ));
        if ( 'page-none-selected' != $gamers_hub_mod ) {
          $gamers_hub_slide_pages[] = $gamers_hub_mod;
        }
      }
      if( !empty($gamers_hub_slide_pages) ) :
        $gamers_hub_args = array(
          'post_type' => 'page',
          'post__in' => $gamers_hub_slide_pages,
          'orderby' => 'post__in'
        );
        $gamers_hub_query = new WP_Query( $gamers_hub_args );
        if ( $gamers_hub_query->have_posts() ) :
          $i = 1;
    ?>
    <div class="carousel-inner" role="listbox">
      <?php  while ( $gamers_hub_query->have_posts() ) : $gamers_hub_query->the_post(); ?>
        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
          <img src="<?php esc_url(the_post_thumbnail_url('full')); ?>"/>
          <div class="carousel-caption">
            <div class="inner_carousel">
              <h2><?php the_title(); ?></h2>
              <p><?php $gamers_hub_excerpt = get_the_excerpt();echo esc_html( gamers_hub_string_limit_words( $gamers_hub_excerpt,15 ) ); ?></p>
              <div class="more-btn">
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('Explore More','gamers-hub'); ?></a>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile;
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
    endif;?>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
    </a>
  </div>
  <div class="clearfix"></div>
</section>

<?php } ?>
