<?php get_header(); ?>


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

<?php get_template_part('parts/content', 'our_way'); ?>
<?php get_template_part('parts/content', 'industries'); ?>
<?php get_template_part('parts/content', 'testimonials'); ?>
<?php get_template_part('parts/content', 'clients'); ?>
<?php get_template_part('parts/content', 'cta'); ?>




<?php get_footer(); ?>