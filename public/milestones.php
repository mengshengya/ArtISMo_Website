<?php
require_once __DIR__ . '/../src/includes/config.php';
require_once __DIR__ . '/../src/components/render_blocks.php';

$currentPage = 'milestones';
$pageTitle = t('nav.milestones');

$sections = require __DIR__ . '/../src/content/milestones_content.php';

include __DIR__ . '/../src/includes/header.php';
include __DIR__ . '/../src/includes/nav.php';
?>

<main class="page-content">
    <h1 class="page-title"><?= content_escape(t('milestones.title')) ?></h1>

    <div class="milestones-layout">
        <?php render_content_sub_nav($sections, $lang); ?>

        <div class="main-page">
            <?php render_content_sections($sections, $lang); ?>
        </div>
    </div>
</main>

<script src="assets/js/sub_nav.js"></script>
</body>

</html>
