<?php
require_once __DIR__ . '/config.php';
?>
<header class="top-nav-bar">
    <div style="display:flex; align-items:center; gap:16px;">
        <button class="mobile-nav-toggle" id="mobileNavToggle" aria-label="Toggle Navigation" style="display:none; background:none; border:none; cursor:pointer;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#111417" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        </button>
        <div class="top-location-badge">
            <svg viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
            </svg>
            <span>ERNAKULAM</span>
            <span class="sep">|</span>
            <span>NORTH PARAVUR</span>
        </div>
    </div>

    <!-- Top Horizontal Links (As shown across pages in the mockup) -->
    <ul class="top-menu-links">
        <li><a href="about.php" class="<?php echo is_active_page('about.php'); ?>">ABOUT US</a></li>
        <li><a href="practice-areas.php" class="<?php echo is_active_page('practice-areas.php'); ?>">PRACTICE AREAS</a></li>
        <li><a href="team.php" class="<?php echo is_active_page('team.php'); ?>">OUR TEAM</a></li>
        <li><a href="courts.php" class="<?php echo is_active_page('courts.php'); ?>">COURTS &amp; FORUMS</a></li>
        <li><a href="contact.php" class="<?php echo is_active_page('contact.php'); ?>">CONTACT</a></li>
    </ul>
</header>
