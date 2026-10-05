<?php
require_once __DIR__ . '/config.php';

// Set page title & description defaults if not provided
if (!isset($page_title)) {
    $page_title = "S&V Associates | Advocates in Ernakulam & North Paravur | MACT, Civil, Criminal, Family & High Court";
}
if (!isset($page_description)) {
    $page_description = "S&V Associates is a litigation-focused law firm with offices in Ernakulam and North Paravur, handling Motor Accident Claims, civil litigation, criminal litigation, family and matrimonial matters, High Court proceedings, and appeals.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/images/high-court.jpg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23c59b4e' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='m3 21 18 0'/><path d='M5 21V7l7-4 7 4v14'/><path d='M9 10a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v11H9z'/></svg>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="sidebarOverlay" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.5); z-index:999;"></div>
    
    <!-- Include Persistent Sidebar -->
    <?php require_once __DIR__ . '/sidebar.php'; ?>

    <!-- Main Content Container -->
    <div class="app-main">
        <!-- Include Topbar -->
        <?php require_once __DIR__ . '/topbar.php'; ?>
