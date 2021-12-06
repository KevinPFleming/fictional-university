<?php get_header();

// This will display a single post with its own url

while(have_posts()) {
    the_post(); ?>
    <h2><?php the_title() ?></h2>
    <?php the_content();
}

get_footer();

?>

