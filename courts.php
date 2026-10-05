<?php
$page_title = "Courts & Forums | S&V Associates — Jurisdictions & Tribunals";
$page_description = "Overview of courts and specialized tribunals attended by S&V Associates across Kerala, including High Court of Kerala, District Courts, MACT, Family Courts, NCLT, DRT, and KAT.";

require_once __DIR__ . '/includes/header.php';
?>

<div class="page-container">
    
    <!-- Header Strip -->
    <div class="page-header-strip">
        <div>
            <h1 class="page-title-main">Courts &amp; Forums</h1>
            <div class="page-breadcrumb-sub">Home / Courts &amp; Forums</div>
        </div>
        <div class="page-header-thumb">
            <img src="assets/images/high-court.jpg" alt="High Court of Kerala">
        </div>
    </div>

    <!-- Interactive Jurisdictional Grid matching Panel 5 -->
    <div class="courts-interactive-canvas">
        
        <!-- Top Left: Appellate & Constitutional -->
        <div class="court-node-box" style="grid-column:1; grid-row:1;">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                <line x1="3" x2="21" y1="22" y2="22"/><line x1="6" x2="6" y1="18"/><line x1="10" x2="10" y1="18"/><line x1="14" x2="14" y1="18"/><line x1="18" x2="18" y1="18"/><polygon points="12 2 20 7 4 7"/>
            </svg>
            <div>
                <div class="court-node-title">Appellate &amp; Constitutional</div>
                <div class="court-node-desc">High Court of Kerala (Article 226/227), Matrimonial, Civil, Criminal and MACT Appeals.</div>
            </div>
        </div>

        <!-- Top Right: Trial & Civil Courts -->
        <div class="court-node-box" style="grid-column:3; grid-row:1;">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="M7 21h10"/><path d="M12 3v18"/>
            </svg>
            <div>
                <div class="court-node-title">Trial &amp; Civil Courts</div>
                <div class="court-node-desc">District &amp; Additional District Courts, Subordinate Courts, and Munsiff Courts.</div>
            </div>
        </div>

        <!-- Center Hexagon / Shield Emblem -->
        <div class="courts-center-hexagon">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="M7 21h10"/><path d="M12 3v18"/><path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"/>
            </svg>
            <p class="courts-center-p">
                We represent clients before a wide range of courts, tribunals and specialized forums across Kerala.
            </p>
        </div>

        <!-- Mid Left: Criminal Jurisdictions -->
        <div class="court-node-box" style="grid-column:1; grid-row:2;">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                <circle cx="6" cy="18" r="4"/><circle cx="18" cy="18" r="4"/><path d="M10 18h4"/><path d="M6 14V6a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8"/>
            </svg>
            <div>
                <div class="court-node-title">Criminal Jurisdictions</div>
                <div class="court-node-desc">District &amp; Sessions Courts, Judicial First Class Magistrate Courts (JFCM), and Fast Track Special Courts.</div>
            </div>
        </div>

        <!-- Mid Right: Specialized Forums -->
        <div class="court-node-box" style="grid-column:3; grid-row:2;">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                <rect width="20" height="14" x="2" y="7" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
            </svg>
            <div>
                <div class="court-node-title">Specialized Forums</div>
                <div class="court-node-desc">MACT, Family Courts, Rent Control Appellate Authorities, Gram Nyayalayas, NCLT, Kerala Bench, DRT (Ernakulam), and Kerala Administrative Tribunal (KAT).</div>
            </div>
        </div>

        <!-- Bottom Left: Tribunals — Commercial -->
        <div class="court-node-box" style="grid-column:1; grid-row:3;">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/>
            </svg>
            <div>
                <div class="court-node-title">Tribunals — Commercial</div>
                <div class="court-node-desc">NCLT Kochi Bench, DRT Ernakulam, and Kerala Administrative Tribunal (KAT).</div>
            </div>
        </div>

        <!-- Bottom Right: Administrative Tribunal -->
        <div class="court-node-box" style="grid-column:3; grid-row:3;">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                <path d="M4 22h16M4 2h16M6 2v20M18 2v20"/>
            </svg>
            <div>
                <div class="court-node-title">Administrative Tribunal</div>
                <div class="court-node-desc">Kerala Administrative Tribunal (KAT).</div>
            </div>
        </div>

    </div>

</div>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
