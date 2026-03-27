<?php
require_once __DIR__ . '/../src/includes/config.php';
require_once __DIR__ . '/../src/data/team_data.php';

$currentPage = 'team';
$pageTitle = t('nav.team');

load_page_lang('team');

include __DIR__ . '/../src/includes/header.php';
include __DIR__ . '/../src/includes/nav.php';
?>

<main class="page-content team-page-content">
    <h1 class="page-title"><?= htmlspecialchars(t('team.title')) ?></h1>

    <div class="team-layout">
        <?php if (empty($teamMembers)): ?>
            <p class="team-empty"><?= htmlspecialchars(t('team.empty')) ?></p>
        <?php else: ?>
            <section class="team-grid">
                <?php foreach ($teamMembers as $member): ?>
                    <?php include __DIR__ . '/../src/team-card.php'; ?>
                <?php endforeach; ?>
            </section>
        <?php endif; ?>
    </div>
</main>