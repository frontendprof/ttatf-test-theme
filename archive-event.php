<?php
    
    get_header(); ?>

    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ttatf-4.jpg'); ?>)"></div>
          <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title">All events </h1>
            <div class="page-banner__intro">
              <p>See what is happening in our campus.</p>
            </div>
          </div>
    </div>

    <div class="container container--narrow page-section"> 
      <?php while(have_posts()) {
        the_post(); ?>
        <div class="event-summary">
                <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                  <span class="event-summary__month"><?php the_time('M'); ?></span>
                  <span class="event-summary__day"><?php the_time('d'); ?></span>
                </a>
                <div class="event-summary__content">
                  <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                  <p><?php echo wp_trim_words(get_the_content(), 15); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Batafsil ...</a></p>
                </div>
              </div>
       <?php }
        echo paginate_links();
      ?>
    </div>


    
    
<?php 
    get_footer();

?>