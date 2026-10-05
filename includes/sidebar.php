<?php
require_once __DIR__ . '/config.php';
?>
<aside class="app-sidebar" id="appSidebar">
    <div class="sidebar-top">
        <!-- Brand Logo -->
        <div class="sidebar-logo">
            <a href="index.php">
                <div class="logo-main">S<span>&amp;</span>V</div>
                <div class="logo-sub">ASSOCIATES</div>
                <div class="logo-tagline">ADVOCATES &amp;<br>LEGAL CONSULTANTS</div>
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php" class="<?php echo is_active_page('index.php'); ?>">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                            <polyline points="9 22 9 12 15 12 15 22"/>
                        </svg>
                        <span>HOME</span>
                    </a>
                </li>
                <li>
                    <a href="about.php" class="<?php echo is_active_page('about.php'); ?>">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                        <span>ABOUT US</span>
                    </a>
                </li>
                <li>
                    <a href="practice-areas.php" class="<?php echo is_active_page('practice-areas.php'); ?>">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/>
                            <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/>
                            <path d="M7 21h10"/>
                            <path d="M12 3v18"/>
                        </svg>
                        <span>PRACTICE AREAS</span>
                    </a>
                </li>
                <li>
                    <a href="team.php" class="<?php echo is_active_page('team.php'); ?>">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                        <span>OUR TEAM</span>
                    </a>
                </li>
                <li>
                    <a href="courts.php" class="<?php echo is_active_page('courts.php'); ?>">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="22" y2="22"/>
                            <line x1="6" x2="6" y1="18"/>
                            <line x1="10" x2="10" y1="18"/>
                            <line x1="14" x2="14" y1="18"/>
                            <line x1="18" x2="18" y1="18"/>
                            <polygon points="12 2 20 7 4 7"/>
                        </svg>
                        <span>COURTS &amp; FORUMS</span>
                    </a>
                </li>
                <li>
                    <a href="contact.php" class="<?php echo is_active_page('contact.php'); ?>">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="16" x="2" y="4" rx="2"/>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                        </svg>
                        <span>CONTACT</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Established May 2000 Bottom Badge -->
    <div class="sidebar-bottom">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 22h16M4 2h16M6 2v20M18 2v20M10 6v12M14 6v12"/>
        </svg>
        <div class="est-text-top">ESTABLISHED</div>
        <div class="est-text-val">MAY 2000</div>
    </div>
</aside>
