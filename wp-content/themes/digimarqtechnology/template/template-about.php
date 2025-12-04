<?php
/*
Template Name: About Us
*/
get_header(); ?>

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




<?php get_footer(); ?>