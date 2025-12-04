<style>
.digital-cta {
    position: relative;
    padding: clamp(70px, 8vw, 140px) 0;
    background: linear-gradient(135deg, #0b1124, #152850 50%, #1f3d8a);
    color: #fff;
    overflow: hidden;
}

.digital-cta::after {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 20% 20%, rgba(255, 255, 255, 0.25), transparent 55%),
                radial-gradient(circle at 80% 0%, rgba(255, 169, 120, 0.25), transparent 45%);
    opacity: 0.8;
    pointer-events: none;
}

.digital-cta .container {
    position: relative;
    z-index: 1;
    max-width: var(--container-max-width);
    width: var(--container-width-lg);
    margin: 0 auto;
    padding: 0 var(--container-padding-sm);
}

.cta-panel {
    border-radius: 40px;
    padding: clamp(40px, 6vw, 70px);
    background: rgba(8, 14, 35, 0.85);
    border: 1px solid rgba(255, 255, 255, 0.12);
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: clamp(24px, 3vw, 50px);
    align-items: center;
    box-shadow: 0 35px 80px rgba(3, 6, 12, 0.45);
}

.cta-panel h2 {
    margin: 0;
    font-size: clamp(2.1rem, 4vw, 3.2rem);
    line-height: 1.2;
}

.cta-panel p {
    margin: 12px 0 0;
    font-size: 1.05rem;
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.75);
}

.cta-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    justify-content: flex-start;
}

.cta-primary,
.cta-secondary {
    border-radius: 999px;
    padding: 14px 36px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
}

.cta-primary {
    background: #ff7b5f;
    color: #0b1124;
    box-shadow: 0 15px 35px rgba(255, 123, 95, 0.35);
}

.cta-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 20px 40px rgba(255, 123, 95, 0.5);
}

.cta-secondary {
    border: 1px solid rgba(255, 255, 255, 0.4);
    color: #fff;
    background: transparent;
}

.cta-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
}

@media (max-width: 640px) {
    .cta-panel {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .cta-actions {
        justify-content: center;
    }
}
</style>

<section class="digital-cta" id="cta">
    <div class="container">
        <div class="cta-panel">
            <div>
                <h2>Let’s design the next big leap for your IT brand.</h2>
                <p>
                    Tell us about the platform you’re scaling, the product you’re launching, or the marketing engine you need
                    fine-tuned. We’ll assemble the specialist team to make it real.
                </p>
            </div>

            <div class="cta-actions">
                <a class="cta-primary" href="mailto:hello@digimarqtechnology.com">
                    Start a Project
                </a>
                <a class="cta-secondary" href="tel:+18001234567">
                    Book a Strategy Call
                </a>
            </div>
        </div>
    </div>
</section>

