<?php
require_once __DIR__ . '/config.php';
?>
    <!-- Regulatory & Information Footer -->
    <footer class="app-footer">
        <!-- Statutory Disclaimer Section (Rule 36, Bar Council of India) -->
        <div class="footer-disclaimer-box">
            <div class="disclaimer-container">
                <div class="disclaimer-title">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="12" y1="8" x2="12" y2="12"/>
                        <line x1="12" y1="16" x2="12.01" y2="16"/>
                    </svg>
                    <span>Statutory Disclaimer (Rule 36, Bar Council of India)</span>
                </div>
                <p class="disclaimer-text">
                    This website is maintained by S&amp;V Associates for informational purposes only and does not constitute an advertisement, personal communication, solicitation, invitation, or inducement of any kind under Rule 36 of the Bar Council of India Rules. The content on this website does not constitute formal legal advice. Transmitting information via this website, email, or digital messaging does not create an advocate-client relationship. Such a relationship is established only upon formal acceptance of an engagement by the Firm.
                </p>
            </div>
        </div>

        <!-- Main Footer Links & Locations -->
        <div class="footer-main">
            <div class="footer-grid">
                <!-- Col 1: Brand Info -->
                <div>
                    <div class="footer-brand-title">S&amp;V ASSOCIATES</div>
                    <div class="footer-brand-sub">Advocates &amp; Legal Consultants</div>
                    <p class="footer-brand-desc">
                        A litigation-focused law firm established in May 2000, providing comprehensive trial and appellate representation across courts and specialized tribunals in Kerala.
                    </p>
                </div>

                <!-- Col 2: Quick Links -->
                <div>
                    <div class="footer-col-title">Quick Links</div>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About S&amp;V Associates</a></li>
                        <li><a href="practice-areas.php">Practice Areas</a></li>
                        <li><a href="team.php">Our Team</a></li>
                        <li><a href="courts.php">Courts &amp; Forums</a></li>
                        <li><a href="contact.php">Offices &amp; Contact</a></li>
                        <li><a href="disclaimer.php">Disclaimer &amp; Privacy</a></li>
                    </ul>
                </div>

                <!-- Col 3: Office Locations -->
                <div>
                    <div class="footer-col-title">Office Locations</div>
                    <div class="footer-contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <div>
                            <strong style="color:#ffffff; display:block; margin-bottom:2px;">Ernakulam Office (High Court)</strong>
                            3rd Floor, Adv. M. M. Mathew Building, Opp. Gate No. 2, High Court of Kerala, Ernakulam.
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <div>
                            <strong style="color:#ffffff; display:block; margin-bottom:2px;">North Paravur Office</strong>
                            1st Floor, Municipal Shopping Complex, Opp. PNB, Main Road, North Paravur – 683513.
                        </div>
                    </div>
                </div>

                <!-- Col 4: Primary Contact -->
                <div>
                    <div class="footer-col-title">Direct Inquiries</div>
                    <div class="footer-contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="16" x="2" y="4" rx="2"/>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                        </svg>
                        <div>
                            <span style="display:block; font-size:0.75rem; color:#8b95a2; text-transform:uppercase;">Email</span>
                            <a href="mailto:<?php echo PRIMARY_EMAIL; ?>" style="color:#ffffff;"><?php echo PRIMARY_EMAIL; ?></a>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <div>
                            <span style="display:block; font-size:0.75rem; color:#8b95a2; text-transform:uppercase;">Phone / WhatsApp</span>
                            <a href="tel:+919633552910" style="color:#ffffff;">+91 9633552910</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom Strip -->
            <div class="footer-bottom">
                <div>&copy; <?php echo date('Y'); ?> S&amp;V Associates. Established May 2000. All Rights Reserved.</div>
                <div>Litigation Practice &bull; Ernakulam &amp; North Paravur, Kerala</div>
            </div>
        </div>
    </footer>
    </div> <!-- Close app-main -->

    <!-- Scripts -->
    <script src="assets/js/main.js"></script>
</body>
</html>
