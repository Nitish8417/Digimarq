<style>
.testimonials-suite {
    position: relative;
    padding: clamp(70px, 8vw, 140px) 0;
    background: #f4f7fb;
}

.testimonials-suite .container {
    max-width: var(--container-max-width);
    width: var(--container-width-lg);
    margin: 0 auto;
    padding: 0 var(--container-padding-sm);
}

.testimonials-suite__intro {
    text-align: center;
    max-width: 760px;
    margin: 0 auto clamp(48px, 5vw, 70px);
}

.testimonials-suite__intro span {
    text-transform: uppercase;
    letter-spacing: 0.35em;
    font-size: 0.85rem;
    font-weight: 700;
    color: var(--background-button-color);
}

.testimonials-suite__intro h2 {
    font-size: clamp(2rem, 4vw, 3.2rem);
    margin: 16px 0;
    color: #111a2c;
}

.testimonials-suite__intro p {
    margin: 0;
    color: #5a6271;
    line-height: 1.8;
}

.testimonial-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: clamp(20px, 3vw, 35px);
}

.testimonial-card {
    background: #fff;
    border-radius: 28px;
    padding: 34px;
    box-shadow: 0 25px 60px rgba(16, 33, 64, 0.12);
    border: 1px solid rgba(16, 33, 64, 0.05);
    position: relative;
    overflow: hidden;
}

.testimonial-card::after {
    content: '';
    position: absolute;
    inset: 12px;
    border-radius: 22px;
    border: 1px dashed rgba(16, 33, 64, 0.08);
    pointer-events: none;
}

.testimonial-quote {
    position: relative;
    font-size: 1.05rem;
    line-height: 1.8;
    color: #2c3447;
    margin-bottom: 28px;
}

.testimonial-quote::before {
    content: '“';
    font-size: 3rem;
    color: var(--background-button-color);
    position: absolute;
    top: -10px;
    left: -10px;
}

.testimonial-author {
    position: relative;
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.testimonial-author strong {
    font-size: 1rem;
    color: #111a2c;
}

.testimonial-author span {
    font-size: 0.9rem;
    color: #5a6271;
}

@media (max-width: 640px) {
    .testimonial-card {
        padding: 28px;
    }
}
</style>

<section class="testimonials-suite" id="testimonials" aria-label="Client testimonials">
    <div class="container">
        <div class="testimonials-suite__intro">
            <span>Client Voices</span>
            <h2>“Partnering with a digital team that understands scale.”</h2>
            <p>
                Product owners, CMOs, and IT leaders count on us to ship reliable platforms, align growth marketing,
                and keep velocity high without sacrificing stability.
            </p>
        </div>

        <div class="testimonial-grid">
            <article class="testimonial-card">
                <p class="testimonial-quote">
                    “They rebuilt our SaaS onboarding in 10 weeks, cut activation friction by 42%, and gave our internal team code
                    we can iterate on without hand-holding.”
                </p>
                <div class="testimonial-author">
                    <strong>Ayesha Khan</strong>
                    <span>VP Product, StratusLink</span>
                </div>
            </article>

            <article class="testimonial-card">
                <p class="testimonial-quote">
                    “Digimarq made enterprise web performance feel effortless. The new experience is faster, lighter,
                    and already lifting demo requests across our core markets.”
                </p>
                <div class="testimonial-author">
                    <strong>Marc Rivera</strong>
                    <span>Head of Growth, Cordate Security</span>
                </div>
            </article>

            <article class="testimonial-card">
                <p class="testimonial-quote">
                    “From discovery to deployment, they felt like an extension of our engineering org. Transparent, strategic,
                    and relentless about quality.”
                </p>
                <div class="testimonial-author">
                    <strong>Priya Deshmukh</strong>
                    <span>Director of Technology, LumenWare</span>
                </div>
            </article>
        </div>
    </div>
</section>

