<?php
if (!empty($section_data)) :
    $upload_image_ = $section_data['upload_image_'] ?? null;
    $child_image_  = $section_data['child_image_'] ?? null;
    $heading       = $section_data['heading'] ?? '';
    $sub_heading   = $section_data['sub_heading'] ?? '';
    $discretion    = $section_data['discretion'] ?? '';
    $button_link   = $section_data['button_link'] ?? '';
    $button_title  = $section_data['button_title'] ?? '';
?>

<style>
.about-section--dynamic {
    position: relative;
    padding: clamp(60px, 8vw, 110px) 0;
    overflow: hidden;
    background: radial-gradient(circle at 10% 20%, rgba(255, 97, 60, 0.12), transparent 45%),
                radial-gradient(circle at 80% 10%, rgba(47, 128, 237, 0.12), transparent 40%),
                #faf5f1;
}

.about-section--dynamic::after {
    content: '';
    position: absolute;
    inset: 0;
    pointer-events: none;
    background: linear-gradient(120deg, rgba(255, 255, 255, 0.15), transparent 55%);
}

.about-section--dynamic .container {
    position: relative;
    z-index: 1;
}

.about-grid {
    display: grid;
    grid-template-columns: minmax(0, 1.1fr) minmax(0, 0.9fr);
    gap: clamp(40px, 6vw, 80px);
    align-items: center;
}

.about-copy span.kicker {
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 0.35em;
    text-transform: uppercase;
    color: var(--background-button-color);
}

.about-copy h2 {
    font-size: clamp(34px, 5vw, 52px);
    line-height: 1.15;
    margin: 16px 0 18px;
    color: #1b212a;
}

.about-copy p {
    font-size: 17px;
    line-height: 1.8;
    color: #646c79;
    margin-bottom: 15px;
}

.about-copy p:last-of-type {
    margin-bottom: 28px;
}

.about-cta {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 32px;
    border-radius: 999px;
    font-weight: 600;
    color: #fff;
    background: #1b212a;
    box-shadow: 0 12px 30px rgba(27, 33, 42, 0.25);
    text-decoration: none;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.about-cta svg {
    width: 18px;
    height: 18px;
}

.about-cta:hover {
    transform: translateX(4px);
    box-shadow: 0 15px 35px rgba(255, 97, 60, 0.35);
    background: var(--background-button-color);
}

.about-media {
    position: relative;
    border-radius: 40px;
    padding: clamp(14px, 2vw, 22px);
    background: linear-gradient(140deg, rgba(27, 33, 42, 0.92), rgba(37, 52, 86, 0.92));
    box-shadow: 0 40px 90px rgba(16, 24, 40, 0.25);
}

.about-media::before {
    content: '';
    position: absolute;
    inset: 28px;
    border-radius: 30px;
    border: 1px solid rgba(255, 255, 255, 0.12);
    pointer-events: none;
}

.about-media .main-image {
    width: 100%;
    border-radius: 26px;
    aspect-ratio: 5 / 3.5;
    object-fit: cover;
    display: block;
}

.about-media .data-pill {
    position: absolute;
    left: clamp(20px, 4vw, 50px);
    bottom: clamp(20px, 4vw, 45px);
    padding: 12px 16px 12px 14px;
    border-radius: 18px;
    display: flex;
    align-items: center;
    gap: 14px;
    background: #fff;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
}

.data-pill img {
    width: 88px;
    height: 70px;
    border-radius: 12px;
    object-fit: cover;
}

.data-pill span {
    font-size: 14px;
    font-weight: 600;
    color: #1b212a;
}

.data-pill small {
    display: block;
    font-size: 12px;
    color: #7a8492;
}

@media (max-width: 992px) {
    .about-grid {
        grid-template-columns: 1fr;
    }

    .about-media {
        max-width: 520px;
        justify-self: center;
    }
}
</style>

<section class="about-section--dynamic who-we-are">
    <div class="container">
        <div class="about-grid">
            <div class="about-copy">
                <?php if ($heading) : ?>
                    <span class="kicker"><?php echo esc_html($heading); ?></span>
                <?php endif; ?>

                <?php if ($sub_heading) : ?>
                    <h2><?php echo wp_kses_post($sub_heading); ?></h2>
                <?php endif; ?>

                <?php if ($discretion) : ?>
                    <?php echo wpautop(wp_kses_post($discretion)); ?>
                <?php endif; ?>

                <?php if ($button_link && $button_title) : ?>
                    <a href="<?php echo esc_url($button_link); ?>" class="about-cta">
                        <?php echo esc_html($button_title); ?>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M5 12h14" />
                            <path d="M12 5l7 7-7 7" />
                        </svg>
                    </a>
                <?php endif; ?>
            </div>

            <?php if (!empty($upload_image_['url'])) : ?>
                <div class="about-media">
                    <img class="main-image"
                        src="<?php echo esc_url($upload_image_['url']); ?>"
                        alt="<?php echo esc_attr($upload_image_['alt'] ?? 'Featured image'); ?>" />

                    <?php if (!empty($child_image_['url'])) : ?>
                        <div class="data-pill">
                            <img
                                src="<?php echo esc_url($child_image_['url']); ?>"
                                alt="<?php echo esc_attr($child_image_['alt'] ?? 'Detail image'); ?>" />
                            <div>
                                <span><?php echo esc_html__('Live Insights', 'digimarqtechnology'); ?></span>
                                <small><?php echo esc_html__('AI + Analytics', 'digimarqtechnology'); ?></small>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php endif; ?>

