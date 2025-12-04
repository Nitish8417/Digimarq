<?php
if (!empty($section_data)):
    $background_image = isset($section_data['background_image']) ? $section_data['background_image'] : [];
    $main_title       = !empty($section_data['main_title']) ? $section_data['main_title'] : '';
    $values           = isset($section_data['values']) ? $section_data['values'] : [];
    $section_id       = !empty($section_data['section_id']) ? sanitize_title($section_data['section_id']) : sanitize_title($main_title ?: 'core-values');
    $title_id         = $section_id . '-title';
    $background_url   = !empty($background_image['url']) ? esc_url($background_image['url']) : '';
?>
<style>
section.core-values {
    background-image: linear-gradient(135deg, rgba(8, 15, 40, 0.85), rgba(11, 21, 54, 0.78)), url('<?php echo $background_url; ?>');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    position: relative;
    overflow: hidden;
    color: #fff;
}

section.core-values:before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(8, 12, 32, 0) 0%, rgba(0, 0, 0, 0.55) 100%);
    z-index: 1;
}

.core-values .main-core-values {
    display: flex;
    flex-direction: column;
    gap: 3rem;
    align-items: center;
    justify-content: center;
    padding: clamp(3rem, 4vw, 5rem) 0;
    position: relative;
    z-index: 2;
}

.core-values h2 {
    margin-bottom: 0.5rem;
    color: #fff;
    font-size: clamp(2rem, 1.5rem + 2vw, 3.5rem);
    text-align: center;
    letter-spacing: -0.5px;
}

.core-values .intro-text {
    text-align: center;
    font-size: 1rem;
    color: rgba(255, 255, 255, 0.9);
        margin-bottom: 40px;
}

.values-container {
        display: grid;
    grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
    gap: clamp(5rem, 4vw, 3.75rem);
    width: 100%;
}

.value-box {
    background: #fff;
    border-radius: 32px;
    padding: 4.5rem 2rem 2.5rem;
    box-shadow: 0 25px 45px rgba(15, 23, 42, 0.15);
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    position: relative;
    transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.value-box:focus-within,
.value-box:hover {
    transform: translateY(-12px);
    box-shadow: 0 30px 60px rgba(15, 23, 42, 0.25);
}

.value-box .icon {
    border-radius: 50%;
    position: absolute;
    top: 0;
    width: 96px;
    height: 96px;
    background: radial-gradient(circle at 30% 30%, #fff 0%, #f7f8fb 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    transform: translate(-50%, -50%);
    left: 50%;
    box-shadow: 0 12px 30px rgba(255, 97, 60, 0.35);
    border: 6px solid #fff;
}

.value-box .icon img {
    max-width: 56px;
    max-height: 56px;
    object-fit: contain;
}

.value-box h3 {
    margin: 1.5rem 0 0.75rem;
    font-size: 1.25rem;
    color: #0f172a;
}

.value-box p {
    color: #475569;
    line-height: 1.6;
    font-size: 0.95rem;
}

@media (max-width: 768px) {
    section.core-values {
        background-attachment: scroll;
    }
    .value-box {
        padding: 4rem 1.5rem 2rem;
    }
}
</style>

<section id="<?php echo esc_attr($section_id); ?>" class="core-values" aria-labelledby="<?php echo esc_attr($title_id); ?>">
    <div class="container">
        <div class="main-core-values">
            <div class="info-block intro-text">
                <h2 id="<?php echo esc_attr($title_id); ?>" class="font-40">
                    <?php echo esc_html($main_title); ?>
                </h2>
                <?php if (!empty($section_data['intro_copy'])): ?>
                    <p><?php echo wp_kses_post($section_data['intro_copy']); ?></p>
                <?php endif; ?>
            </div>
            <div class="values-container" role="list">
                <?php
                if (!empty($values)) {
                    foreach ($values as $row) {
                        $upload_image = isset($row['upload_image']) ? $row['upload_image'] : [];
                        $heading      = !empty($row['heading']) ? $row['heading'] : '';
                        $sub_heading  = !empty($row['sub_heading']) ? $row['sub_heading'] : '';
                        $highlight    = !empty($row['highlight_copy']) ? $row['highlight_copy'] : '';
                        $image_url    = !empty($upload_image['url']) ? esc_url($upload_image['url']) : '';
                        $image_alt    = !empty($upload_image['alt']) ? esc_attr($upload_image['alt']) : esc_attr($heading);
                        ?>
                        <article class="value-box" role="listitem" itemscope itemtype="https://schema.org/CreativeWork">
                            <div class="icon">
                                <?php if ($image_url): ?>
                                    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" loading="lazy" decoding="async" itemprop="image" />
                                <?php else: ?>
                                    <span aria-hidden="true">★</span>
                                <?php endif; ?>
                            </div>
                            <h3 itemprop="name"><?php echo esc_html($heading); ?></h3>
                            <?php if ($highlight): ?>
                                <p class="highlight" itemprop="alternateName"><?php echo esc_html($highlight); ?></p>
                            <?php endif; ?>
                            <p itemprop="description"><?php echo wp_kses_post($sub_heading); ?></p>
                        </article>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>