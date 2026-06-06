<?php
require_once __DIR__ . '/../src/includes/config.php';
require_once __DIR__ . '/../src/components/render_blocks.php';

$currentPage = 'abstract';
$pageTitle = t('nav.abstract');

load_page_lang('abstract');

$sections = require __DIR__ . '/../src/content/abstract_content.php';

include __DIR__ . '/../src/includes/header.php';
include __DIR__ . '/../src/includes/nav.php';
?>

<main class="page-content">
    <div class="hero-section">
        <span class="hero-tag"><?= content_escape(t('abstract.hero_tag')) ?></span>
        <h1 class="hero-title"><?= content_escape(t('site.title')) ?></h1>
        <p class="hero-lead"><?= content_escape(t('abstract.lead_text')) ?></p>
    </div>

    <div class="abstract-layout">
        <?php render_content_sub_nav($sections, $lang); ?>

        <div class="main-page">
            <h2 class="section-heading-main"><?= content_escape(t('abstract.title')) ?></h2>
            <?php render_content_sections($sections, $lang); ?>
        </div>
    </div>
</main>

<script src="assets/js/sub_nav.js"></script>
</body>

</html>
