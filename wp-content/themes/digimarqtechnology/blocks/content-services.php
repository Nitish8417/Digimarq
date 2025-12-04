<style>
 
/* Header styles */
.services-header {
    display: flex;
    justify-content: space-between;
    width: 100%;
    align-items: center;
    margin-bottom: 40px;
}
.services-header h4 {
  font-size: 1.2rem;
  color: #444;
  margin-bottom: 0.5rem;
  position: relative;
}

.services-header .line {
  display: inline-block;
  width: 40px;
  height: 2px;
  background-color: #e63946;
  margin-left: 10px;
  vertical-align: middle;
}

.services-header h1 {
  font-size: 2.5rem;
  margin-bottom: 1rem;
  color: #111;
}

.services-header p {
  max-width: 700px;

}


</style>

<?php

$args = array(
    'post_type'      => 'services',
    'posts_per_page' => -1,
    'order'          => 'ASC'
);

$the_query = new WP_Query($args);

?>
<section class="services-section">
    <div class="container">
        <div class="services-header">
                <div class="info-block">
                    <span class="font-18 color-span">What We’re Offering <span class="line"></span></span>
                    <h2 class="font-30">Services we offer</h2>
                </div>
        <p>We have a diverse pool of expertise in offering a wide range of solutions in Outsourced Product Development, Application Development, Maintenance & Consulting.</p>
      </div>
      <div class="services-grid">
        <?php if ($the_query->have_posts()) : ?>
                        <div class="main-services">
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <div class="services-update">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="post-thumbnail">
                                            <?php the_post_thumbnail('large'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="sub-services-info">
                                        <h2 class="p-20 color-b"><?php the_title(); ?></h2>
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
            <?php else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.', 'textdomain'); ?></p>
            <?php endif; ?>
      </div>
    </div>
  </section>