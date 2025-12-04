<?php
/*
Template Name: Services
*/
get_header();

$args = array(
    'post_type'      => 'services',
    'posts_per_page' => -1,
    'order'          => 'ASC'
);

$the_query = new WP_Query($args);
?>



<?php
$orders = get_field('section_data');
if ($orders):
    foreach ($orders as $order):
        if (!empty($order)):
            set_query_var('section_data', $order);
            get_template_part('parts/content', $order['acf_fc_layout']);
        endif;
    endforeach;
endif;
?>



<?php if ($the_query->have_posts()) : ?>
    <section class="services-block">
        <div class="container">
            <div class="top-main-heading">
                <span class="font-18 color-span">services</span>
                <h2 class="font-40">Our Services</h2>
            </div>
            <div class="main-services">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="services-update">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="sub-services-info">
                            <h2 class="p-25 color-b"><?php the_title(); ?></h2>
                            <p> <?php
                            $content = wp_trim_words(get_the_content(), 15, '...');
                            echo $content;
                            ?></p>
                           
                             <a href="<?php the_permalink(); ?>" class="read-more-btn font-16">Read More</a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.', 'textdomain'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>