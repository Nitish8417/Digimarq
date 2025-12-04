<style>
.winning-process {
    position: relative;
    padding: clamp(70px, 8vw, 140px) 0;
    background:
        radial-gradient(circle at 15% 20%, rgba(255, 224, 208, 0.65), transparent 45%),
        radial-gradient(circle at 85% 10%, rgba(168, 202, 255, 0.65), transparent 40%),
        #f9f6f3;
    overflow: hidden;
    isolation: isolate;
}

.winning-process::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.25), transparent 55%);
    pointer-events: none;
    z-index: 0;
}

.winning-process .container {
    position: relative;
    z-index: 1;
    max-width: var(--container-max-width);
    width: var(--container-width-lg);
    margin: 0 auto;
    padding: 0 var(--container-padding-sm);
}

.winning-process__intro {
    max-width: 780px;
    text-align: left;
    margin-bottom: clamp(40px, 5vw, 70px);
}

.winning-process__kicker {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 14px;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    color: var(--background-button-color);
    font-weight: 700;
}

.winning-process__kicker .dot {
    font-size: 24px;
    line-height: 1;
}

.winning-process__intro h2 {
    margin-top: 18px;
    font-size: clamp(2.4rem, 4.5vw, 3.8rem);
    color: #0f1525;
    line-height: 1.2;
}

.winning-process__intro p {
    margin-top: 16px;
    font-size: 1.1rem;
    line-height: 1.8;
    color: #585f6f;
}

.winning-process__grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: clamp(20px, 2.5vw, 30px);
}

.winning-process__card {
    position: relative;
    padding: 32px 28px 36px;
    border-radius: 28px;
    background: #ffffff;
    border: 1px solid rgba(15, 21, 37, 0.08);
    box-shadow: 0 25px 60px rgba(15, 21, 37, 0.12);
    display: flex;
    flex-direction: column;
    gap: 18px;
    transition: transform 0.3s ease, border-color 0.3s ease;
}

.winning-process__card:hover {
    transform: translateY(-8px);
    border-color: var(--background-button-color);
}

.winning-process__icon {
    width: 56px;
    height: 56px;
    border-radius: 18px;
    background: linear-gradient(135deg, rgba(255, 149, 112, 0.18), rgba(255, 255, 255, 0.05));
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
}

.winning-process__card h3 {
    font-size: 1.35rem;
    margin: 0;
    color: #0f1525;
}

.winning-process__card p {
    margin: 0;
    line-height: 1.7;
    color: #5c6578;
}

@media (max-width: 640px) {
    .winning-process__card {
        padding: 28px;
    }

    .winning-process__grid {
        grid-template-columns: 1fr;
    }
}
</style>

<section class="winning-process" id="our-way" aria-label="Our Way of Making You Win">
    <div class="container">
        <div class="winning-process__intro">
            <span class="winning-process__kicker">
                <span class="dot" aria-hidden="true">•</span>
                Our Method
            </span>
            <h2>Our Way of Making You Win</h2>
            <p>
                We don’t believe in shortcuts — we believe in smart strategies, sharp designs, and strong execution.
                From brainstorming to breakthrough, every step we take is about one thing: helping your brand win online.
            </p>
        </div>

        <div class="winning-process__grid">
            <article class="winning-process__card">
                <div class="winning-process__icon" aria-hidden="true">💡</div>
                <h3>We Understand Before We Build</h3>
                <p>
                    Before we design, code, or create — we listen. We dive deep into your goals, audience, and competition
                    to build a plan that actually makes sense for your business.
                </p>
            </article>

            <article class="winning-process__card">
                <div class="winning-process__icon" aria-hidden="true">🎨</div>
                <h3>We Create With Purpose</h3>
                <p>
                    Our creative and technical teams work hand-in-hand to bring ideas to life — whether it’s a pixel-perfect design,
                    a high-performance website, or a campaign that clicks instantly.
                </p>
            </article>

            <article class="winning-process__card">
                <div class="winning-process__icon" aria-hidden="true">⚙️</div>
                <h3>We Execute With Precision</h3>
                <p>
                    From coding flawless websites to running ROI-driven marketing campaigns — we focus on doing things right, not just fast.
                    Quality, timelines, and transparency are our non-negotiables.
                </p>
            </article>

            <article class="winning-process__card">
                <div class="winning-process__icon" aria-hidden="true">📈</div>
                <h3>We Measure. Optimize. Repeat.</h3>
                <p>
                    We don’t stop at delivery — we track, test, and tweak until your digital performance hits its peak.
                    Because real success isn’t a project… it’s a process.
                </p>
            </article>
        </div>
    </div>
</section>

