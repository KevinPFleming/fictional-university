<?php 

get_header(); ?>

    <div class="page-banner">
        <!-- php echo get_theme_file_uri() function traces the entire file to present location  -->
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>)"></div>
            <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title">Welcome to our Blog.</h1>
                    <div class="page-banner__intro">
                        <p>Keep up with our latest News.</p>
                    </div>
            </div>
    </div>

    <div class="container container--narrow page-section">
        <?php 
        
        while(have_posts()) {
            the_post(); ?>
            <div class="post-item">
              <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              
              <div class="metabox">
                <p>Posted By <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', ') ?></p>
              </div>

              <div class="generic-content">
                <?php the_excerpt(); ?>
                <p><a class="btn btn--dark-orange" href="<?php the_permalink(); ?>">Continue Reading &raquo;</a></p>
                <!-- &raquo will create a double arrow character -->
              </div>
            </div>

      <?php   } ?>
        
        
    </div>

<?php get_footer();


?>

