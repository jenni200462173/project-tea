<?php
/** 
* Template Name: Home Template
* template Post Type: page
 **/
get_header();
?>
        <main>
           <?php
            
           ?> 
           <section style="background-image:url('<?php the_field("masthead_image"); ?>')">
            <div>
                <h1><?php the_field('masthead_title'); ?></h1>
                <h2><?php the_field('masthead_sub-heading') ?></h2>
            </div>
           </section>
            <section>
                <div>
                    <h3><?php the_field('tittle'); ?></h3>
                    <?php the_field('text_content_row_one'); ?>
                </div>
                <div>
                    <img src="<?php the_field('row_one_image'); ?>" alt="sample image">
                </div>
            </section>
               
            <section>
            <a href="<?php the_field('link_destination');?>"><?php the_field('link_text'); ?> </a>
            </section>
            <section>
                <?php the_field('form'); ?>
            <section>
        </main>
        <section>
            <?php
                $args = array(
                    'post_type'     =>'post',
                    'post_status'   =>'publish',
                    'category_name' =>'post',
                    'posts_per_page'=> 3,
                );
                $arr_posts = new WP_QUERY($args);
                if ($arr_posts->have_posts()) :
                    while ($arr_posts->have_posts()) :
                        $arr_posts->the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php
                    //display the featured image
                    if(has_post_thumnbnail()) :
                        the_post_thumbnail();
                    endif;
                ?>
                <header class="entry-header">
                    <h3><?php the_title(); ?> </h3>
                </header>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
                </article>
                <?php
                 endwhile;
                endif;
                ?>
        </section>
        <section class="tea-review-list">
            <article>
                <?php
                $args2 = array('post-type' =>'teas','posts_per_page' => 12);
                $the_quey = new WP_QUERY($args2);
                if($the_quey->have_post()) :
                    while($the_query->have_posts()) : $the_query->the_post();
                 ?>
                 <div>
                     <?php 
                     if(has_post_thumnbnail()): ?>
                     <img src="?php the_post_thumbnail_url(); ?>" alt="featured image">
                       <?php endif; ?>
                       <h3> <?php the_tittle(); ?></h3>
                       <?php 
                       the_excerpt(); 
                       the_category();
                       ?>
                       <a href="<?php the_permalink();?>">Read More </a>
                 </div>
                 <?php
                    endwhile;
                    wp_reset_postdata();
                    else:
                    endif;
                 ?>
            </article>
        </section>
        <!--Shortcode--> 
        <section>
            <h3>Tea Reviews</h3>
            <?php echo do_shortcode('[teas]') ?>
            <h3>Try the latest teas</h3>
            <?php echo do_shortcode('[teas]') ?>
        </section>
<?php 
    get_footer();
?>