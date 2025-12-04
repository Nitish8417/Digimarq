<style>
.industries-section {
    position: relative;
    padding: clamp(80px, 10vw, 150px) 0;
    background: #ffffff;
    color: #0b1524;
    overflow: hidden;
}





.industries-section .container {
    max-width: var(--container-max-width);
    width: var(--container-width-lg);
    margin: 0 auto;
    padding: 0 var(--container-padding-sm);
    position: relative;
    z-index: 1;
}

.industries-header {
    text-align: center;
    max-width: 900px;
    margin: 0 auto clamp(50px, 6vw, 80px);
}

.industries-kicker {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 6px 18px;
    border-radius: 999px;
    border: 1px solid rgba(19, 130, 209, 0.25);
    background: rgba(19, 130, 209, 0.07);
    color: #1382d1;
    font-size: 0.85rem;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    font-weight: 600;
}

.industries-header h2 {
    font-size: clamp(2.6rem, 5vw, 4rem);
    font-weight: 800;
    color: #0b1524;
    margin: 20px 0 16px;
    line-height: 1.2;
}

.industries-header p {
    font-size: clamp(1.05rem, 2vw, 1.2rem);
    color: rgba(11, 21, 36, 0.75);
    line-height: 1.7;
    margin: 0 auto;
}

.industries-divider {
    width: 140px;
    height: 4px;
    border-radius: 999px;
    margin: 32px auto 0;
    background: linear-gradient(90deg, rgba(19, 130, 209, 0), #1382d1, rgba(19, 130, 209, 0));
}

.industries-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 24px;
    margin-top: clamp(50px, 5vw, 70px);
}

