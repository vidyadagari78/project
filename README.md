# S&V ASSOCIATES — Advocates & Legal Consultants

A modern, responsive, litigation-focused law firm website built with **PHP**, bespoke **CSS**, and modern web design aesthetics.

---

## 🏛️ About The Firm
- **Firm Name**: S&V Associates (Advocates & Legal Consultants)
- **Established**: May 2000
- **Offices**:
  - **Ernakulam (High Court)**: 3rd Floor, Adv. M. M. Mathew Building, Opposite Gate No. 2, High Court of Kerala, Ernakulam.
  - **North Paravur**: 1st Floor, Municipal Shopping Complex, Opposite Punjab National Bank, Main Road, North Paravur – 683513.
- **Key Practice Areas**:
  - Motor Accident Claims (MACT)
  - Civil Litigation & Property Disputes
  - Criminal Defence & Litigation
  - Family & Matrimonial Matters
  - High Court, Appellate & Constitutional Practice
  - Commercial, Corporate & Advisory Services

---

## 🚀 Key Features
- **Persistent Elegant Left Sidebar**: Custom dark theme with active page indicators, institutional crest, and foundation badges.
- **Dynamic PHP Pages**: Modular header, sidebar, topbar, and regulatory footer.
- **High Court & Jurisdictional Coverage Hierarchy**: Interactive judicial forum breakdown.
- **Consultation & Enquiry Handler**: Backend PHP processor that validates and stores submissions to `data/enquiries.json`.
- **Bar Council Compliance**: Integrated statutory disclaimer compliant with **Rule 36 of the Bar Council of India Rules**.
- **Responsive Layout**: Designed for mobile devices, tablets, laptops, and wide desktop screens.

---

## 📁 Directory Structure
```
├── index.php                  # Home Page (Hero, Practice Focus, Foundation Pillars)
├── about.php                  # About Us (History, Founder Profiles, Counsel, Courts)
├── practice-areas.php         # Practice Areas (Detailed numbered items 01-06)
├── team.php                   # Our Team & Leadership
├── courts.php                 # Courts & Specialized Forums
├── contact.php                # Offices & Consultation Enquiry Form
├── disclaimer.php             # BCI Rule 36 Statutory Disclaimer
├── includes/
│   ├── config.php             # Global configuration, contacts & metadata
│   ├── header.php             # Document head, fonts, stylesheet links
│   ├── sidebar.php            # Left sidebar navigation component
│   ├── topbar.php             # Location indicator & top navigation
│   └── footer.php             # BCI notice, office locations & copyright
├── assets/
│   ├── css/
│   │   └── style.css          # Master stylesheet
│   ├── js/
│   │   └── main.js            # Mobile drawer & client-side validation
│   └── images/                # High-res photography & assets
└── data/
    └── enquiries.json         # Enquiry storage
```

---

## 🛠️ How to Run Locally

1. Ensure **PHP 8.x** is installed on your system.
2. In the project directory, run:
```bash
php -S localhost:8000
```
3. Open your browser and navigate to:
```
http://localhost:8000/
```
