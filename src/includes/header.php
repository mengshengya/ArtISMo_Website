<?php
$pageTitle = $pageTitle ?? t('web.title');
?>

<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang) ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/team.css">
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