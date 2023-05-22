<?php
/**
 * Template part for displaying blog section
 *
 * @package Gamers Hub
 * @subpackage gamers_hub
 */

?>

<section id="static-blog">
  <div class="container">
    <?php if( get_theme_mod('gamers_hub_blog_tittle') != ''){ ?>
      <h3 class="mt-5"><?php echo esc_html(get_theme_mod('gamers_hub_blog_tittle','')); ?></h3>
    <?php }?>
    <?php if( get_theme_mod('gamers_hub_blog_sub_tittle') != ''){ ?>
      <p><?php echo esc_html(get_theme_mod('gamers_hub_blog_sub_tittle','')); ?></p>
    <?php }?>
    <div class="row mt-5">
        <?php
          $post_category = get_theme_mod('gamers_hub_our_fund_section_category');
          if($post_category){
            $page_query = new WP_Query(array( 'category_name' => esc_html( $post_category ,'gamers-hub')));?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
              <div class="col-lg-4 col-md-6 col-sm-6 fun-box">
                <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                <div class="fund-box mb-4">
                  <h5 class="mb-0 mt-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          }
        ?>
      </div>
  </div>
</section>
