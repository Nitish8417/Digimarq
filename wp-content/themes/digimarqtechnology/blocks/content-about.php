<style>
.about-section {
    position: relative;
    padding: 80px 0;
    background: linear-gradient(135deg, rgba(255, 97, 60, 0.08), rgba(27, 27, 27, 0.04));
    overflow: hidden;
}

.about-section:before {
    content: '';
    position: absolute;
    top: -40px;
    right: -60px;
    width: 220px;
    height: 220px;
    background: rgba(255, 97, 60, 0.12);
    filter: blur(35px);
    border-radius: 50%;
}

.about-section .container {
    position: relative;
    z-index: 2;
}

.about-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 50px;
    align-items: center;
}

.about-media {
    position: relative;
    width: 100%;
    max-width: 520px;
    margin: 0 auto;
}

.about-media .main-image {
    width: 100%;
    height: auto;
    aspect-ratio: 4 / 5;
    display: block;
    border-radius: 38px;
    object-fit: cover;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
}

.about-media .floating-card {
    position: absolute;
    bottom: 30px;
    left: -30px;
    background: #fff;
    border-radius: 20px;
    padding: 20px 24px;
    width: 230px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.floating-card span {
    display: block;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--background-button-color);
    margin-bottom: 6px;
    font-weight: 600;
}

.floating-card strong {
    font-size: 36px;
    color: var(--primary-color);
    display: block;
}

.floating-card small {
    color: var(--secondary-color);
}

.floating-card::after {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 20px;
    border: 1px solid rgba(255, 97, 60, 0.2);
    pointer-events: none;
}

.about-content span.kicker {
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 4px;
    color: var(--background-button-color);
    font-weight: 600;
}

.about-content h2 {
    font-size: clamp(32px, 4vw, 44px);
    line-height: 1.2;
    margin: 15px 0 20px;
    color: var(--primary-color);
}

.about-content p {
    color: var(--secondary-color);
    line-height: 1.8;
    margin-bottom: 18px;
}

.about-highlights {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 18px;
    margin: 30px 0 40px;
}

.about-highlights li {
    list-style: none;
    background: #fff;
    padding: 18px 20px;
    border-radius: 18px;
    display: flex;
    align-items: flex-start;
    gap: 12px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
}

.about-highlights svg {
    width: 26px;
    height: 26px;
    color: var(--background-button-color);
    flex-shrink: 0;
}

.about-highlights strong {
    display: block;
    color: var(--primary-color);
    margin-bottom: 4px;
}

.about-highlights span {
    color: var(--secondary-color);
    font-size: 14px;
}

.about-stats {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    padding-top: 25px;
    border-top: 1px solid rgba(0, 0, 0, 0.08);
}

.about-stats .stat {
    flex: 1;
    min-width: 140px;
}

.about-stats .stat strong {
    display: block;
    font-size: 36px;
    color: var(--primary-color);
}

.about-stats .stat span {
    color: var(--secondary-color);
    font-size: 14px;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.about-cta {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 14px 32px;
    border-radius: 999px;
    background: var(--primary-color);
    color: #fff;
    font-weight: 600;
    text-decoration: none;
    transition: 0.3s ease;
}

.about-cta svg {
    width: 18px;
    height: 18px;
}

.about-cta:hover {
    transform: translateX(4px);
    background: var(--background-button-color);
}

@media (max-width: 768px) {
    .about-section {
        padding: 60px 0;
    }

    .about-media .floating-card {
        position: relative;
        left: 0;
        bottom: -20px;
        width: 90%;
        margin: 0 auto;
    }

    .about-stats {
        flex-direction: column;
    }
}
</style>

<section class="about-section who-we-are">
    <div class="container">
        <div class="about-grid">
            <div class="about-content">
                <span class="kicker">Welcome to Intellious</span>
                <h2>Who we are</h2>
                <p>We design intelligent OSS/BSS ecosystems and build enterprise-ready digital products that help telecom and technology leaders modernize faster. Our experts bring together multi-cloud, AI/ML and low-latency mobility competencies to launch scalable platforms.</p>
                <p>Every engagement is anchored in transparency, rapid feedback loops and measurable business impact. We co-create roadmaps with clients, adapt quickly and keep teams aligned at every milestone.</p>

                <ul class="about-highlights">
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M19 21H5a2 2 0 0 1-2-2V7m18 0v12a2 2 0 0 1-2 2H5M16 3h5v5M3 8l5-5 13 13" />
                        </svg>
                        <div>
                            <strong>OSS/BSS Product Accelerators</strong>
                            <span>Composable architecture kits</span>
                        </div>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M4 4h16v16H4z" />
                            <path d="M9 9h6v6H9z" />
                        </svg>
                        <div>
                            <strong>Cloud &amp; Data Fabric</strong>
                            <span>Multi-cloud orchestration</span>
                        </div>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 6v6l4 2" />
                        </svg>
                        <div>
                            <strong>Agile Delivery Pods</strong>
                            <span>Dedicated cross-functional teams</span>
                        </div>
                    </li>
                </ul>

                <a href="/contact" class="about-cta">
                    Discover More
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M5 12h14" />
                        <path d="M12 5l7 7-7 7" />
                    </svg>
                </a>

                <div class="about-stats">
                    <div class="stat">
                        <strong>40+</strong>
                        <span>Domain Experts</span>
                    </div>
                    <div class="stat">
                        <strong>95%</strong>
                        <span>Repeat Engagements</span>
                    </div>
                    <div class="stat">
                        <strong>12</strong>
                        <span>Global Deployments</span>
                    </div>
                </div>
            </div>
            <div class="about-media">
                <img class="main-image" src="https://saddlebrown-worm-782999.hostingersite.com/wp-content/uploads/2024/11/1-600x800-1.jpg" alt="Intellious Team Collaboration">
                <div class="floating-card">
                    <span>Innovation Score</span>
                    <strong>4.9/5</strong>
                    <small>Rated by enterprise partners</small>
                </div>
            </div>
        </div>
    </div>
</section>

