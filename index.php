<?php
$page_title = "S&V Associates | Advocates in Ernakulam & North Paravur | MACT, Civil, Criminal, Family & High Court";
$page_description = "S&V Associates is a litigation-focused law firm established in May 2000. With practice offices opposite the High Court of Kerala in Ernakulam and in North Paravur, the Firm provides legal representation and counsel before trial courts, appellate benches, and specialized tribunals across Kerala.";

require_once __DIR__ . '/includes/header.php';
?>

<!-- Home Content Container -->
<div class="home-main-wrapper">
    
    <!-- Hero Grid -->
    <section class="hero-layout-grid">
        <div class="hero-text-side">
            <h1 class="hero-main-h1">
                Advocacy.<br>
                Strategy.<br>
                <span class="res-word">Results.</span>
            </h1>

            <div class="hero-disciplines-tags">
                MOTOR ACCIDENT CLAIMS <span class="sep">|</span> CIVIL LITIGATION <span class="sep">|</span> CRIMINAL LITIGATION<br>
                FAMILY &amp; MATRIMONIAL MATTERS <span class="sep">|</span> HIGH COURT &amp; APPELLATE PRACTICE
            </div>

            <p class="hero-description-p">
                S&amp;V Associates is a litigation-focused law firm established in May 2000. With practice offices opposite the High Court of Kerala in Ernakulam and in North Paravur, the Firm provides legal representation and counsel before trial courts, appellate benches, and specialized tribunals across Kerala.
            </p>

            <div class="hero-button-row">
                <a href="practice-areas.php" class="btn-burgundy-fill">
                    <span>EXPLORE PRACTICE AREAS</span>
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
                <a href="contact.php" class="btn-burgundy-border">
                    <span>OFFICE LOCATIONS &amp; CONTACT</span>
                    <svg viewBox="0 0 24 24" fill="currentColor" width="13" height="13"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                </a>
            </div>
        </div>

        <!-- Right Visual Arc with Birds -->
        <div class="hero-visual-side">
            <svg class="birds-silhouette" viewBox="0 0 100 80" fill="#2d3748">
                <path d="M10,20 Q20,12 30,20 Q40,12 50,20 Q40,16 30,22 Q20,16 10,20 Z" />
                <path d="M55,35 Q62,28 70,35 Q78,28 85,35 Q78,32 70,37 Q62,32 55,35 Z" transform="scale(0.7) translate(20, 10)" />
                <path d="M25,50 Q32,44 40,50 Q48,44 55,50 Q48,47 40,52 Q32,47 25,50 Z" transform="scale(0.5) translate(40, 30)" />
            </svg>
            <div class="high-court-arch-frame">
                <img src="assets/images/high-court.jpg" alt="High Court of Kerala">
            </div>
        </div>
    </section>

    <!-- Our Practice Areas Title & 5 Columns Grid -->
    <section class="practice-section-wrap">
        <div class="practice-section-title-line">OUR PRACTICE AREAS</div>

        <div class="five-practice-columns">
            <!-- 1. MACT -->
            <div class="col-card-unit">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                    <path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.5 2.8C2.1 10.9 2 11.2 2 11.5V16c0 .6.4 1 1 1h2"/>
                    <circle cx="7" cy="17" r="2"/>
                    <path d="M9 17h6"/>
                    <circle cx="17" cy="17" r="2"/>
                </svg>
                <h3 class="col-card-h3">Motor Accident Claims (MACT)</h3>
                <p class="col-card-p">Compensation claims, liability disputes &amp; appeals before the High Court of Kerala.</p>
            </div>

            <!-- 2. Civil Litigation -->
            <div class="col-card-unit">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                    <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/>
                    <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/>
                    <path d="M7 21h10"/>
                    <path d="M12 3v18"/>
                </svg>
                <h3 class="col-card-h3">Civil Litigation</h3>
                <p class="col-card-p">Suits, title &amp; partition, injunctions, contracts, rent control matters, execution petitions &amp; <strong>second appeals.</strong></p>
            </div>

            <!-- 3. Criminal Defence -->
            <div class="col-card-unit">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                    <path d="m14 13-7.5 7.5c-.83.83-2.17.83-3 0 0 0 0 0 0 0a2.12 2.12 0 0 1 0-3L11 10"/>
                    <path d="m16 16 6-6"/>
                    <path d="m8 8 6-6"/>
                    <path d="m9 7 8 8"/>
                    <path d="m21 11-8-8"/>
                </svg>
                <h3 class="col-card-h3">Criminal Defence &amp; Litigation</h3>
                <p class="col-card-p">Bail, NI Act matters, quashing petitions under Section 482 Cr.P.C.</p>
            </div>

            <!-- 4. Family & Matrimonial -->
            <div class="col-card-unit">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
                <h3 class="col-card-h3">Family &amp; Matrimonial Matters</h3>
                <p class="col-card-p">Divorce, maintenance, child custody, guardianship &amp; domestic violence.</p>
            </div>

            <!-- 5. Appellate & Constitutional -->
            <div class="col-card-unit">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                    <path d="M4 22h16M4 2h16M6 2v20M18 2v20M10 6v12M14 6v12"/>
                </svg>
                <h3 class="col-card-h3">Appellate &amp; Constitutional Practice</h3>
                <p class="col-card-p">Writs under Article 226, appeals &amp; tribunals representations before NCLT, DRT &amp; KAT.</p>
            </div>
        </div>
    </section>

    <!-- Bottom Dark Foundation Bar -->
    <div class="bottom-dark-bar">
        <!-- 1. Foundational Strength -->
        <div class="dark-bar-col">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                <path d="M4 22h16M4 2h16M6 2v20M18 2v20M10 6v12M14 6v12"/>
            </svg>
            <div>
                <div class="dark-col-title">FOUNDATIONAL STRENGTH</div>
                <div class="dark-col-desc">Established in May 2000 by Late Adv. V. A. Anil, Adv. K. Shaju Varghese and Adv. A. V. Vinu.</div>
            </div>
        </div>

        <!-- 2. Multi-Stage Representation -->
        <div class="dark-bar-col">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                <polyline points="14 2 14 8 20 8"/>
                <line x1="16" y1="13" x2="8" y2="13"/>
                <line x1="16" y1="17" x2="8" y2="17"/>
            </svg>
            <div>
                <div class="dark-col-title">MULTI-STAGE REPRESENTATION</div>
                <div class="dark-col-desc">Structuring litigation strategy from initial pleadings and evidence to appellate review and execution of decrees.</div>
            </div>
        </div>

        <!-- 3. Direct Access -->
        <div class="dark-bar-col">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                <circle cx="12" cy="10" r="3"/>
            </svg>
            <div>
                <div class="dark-col-title">DIRECT ACCESS</div>
                <div class="dark-col-desc">Accessible consultation offices in Ernakulam and North Paravur.</div>
            </div>
        </div>
    </div>

</div>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