.industry-card {
    background: #ffffff;
    border: 1.5px solid rgba(19, 130, 209, 0.15);
    border-radius: 20px;
    padding: 28px 24px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 16px;
    transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.35s cubic-bezier(0.4, 0, 0.2, 1), border-color 0.35s ease;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.industry-card::after {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: inherit;
    background: linear-gradient(120deg, rgba(19, 130, 209, 0.08), transparent 70%);
    opacity: 0;
    transition: opacity 0.35s ease;
}

.industry-card:hover {
    transform: translateY(-10px) scale(1.01);
    border-color: #1382d1;
    box-shadow: 0 25px 60px rgba(19, 130, 209, 0.18);
}

.industry-card:hover::after {
    opacity: 1;
}

.industry-card > * {
    position: relative;
    z-index: 1;
}

.industry-icon {
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 16px;
    background: rgba(19, 130, 209, 0.08);
    transition: transform 0.35s ease, background 0.35s ease;
}

.industry-card:hover .industry-icon {
    transform: scale(1.08) rotate(4deg);
    background: #1382d1;
}

.industry-icon svg {
    width: 30px;
    height: 30px;
    stroke: #1382d1;
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: stroke 0.35s ease;
}

.industry-card:hover .industry-icon svg {
    stroke: #ffffff;
}

.industry-name {
    font-size: 1.1rem;
    font-weight: 600;
    color: #0b1524;
    margin: 0;
    line-height: 1.4;
}

.industry-card:hover .industry-name {
    color: #1382d1;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .industries-grid {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }
}

@media (max-width: 768px) {
    .industries-section {
        padding: clamp(60px, 8vw, 100px) 0;
    }

    .industries-grid {
        gap: 18px;
    }

    .industry-card {
        padding: 24px 20px;
    }

    .industry-icon {
        width: 52px;
        height: 52px;
    }
}

@media (max-width: 520px) {
    .industries-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>

<section class="industries-section" id="industries" aria-label="Industries We Serve">
    <div class="container">
        <div class="industries-header">
            <span class="industries-kicker">Industries</span>
            <h2>Industries We Serve</h2>
            <p>
                We deliver digital innovation across industries — crafting impactful designs, scalable technology, and result-driven marketing campaigns that help brands grow smarter and faster.
            </p>
            <div class="industries-divider" aria-hidden="true"></div>
        </div>

        <div class="industries-grid">
            <!-- Healthcare -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Healthcare">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                        <line x1="12" y1="8" x2="12" y2="16"/>
                        <line x1="8" y1="12" x2="16" y2="12"/>
                    </svg>
                </div>
                <h3 class="industry-name">Healthcare</h3>
            </div>

            <!-- Social Media -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Social Media">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="8" r="3"/>
                        <path d="M12 14v7"/>
                        <path d="M5 12h14"/>
                        <circle cx="6" cy="16" r="2"/>
                        <circle cx="18" cy="16" r="2"/>
                        <circle cx="12" cy="21" r="2"/>
                    </svg>
                </div>
                <h3 class="industry-name">Social Media</h3>
            </div>

            <!-- Aerospace & Defence -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Aerospace & Defence">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <path d="M9 9l3 3 3-3"/>
                        <path d="M12 12v6"/>
                    </svg>
                </div>
                <h3 class="industry-name">Aerospace & Defence</h3>
            </div>

            <!-- Restaurant -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Restaurant">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="8" r="6"/>
                        <path d="M8 14h8l1 6H7z"/>
                        <path d="M10 10h4M11 7h2"/>
                    </svg>
                </div>
                <h3 class="industry-name">Restaurant</h3>
            </div>

            <!-- Fitness -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Fitness">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="5" r="3"/>
                        <path d="M12 8v14"/>
                        <path d="M8 12l4-4 4 4"/>
                        <path d="M16 12H8"/>
                    </svg>
                </div>
                <h3 class="industry-name">Fitness</h3>
            </div>

            <!-- Insurtech -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Insurtech">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <line x1="12" y1="8" x2="12" y2="12"/>
                        <line x1="12" y1="16" x2="12.01" y2="16"/>
                        <path d="M8 11h8"/>
                    </svg>
                </div>
                <h3 class="industry-name">Insurtech</h3>
            </div>

            <!-- Banking -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Banking">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M3 21h18"/>
                        <path d="M3 10h18M5 6l7-4 7 4"/>
                        <path d="M4 10v11M20 10v11"/>
                        <rect x="8" y="14" width="8" height="4" rx="1"/>
                    </svg>
                </div>
                <h3 class="industry-name">Banking</h3>
            </div>

            <!-- Sports -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Sports">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                        <circle cx="12" cy="12" r="2"/>
                    </svg>
                </div>
                <h3 class="industry-name">Sports</h3>
            </div>

            <!-- Education -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Education">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                        <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                        <path d="M12 5v6"/>
                    </svg>
                </div>
                <h3 class="industry-name">Education</h3>
            </div>

            <!-- Fintech -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Fintech">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <rect x="3" y="4" width="18" height="16" rx="2"/>
                        <line x1="7" y1="8" x2="17" y2="8"/>
                        <line x1="7" y1="12" x2="17" y2="12"/>
                        <path d="M12 16h5"/>
                        <circle cx="9" cy="16" r="1"/>
                    </svg>
                </div>
                <h3 class="industry-name">Fintech</h3>
            </div>

            <!-- Industrial Manufacturing -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Industrial Manufacturing">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                        <path d="M6 11h12M6 15h12"/>
                        <path d="M8 1v4M16 1v4"/>
                    </svg>
                </div>
                <h3 class="industry-name">Industrial Manufacturing</h3>
            </div>

            <!-- Telecom -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Telecom">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/>
                        <path d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4z"/>
                        <path d="M12 1v6M12 17v6M23 12h-6M7 12H1"/>
                    </svg>
                </div>
                <h3 class="industry-name">Telecom</h3>
            </div>

            <!-- E-Commerce -->
            <div class="industry-card" tabindex="0" role="button" aria-label="E-Commerce">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <circle cx="9" cy="21" r="1"/>
                        <circle cx="20" cy="21" r="1"/>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
                        <path d="M8 8h15"/>
                    </svg>
                </div>
                <h3 class="industry-name">E-Commerce</h3>
            </div>

            <!-- Energy & Utilities -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Energy & Utilities">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M9 21h6"/>
                        <path d="M12 3v18"/>
                        <path d="M5 12H2"/>
                        <path d="M22 12h-3"/>
                        <path d="M6.34 6.34L4.93 4.93"/>
                        <path d="M19.07 19.07l-1.41-1.41"/>
                        <path d="M6.34 17.66L4.93 19.07"/>
                        <path d="M19.07 4.93l-1.41 1.41"/>
                        <path d="M12 1v6M12 17v6"/>
                    </svg>
                </div>
                <h3 class="industry-name">Energy & Utilities</h3>
            </div>

            <!-- Oil & Gas -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Oil & Gas">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>
                        <circle cx="12" cy="7" r="1.5"/>
                        <circle cx="12" cy="12" r="1.5"/>
                        <circle cx="12" cy="17" r="1.5"/>
                    </svg>
                </div>
                <h3 class="industry-name">Oil & Gas</h3>
            </div>

            <!-- Petrochemical -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Petrochemical">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M9 2v6M15 2v6M5 10h14M4 10h16l-1 10H5z"/>
                        <path d="M8 14h8"/>
                        <path d="M10 18h4"/>
                        <circle cx="7" cy="16" r="1"/>
                        <circle cx="17" cy="16" r="1"/>
                    </svg>
                </div>
                <h3 class="industry-name">Petrochemical</h3>
            </div>

            <!-- Real Estate -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Real Estate">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M3 21h18"/>
                        <path d="M5 21V7l8-4v18"/>
                        <path d="M19 21V11l-6-4"/>
                        <path d="M9 9v0M9 12v0M9 15v0M9 18v0"/>
                        <path d="M13 13h4v4h-4z"/>
                    </svg>
                </div>
                <h3 class="industry-name">Real Estate</h3>
            </div>

            <!-- Construction -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Construc.industries-section::aftertion">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M3 21h18"/>
                        <path d="M5 21V7l8-4v18"/>
                        <path d="M19 21V11l-6-4"/>
                        <line x1="9" y1="9" x2="9" y2="21"/>
                        <line x1="9" y1="12" x2="15" y2="12"/>
                        <line x1="9" y1="15" x2="15" y2="15"/>
                        <line x1="9" y1="18" x2="15" y2="18"/>
                        <path d="M13 8h2v2h-2z"/>
                    </svg>
                </div>
                <h3 class="industry-name">Construction</h3>
            </div>

            <!-- Travel -->
            <div class="industry-card" tabindex="0" role="button" aria-label="Travel">
                <div class="industry-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                        <path d="M8 20l4-6 4 6"/>
                        <path d="M6 14l6-4 6 4"/>
                    </svg>
                </div>
                <h3 class="industry-name">Travel</h3>
            </div>
        </div>
    </div>
</section>

