<?php
require_once __DIR__ . '/config.php';
?>
    <!-- Regulatory & Information Footer -->
    <footer class="app-statutory-footer">
        <div class="footer-inner-wrapper">
            
            <!-- Statutory Disclaimer Section (Rule 36, Bar Council of India) -->
            <div class="disclaimer-head">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="12" y1="8" x2="12" y2="12"/>
                    <line x1="12" y1="16" x2="12.01" y2="16"/>
                </svg>
                <span>Statutory Disclaimer (Rule 36, Bar Council of India)</span>
            </div>
            <p class="disclaimer-body">
                This website is maintained by S&amp;V Associates for informational purposes only and does not constitute an advertisement, personal communication, solicitation, invitation, or inducement of any kind under Rule 36 of the Bar Council of India Rules. The content on this website does not constitute formal legal advice. Transmitting information via this website, email, or digital messaging does not create an advocate-client relationship. Such a relationship is established only upon formal acceptance of an engagement by the Firm.
            </p>

            <!-- Main Footer Grid -->
            <div class="footer-main-grid">
                <!-- Col 1: Brand Info -->
                <div>
                    <div class="footer-col-h" style="font-size:0.9rem; color:#ffffff;">S&amp;V ASSOCIATES</div>
                    <div style="font-size:0.68rem; letter-spacing:1.5px; text-transform:uppercase; color:var(--gold); font-weight:700; margin-bottom:8px;">Advocates &amp; Legal Consultants</div>
                    <p class="footer-col-p">
                        A litigation-focused law firm established in May 2000, providing comprehensive trial and appellate representation across courts and specialized tribunals in Kerala.
                    </p>
                </div>

                <!-- Col 2: Quick Links -->
                <div>
                    <div class="footer-col-h">Quick Links</div>
                    <ul class="footer-links-list">
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
                    <div class="footer-col-h">Office Locations</div>
                    <div class="footer-loc-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        <div>
                            <strong style="color:#ffffff; display:block;">Ernakulam Office (High Court)</strong>
                            3rd Floor, Adv. M. M. Mathew Building, Opp. Gate No. 2, High Court of Kerala.
                        </div>
                    </div>
                    <div class="footer-loc-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        <div>
                            <strong style="color:#ffffff; display:block;">North Paravur Office</strong>
                            1st Floor, Municipal Shopping Complex, Opp. PNB, Main Road – 683513.
                        </div>
                    </div>
                </div>

                <!-- Col 4: Primary Contact -->
                <div>
                    <div class="footer-col-h">Direct Inquiries</div>
                    <div class="footer-loc-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        <div>
                            <span style="font-size:0.65rem; text-transform:uppercase; color:#64748b; display:block;">Email</span>
                            <a href="mailto:<?php echo PRIMARY_EMAIL; ?>" style="color:#ffffff;"><?php echo PRIMARY_EMAIL; ?></a>
                        </div>
                    </div>
                    <div class="footer-loc-item">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <div>
                            <span style="font-size:0.65rem; text-transform:uppercase; color:#64748b; display:block;">Phone / WhatsApp</span>
                            <a href="tel:+919633552910" style="color:#ffffff;">+91 9633552910</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright Strip -->
            <div class="footer-bottom-strip">
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
