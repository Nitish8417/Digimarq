<style>
.clients-showcase {
    position: relative;
    padding: clamp(70px, 8vw, 130px) 0;
    background: #050b1f;
    color: #fff;
    overflow: hidden;
    isolation: isolate;
}

.clients-showcase::after {
    content: '';
    position: absolute;
    inset: 0;
    z-index: 0;
    background: radial-gradient(circle at 10% 20%, rgba(64, 132, 255, 0.35), transparent 50%),
                radial-gradient(circle at 80% 0%, rgba(255, 113, 93, 0.25), transparent 50%);
}

.clients-showcase .container {
    position: relative;
    z-index: 1;
    max-width: var(--container-max-width);
    width: var(--container-width-lg);
    margin: 0 auto;
    padding: 0 var(--container-padding-sm);
}

.clients-headline {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: clamp(24px, 4vw, 50px);
    align-items: center;
    margin-bottom: clamp(40px, 5vw, 70px);
}

.clients-headline h2 {
    font-size: clamp(2.1rem, 4vw, 3.4rem);
    line-height: 1.15;
    margin: 0;
}

.clients-headline p {
    margin: 0;
    color: rgba(255, 255, 255, 0.75);
    line-height: 1.8;
}

.clients-metrics {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 16px;
    margin-bottom: clamp(32px, 3vw, 50px);
}

.clients-metrics .metric {
    padding: 18px 20px;
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 18px;
    text-align: left;
    background: rgba(255, 255, 255, 0.02);
}

.metric strong {
    display: block;
    font-size: 1.8rem;
    color: #fff;
}

.metric span {
    font-size: 0.95rem;
    color: rgba(255, 255, 255, 0.7);
}

.clients-slider {
    position: relative;
    overflow: hidden;
    margin-top: clamp(30px, 4vw, 50px);
    padding: 10px 0;
}

.clients-track {
    display: flex;
    gap: 24px;
    width: calc(200% + 24px);
    animation: clientsScroll 28s linear infinite;
}

.clients-track:hover {
    animation-play-state: paused;
}

.logo-chip {
    min-width: 180px;
    height: 84px;
    border-radius: 24px;
    border: 1px solid rgba(255, 255, 255, 0.18);
    background: rgba(5, 11, 31, 0.55);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 24px;
    text-decoration: none;
    transition: transform 0.25s ease, border-color 0.25s ease, color 0.25s ease, background 0.25s ease;
    color: rgba(255, 255, 255, 0.75);
}

.logo-chip:hover {
    transform: translateY(-6px);
    border-color: rgba(255, 255, 255, 0.45);
    color: #fff;
    background: rgba(255, 255, 255, 0.05);
}

.logo-chip img {
    max-height: 38px;
    width: auto;
    filter: grayscale(100%) brightness(1.4);
    transition: filter 0.25s ease;
}

.logo-chip:hover img {
    filter: grayscale(0%) brightness(1);
}

@keyframes clientsScroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

@media (max-width: 640px) {
    .clients-headline {
        grid-template-columns: 1fr;
    }
}
</style>

