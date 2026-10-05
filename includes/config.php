<?php
// S&V Associates - Global Configuration & Data

define('SITE_NAME', 'S&V ASSOCIATES');
define('SITE_TAGLINE', 'Advocates & Legal Consultants');
define('SITE_LOCATIONS', 'Ernakulam | North Paravur');
define('ESTABLISHED_YEAR', 'May 2000');

define('PRIMARY_EMAIL', 'advleosanjo@gmail.com');
define('PRIMARY_WHATSAPP', '+91 9633552910');
define('WHATSAPP_CLEAN', '919633552910');

// Office details
$offices = [
    'ernakulam' => [
        'name' => 'Ernakulam Office (High Court)',
        'building' => '3rd Floor, Adv. M. M. Mathew Building',
        'landmark' => 'Opposite Gate No. 2, High Court of Kerala',
        'city' => 'Ernakulam, Kerala',
        'full_address' => '3rd Floor, Adv. M. M. Mathew Building, Opposite Gate No. 2, High Court of Kerala, Ernakulam, Kerala',
        'phones' => [
            ['display' => '+91 9447292616', 'clean' => '+919447292616', 'name' => 'Adv. K. Shaju Varghese'],
            ['display' => '+91 9633552910', 'clean' => '+919633552910', 'name' => 'Adv. Leo Sanjo']
        ],
        'image' => 'assets/images/office-ernakulam.jpg',
        'maps_query' => 'High Court of Kerala, Ernakulam'
    ],
    'paravur' => [
        'name' => 'North Paravur Office',
        'building' => '1st Floor, Municipal Shopping Complex',
        'landmark' => 'Opposite Punjab National Bank, Main Road',
        'city' => 'North Paravur, Ernakulam – 683513, Kerala',
        'full_address' => '1st Floor, Municipal Shopping Complex, Opposite Punjab National Bank, Main Road, North Paravur, Ernakulam – 683513, Kerala',
        'phones' => [
            ['display' => '+91 9847093010', 'clean' => '+919847093010', 'name' => 'Adv. A. V. Vinu'],
            ['display' => '+91 9947482842', 'clean' => '+919947482842', 'name' => 'Adv. Alen Shaju']
        ],
        'image' => 'assets/images/office-paravur.jpg',
        'maps_query' => 'Municipal Shopping Complex, North Paravur, Kerala'
    ]
];

// Navigation items
$nav_items = [
    'index.php' => ['label' => 'Home', 'icon' => 'home'],
    'about.php' => ['label' => 'About Us', 'icon' => 'info'],
    'practice-areas.php' => ['label' => 'Practice Areas', 'icon' => 'briefcase'],
    'team.php' => ['label' => 'Our Team', 'icon' => 'users'],
    'courts.php' => ['label' => 'Courts & Forums', 'icon' => 'landmark'],
    'contact.php' => ['label' => 'Contact', 'icon' => 'envelope']
];

// Helper to determine current active page
function is_active_page($page) {
    $current = basename($_SERVER['PHP_SELF']);
    return ($current === $page) ? 'active' : '';
}
?>
