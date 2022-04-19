<?php
/**
 * Template Name: Tea reviews layout
 * Template Post Type:teas
 * 
 */
get_header();
?>
    <main></main>
    <div>
        <!-- Showing the featuerd image-->

    <?php if(has_post_thumnbnail()); ?>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="featured image">
    <?php endif; ?>
    </div>
    <div>
    <!-- The remainer of the content--> 
    <?php
        if(have_posts()) : while(have_posts()) : the_post();?>
        <h1><?php the_title(); ?></h1>
        <?php the_content();?>
        <?php endwhile; endif;?>
    </div>
<?php get_footer(); ?>