<section class="clients-showcase" id="clients">
    <div class="container">
        <div class="clients-headline">
            <h2>Clients who trust us to build the future.</h2>
            <p>
                From SaaS disruptors to enterprise IT teams, we partner with ambitious brands that expect research-driven
                strategy, modern engineering, and measurable growth with every release.
            </p>
        </div>

        <div class="clients-metrics">
            <div class="metric">
                <strong>120+</strong>
                <span>product & platform launches</span>
            </div>
            <div class="metric">
                <strong>98%</strong>
                <span>retention across managed accounts</span>
            </div>
            <div class="metric">
                <strong>14</strong>
                <span>countries served this year</span>
            </div>
        </div>

        <div class="clients-slider" aria-label="Client logos carousel">
            <div class="clients-track">
                <a class="logo-chip" href="https://digimarqtechnology.com/wp-content/uploads/2025/08/WhatsApp-Image-2025-07-25-at-23.56.35-1.jpeg" target="_blank" rel="noopener" aria-label="View logo 1 (opens asset)">
                    <img src="https://digimarqtechnology.com/wp-content/uploads/2025/08/WhatsApp-Image-2025-07-25-at-23.56.35-1.jpeg" alt="Client logo 1" loading="lazy" />
                </a>
                <a class="logo-chip" href="https://digimarqtechnology.com/wp-content/uploads/2025/08/WhatsApp-Image-2025-07-25-at-23.55.53-3.jpeg" target="_blank" rel="noopener" aria-label="View logo 2 (opens asset)">
                    <img src="https://digimarqtechnology.com/wp-content/uploads/2025/08/WhatsApp-Image-2025-07-25-at-23.55.53-3.jpeg" alt="Client logo 2" loading="lazy" />
                </a>
                <a class="logo-chip" href="https://digimarqtechnology.com/wp-content/uploads/2025/08/WhatsApp-Image-2025-07-25-at-23.55.53-2.jpeg" target="_blank" rel="noopener" aria-label="View logo 3 (opens asset)">
                    <img src="https://digimarqtechnology.com/wp-content/uploads/2025/08/WhatsApp-Image-2025-07-25-at-23.55.53-2.jpeg" alt="Client logo 3" loading="lazy" />
                </a>
                <a class="logo-chip" href="https://digimarqtechnology.com/wp-content/uploads/2025/07/WhatsApp-Image-2025-07-25-at-23.55.22.jpeg" target="_blank" rel="noopener" aria-label="View logo 4 (opens asset)">
                    <img src="https://digimarqtechnology.com/wp-content/uploads/2025/07/WhatsApp-Image-2025-07-25-at-23.55.22.jpeg" alt="Client logo 4" loading="lazy" />
                </a>
                <a class="logo-chip" href="https://digimarqtechnology.com/wp-content/uploads/2025/07/WhatsApp-Image-2025-07-25-at-23.55.21.jpeg" target="_blank" rel="noopener" aria-label="View logo 5 (opens asset)">
                    <img src="https://digimarqtechnology.com/wp-content/uploads/2025/07/WhatsApp-Image-2025-07-25-at-23.55.21.jpeg" alt="Client logo 5" loading="lazy" />
                </a>

                <!-- Duplicate logos for seamless loop -->
                <a class="logo-chip" href="https://digimarqtechnology.com/wp-content/uploads/2025/08/WhatsApp-Image-2025-07-25-at-23.56.35-1.jpeg" target="_blank" rel="noopener" aria-label="View logo 1 (opens asset)">
                    <img src="https://digimarqtechnology.com/wp-content/uploads/2025/08/WhatsApp-Image-2025-07-25-at-23.56.35-1.jpeg" alt="Client logo 1" loading="lazy" />
                </a>
                <a class="logo-chip" href="https://digimarqtechnology.com/wp-content/uploads/2025/08/WhatsApp-Image-2025-07-25-at-23.55.53-3.jpeg" target="_blank" rel="noopener" aria-label="View logo 2 (opens asset)">
                    <img src="https://digimarqtechnology.com/wp-content/uploads/2025/08/WhatsApp-Image-2025-07-25-at-23.55.53-3.jpeg" alt="Client logo 2" loading="lazy" />
                </a>
                <a class="logo-chip" href="https://digimarqtechnology.com/wp-content/uploads/2025/08/WhatsApp-Image-2025-07-25-at-23.55.53-2.jpeg" target="_blank" rel="noopener" aria-label="View logo 3 (opens asset)">
                    <img src="https://digimarqtechnology.com/wp-content/uploads/2025/08/WhatsApp-Image-2025-07-25-at-23.55.53-2.jpeg" alt="Client logo 3" loading="lazy" />
                </a>
                <a class="logo-chip" href="https://digimarqtechnology.com/wp-content/uploads/2025/07/WhatsApp-Image-2025-07-25-at-23.55.22.jpeg" target="_blank" rel="noopener" aria-label="View logo 4 (opens asset)">
                    <img src="https://digimarqtechnology.com/wp-content/uploads/2025/07/WhatsApp-Image-2025-07-25-at-23.55.22.jpeg" alt="Client logo 4" loading="lazy" />
                </a>
                <a class="logo-chip" href="https://digimarqtechnology.com/wp-content/uploads/2025/07/WhatsApp-Image-2025-07-25-at-23.55.21.jpeg" target="_blank" rel="noopener" aria-label="View logo 5 (opens asset)">
                    <img src="https://digimarqtechnology.com/wp-content/uploads/2025/07/WhatsApp-Image-2025-07-25-at-23.55.21.jpeg" alt="Client logo 5" loading="lazy" />
                </a>
            </div>
        </div>
    </div>
</section>

