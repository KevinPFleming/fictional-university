<?php get_header();

// For individual page posts or pages
# Either # or // for php comments

while(have_posts()) {
    the_post(); ?>

    <div class="page-banner">
        <!-- php echo get_theme_file_uri() function traces the entire file to present location  -->
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>)"></div>
            <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title"><?php the_title(); ?></h1>
                    <div class="page-banner__intro">
                        <p>WILL REPLACE LATER</p>
                    </div>
            </div>
    </div>

    <div class="container container--narrow page-section">
        <?php  
        # Below is set up to on yield TRUE if the parent-ID is there- the # will be greater than 0.
        $theParent = wp_get_post_parent_id(get_the_ID());
        if($theParent) { ?>
            <!-- metabox class is breadcrumbs -->
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                    <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true">                      
                    </i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span>
                </p>
            </div> 
        <?php } 


        // BELOW:  only want to diplay the menu if you are on a ChildPage-hence the if-statement 
        ?>
        <?php 
        $testArray = get_pages(array(
            'child_of' = get_the_ID();
        )); //this function only returns pages in memory, not display

        if($theParent or $testArray ) { ?>
            <div class="page-links">
            <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
                <ul class="min-list">
                <?php 
                if($theParent) {
                    $findChildrenOf = $theParent;
                } else {
                    $findChildrenOf = get_the_ID();
                }
                //function needs Associative Array- this also actually lists the pages on screen
                wp_list_pages(array(
                    'title_li' => NULL,
                    'child_of' => $findChildrenOf,
                    'sort_column' => 'menu_order';
                ));
                
                ?>
                </ul>
            </div>
        <?php  } ?>

        <div class="generic-content">
            <?php the_content(); ?>
        </div>
    </div>

<?php }

get_footer();

?>