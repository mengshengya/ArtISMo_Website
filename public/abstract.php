<?php
require_once __DIR__ . '/../src/includes/config.php';

$currentPage = 'abstract';
$pageTitle = t('nav.abstract');

load_page_lang('abstract');

include __DIR__ . '/../src/includes/header.php';
include __DIR__ . '/../src/includes/nav.php';
?>

<main class="page-content">
    <h1 class="page-title"><?= htmlspecialchars(t('abstract.title')) ?></h1>

    <div class="abstract-layout">
        <aside class="sub-nav" aria-label="Page sub navigation">
            <ul>
                <li><a href="#context" class="active"><?= htmlspecialchars(t('abstract.section_1')) ?></a></li>
                <li><a href="#objectives"><?= htmlspecialchars(t('abstract.section_2')) ?></a></li>
            </ul>
        </aside>

        <div class="main-page">
            <section id="context" class="page-section">
                <h2><?= htmlspecialchars(t('abstract.section_1')) ?></h2>
                <p><?= htmlspecialchars(t('abstract.context_1')) ?></p>
                <p><?= htmlspecialchars(t('abstract.context_2')) ?></p>
                <p><?= htmlspecialchars(t('abstract.context_3')) ?></p>

                <section class="page-image">
                    <img src="assets/img/platoon2.png" alt="Interconnected vehicle platoon on highway">
                    <p>Interconnected vehicle.</p>
                </section>
            </section>

            <section id="objectives" class="page-section">
                <h2><?= htmlspecialchars(t('abstract.section_2')) ?></h2>
                <h3><?= htmlspecialchars(t('abstract.objectives_title_1')) ?></h3>
                <p><?= htmlspecialchars(t('abstract.objectives_1')) ?></p>
                <p><?= htmlspecialchars(t('abstract.objectives_2')) ?></p>
                <section class="page-image">
                    <img src="assets/img/neuro_obs_v2.png"
                        alt="Hybrid vehicle dynamics model combining physics-based differential equations with adaptive online-learning neural networks and online parameter estimation.">
                    <p>A hybrid vehicle dynamics model that combines physics-based equations with adaptive neural
                        networks. Analytical models describe the fundamental vehicle motions and road-related effects,
                        while neural networks capture complex nonlinear behaviors. With online parameter adaptation, the
                        model continuously improves accuracy during real-world vehicle operation</p>
                </section>
                <p><?= htmlspecialchars(t('abstract.objectives_3')) ?></p>
                <h3><?= htmlspecialchars(t('abstract.objectives_title_2')) ?></h3>
                <p><?= htmlspecialchars(t('abstract.objectives_4')) ?></p>
                <p><?= htmlspecialchars(t('abstract.objectives_5')) ?></p>
                <h3><?= htmlspecialchars(t('abstract.objectives_title_3')) ?></h3>
                <?= t('abstract.objectives_6') ?>
            </section>
        </div>
    </div>
</main>

<script src="assets/js/sub_nav.js"></script>
</body>

</html>