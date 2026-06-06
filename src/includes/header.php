<?php
$pageTitle = $pageTitle ?? t('web.title');
?>

<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang) ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/team.css">
    <?php if ($currentPage === 'results'): ?>
        <link rel="stylesheet" href="assets/css/results.css">
    <?php elseif ($currentPage === 'publication'): ?>
        <link rel="stylesheet" href="assets/css/publication.css">
    <?php endif; ?>
</head>

<body>

    <header class="site-header">
        <div class="header">
            <a href="<?= htmlspecialchars(page_url('abstract.php')) ?>" class="logo">
                <img src="assets/img/logo.png" alt="logo">
            </a>

            <h1 class="site-title"><?= htmlspecialchars(t('site.title')) ?></h1>

            <div class="lang-switch">
                <span class="lang-icon">🌐</span>
                <select onchange="window.location.href=this.value">
                    <option value="<?= htmlspecialchars(lang_switch_url('fr')) ?>" <?= $lang === 'fr' ? 'selected' : '' ?>>
                        FR
                    </option>
                    <option value="<?= htmlspecialchars(lang_switch_url('en')) ?>" <?= $lang === 'en' ? 'selected' : '' ?>>
                        EN
                    </option>
                </select>
            </div>
        </div>
    </header>
