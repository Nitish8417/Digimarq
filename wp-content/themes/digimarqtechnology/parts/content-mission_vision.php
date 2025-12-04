<?php
if (!empty($section_data)) :
    $upload_icon  = $section_data['upload_icon'] ?? null;
    $upload_icon1 = $section_data['upload_icon1'] ?? null;
    $heading      = $section_data['heading'] ?? '';
    $heading1     = $section_data['heading1'] ?? '';
    $sub_title    = $section_data['sub_title'] ?? '';
    $sub_title1   = $section_data['sub_title1'] ?? '';
?>

<style>
.mission-vision {
    padding: clamp(60px, 7vw, 110px) 0;
    background: #f8f9fb;
}

.mission-vision__grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: clamp(24px, 4vw, 36px);
}

.mission-vision__card {
    position: relative;
    background: #fff;
    border-radius: 32px;
    padding: 36px 32px 40px;
    box-shadow: 0 25px 60px rgba(15, 23, 42, 0.08);
    border: 1px solid rgba(15, 23, 42, 0.04);
    overflow: hidden;
}

.mission-vision__card::after {
    content: '';
    position: absolute;
    inset: 18px;
    border-radius: 24px;
    border: 1px solid rgba(15, 23, 42, 0.06);
    pointer-events: none;
}

.mission-vision__media {
    width: 94px;
    height: 94px;
    margin-bottom: 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.9) 35%, rgba(255, 97, 60, 0.15));
    box-shadow: inset 0 0 12px rgba(0, 0, 0, 0.08);
}

.mission-vision__media img {
    width: 70px;
    height: 70px;
    object-fit: cover;
    border-radius: 50%;
}

.mission-vision__title {
    font-size: 1.45rem;
    margin-bottom: 14px;
    color: #0f172a;
}

.mission-vision__text {
    color: #5b6270;
    line-height: 1.7;
    font-size: 1rem;
}

.mission-vision__badge {
    position: absolute;
    top: 24px;
    right: 24px;
    padding: 6px 14px;
    border-radius: 999px;
    font-size: 0.85rem;
    font-weight: 600;
    color: #fff;
    background: linear-gradient(120deg, #ff613c, #ff8765);
}
</style>

<section class="mission-vision" aria-label="<?php esc_attr_e('Mission and Vision', 'digimarqtechnology'); ?>">
    <div class="container">
        <div class="mission-vision__grid">
            <article class="mission-vision__card" itemscope itemtype="https://schema.org/CreativeWork">
                <span class="mission-vision__badge"><?php esc_html_e('Mission', 'digimarqtechnology'); ?></span>
                <?php if (!empty($upload_icon['url'])) : ?>
                    <div class="mission-vision__media">
                        <img src="<?php echo esc_url($upload_icon['url']); ?>" alt="<?php echo esc_attr($upload_icon['alt'] ?? $heading); ?>" loading="lazy" />
                    </div>
                <?php endif; ?>
                <?php if ($heading) : ?>
                    <h3 class="mission-vision__title" itemprop="headline"><?php echo esc_html($heading); ?></h3>
                <?php endif; ?>
                <?php if ($sub_title) : ?>
                    <p class="mission-vision__text" itemprop="text"><?php echo esc_html($sub_title); ?></p>
                <?php endif; ?>
            </article>

            <article class="mission-vision__card" itemscope itemtype="https://schema.org/CreativeWork">
                <span class="mission-vision__badge"><?php esc_html_e('Vision', 'digimarqtechnology'); ?></span>
                <?php if (!empty($upload_icon1['url'])) : ?>
                    <div class="mission-vision__media">
                        <img src="<?php echo esc_url($upload_icon1['url']); ?>" alt="<?php echo esc_attr($upload_icon1['alt'] ?? $heading1); ?>" loading="lazy" />
                    </div>
                <?php endif; ?>
                <?php if ($heading1) : ?>
                    <h3 class="mission-vision__title" itemprop="headline"><?php echo esc_html($heading1); ?></h3>
                <?php endif; ?>
                <?php if ($sub_title1) : ?>
                    <p class="mission-vision__text" itemprop="text"><?php echo esc_html($sub_title1); ?></p>
                <?php endif; ?>
            </article>
        </div>
    </div>
</section>

<?php endif; ?>