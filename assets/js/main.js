/**
 * S&V ASSOCIATES - Advocates & Legal Consultants
 * Client-Side JavaScript Logic
 */

document.addEventListener('DOMContentLoaded', () => {
    // Mobile Sidebar Navigation Toggle
    const mobileToggle = document.getElementById('mobileNavToggle');
    const sidebar = document.getElementById('appSidebar');
    const overlay = document.getElementById('sidebarOverlay');

    if (mobileToggle && sidebar) {
        mobileToggle.addEventListener('click', () => {
            sidebar.classList.toggle('open');
            if (overlay) overlay.classList.toggle('active');
        });
    }

    if (overlay) {
        overlay.addEventListener('click', () => {
            sidebar.classList.remove('open');
            overlay.classList.remove('active');
        });
    }

    // Auto-dismiss alerts after 6 seconds
    const alerts = document.querySelectorAll('.alert-message');
    alerts.forEach(alert => {
        setTimeout(() => {
            alert.style.opacity = '0';
            alert.style.transition = 'opacity 0.5s ease';
            setTimeout(() => alert.remove(), 500);
        }, 6000);
    });

    // Form Client-side validation check
    const enquiryForm = document.getElementById('enquiryForm');
    if (enquiryForm) {
        enquiryForm.addEventListener('submit', (e) => {
            const consentCheckbox = document.getElementById('bci_consent');
            if (consentCheckbox && !consentCheckbox.checked) {
                e.preventDefault();
                alert('Please acknowledge the disclaimer checkbox regarding the advocate-client relationship before submitting.');
                consentCheckbox.focus();
            }
        });
    }
});
