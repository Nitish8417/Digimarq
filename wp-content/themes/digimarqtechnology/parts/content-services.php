<?php
if (!empty($section_data)) :
    $background_image = $section_data['background_image'] ?? null;
    $top_title        = $section_data['top_title'] ?? '';
    $heading          = $section_data['heading'] ?? '';
    $discretion       = $section_data['discretion'] ?? '';

    $args = array(
        'post_type'      => 'services',
        'posts_per_page' => -1,
        'order'          => 'ASC',
    );
    $services_query = new WP_Query($args);
?>

<style>
.services-section {
    position: relative;
    padding: clamp(70px, 8vw, 140px) 0;
    background-size: cover;
    background-position: center;
    color: #fff;
    overflow: hidden;
}

.services-section::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(145deg, rgba(13, 18, 40, 0.94), rgba(34, 34, 62, 0.85));
}

.services-section .container {
    position: relative;
    z-index: 2;
}

.services-header {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 30px;
    align-items: center;
    margin-bottom: 55px;
}

.services-header__title span {
    display: block;
    text-transform: uppercase;
    letter-spacing: 0.35em;
    font-size: 0.85rem;
    font-weight: 600;
    color: #ffb199;
}

.services-header__title h2 {
    margin-top: 12px;
    font-size: clamp(2.3rem, 4vw, 3.8rem);
    color: #fff;
    line-height: 1.2;
}

.services-header__copy {
    color: rgba(255, 255, 255, 0.78);
    line-height: 1.7;
    font-size: 1rem;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
    gap: 28px;
}

.service-card {
    background: rgba(255, 255, 255, 0.07);
    border-radius: 32px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.08);
    display: flex;
    flex-direction: column;
    min-height: 380px;
    box-shadow: 0 35px 70px rgba(8, 12, 33, 0.45);
    transition: transform 0.35s ease, border-color 0.35s ease;
    position: relative;
}

.service-card:hover {
    transform: translateY(-8px);
    border-color: rgba(255, 193, 149, 0.5);
}

.service-card figure {
    margin: 0;
    overflow: hidden;
    max-height: 200px;
}

.service-card figure img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.4s ease;
}

.service-card:hover figure img {
    transform: scale(1.05);
}

.service-card__body {
    padding: 28px 30px 34px;
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.service-card__body h3 {
    margin: 0;
    font-size: 1.35rem;
    color: #fff;
}

.service-card__body p {
    color: rgba(255, 255, 255, 0.78);
    line-height: 1.8;
    margin: 0;
}

.service-card__cta {
    margin-top: auto;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    font-weight: 600;
    color: #ff9472;
}

.service-card__cta svg {
    width: 16px;
    height: 16px;
    transition: transform 0.2s ease;
}

.service-card__cta:hover svg {
    transform: translateX(4px);
}
</style>

<section class="services-section" style="<?php echo !empty($background_image['url']) ? "background-image: url('" . esc_url($background_image['url']) . "');" : ''; ?>" aria-label="<?php esc_attr_e('Our Services', 'digimarqtechnology'); ?>">
    <div class="container">
        <div class="services-header">
            <div class="services-header__title">
                <?php if ($top_title) : ?>
                    <span><?php echo esc_html($top_title); ?></span>
                <?php endif; ?>
                <?php if ($heading) : ?>
                    <h2><?php echo esc_html($heading); ?></h2>
                <?php endif; ?>
            </div>
            <?php if ($discretion) : ?>
                <div class="services-header__copy">
                    <?php echo wp_kses_post($discretion); ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($services_query->have_posts()) : ?>
            <div class="services-grid">
                <?php
                while ($services_query->have_posts()) :
                    $services_query->the_post();
                ?>
                    <article class="service-card" itemscope itemtype="https://schema.org/Service">
                        <?php if (has_post_thumbnail()) : ?>
                            <figure>
                                <?php the_post_thumbnail('large', array('itemprop' => 'image')); ?>
                            </figure>
                        <?php endif; ?>
                        <div class="service-card__body">
                            <h3 itemprop="name"><?php the_title(); ?></h3>
                            <p itemprop="description">
                                <?php echo esc_html(wp_trim_words(get_the_content(), 22, '…')); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="service-card__cta" itemprop="url">
                                <?php esc_html_e('Discover More', 'digimarqtechnology'); ?>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M5 12h14" />
                                    <path d="M12 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php else : ?>
            <p><?php esc_html_e('No services available at the moment.', 'digimarqtechnology'); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php endif; ?>