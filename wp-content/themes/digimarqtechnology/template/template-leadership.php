<?php
/*
Template Name: Leadership
*/
get_header();

$args = array(
    'post_type'      => 'leadership',
    'posts_per_page' => -1,
    'order'          => 'ASC'
);

$the_query = new WP_Query($args);
?>
<style>
    .main-leadership {
        display: flex;
        gap: 30px;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .leadership-update {
        background-color: #fff;
        border-radius: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        position: relative;
        overflow: hidden;
        max-width: 350px;
        width: 100%;
    }

    .sub-leadership-info {
        width: 100%;
        padding: 15px 0px;
        color: #fff;
        position: relative;
        z-index: 2;
        background-image: linear-gradient(to top, #1d2327e6, #ff613ce0);
    }

    .post-thumbnail {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: auto;
        position: relative;
    }

    .socal-media-link {
        position: absolute;
        bottom: 0;
        display: none;
    }

    img.attachment-large.size-large.wp-post-image {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .leadership-update::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 0;
        background: linear-gradient(to top, #1818289c, rgba(0, 0, 0, 0));
        transition: height 0.8s ease;
        z-index: 1;
    }

    .leadership-update:hover::before {
        height: 100%;
    }

    .leadership-update:hover .socal-media-link {
        display: block;
        z-index: 1;
        transition: display 0.8s ease;
    }

    .sub-leadership-info p {
        font-size: var(--font-size-base);
    }

    .socal-media-link img {
        width: 24px;
        height: 24px;
        margin-top: 10px;
    }
</style>

<?php if ($the_query->have_posts()) : ?>
    <section class="leadership-block">
        <div class="container">
            <div class="top-main-heading">
                <span class="font-18 color-span">Leadership</span>
                <h2 class="font-40">Meet the DigiMarq Technology team</h2>
            </div>
            <div class="main-leadership">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="leadership-update">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('large'); ?>
                                <?php $social_media_image = get_field('socal_media_image'); ?>
                                <?php $socal_media_link = get_field('socal_media_link'); ?>
                                <div class="socal-media-link">
                                    <a href="<?php echo $socal_media_link; ?>">
                                    <img src="<?php echo esc_url($social_media_image['url']); ?>" alt="<?php echo esc_attr($social_media_image['alt']); ?>" />
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>




                        <div class="sub-leadership-info">
                            <h2 class="font-30"><?php the_title(); ?></h2>
                            <?php the_content(); ?>


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