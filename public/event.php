<?php
require_once __DIR__ . '/../src/includes/config.php';

$currentPage = 'event';
$pageTitle = t('nav.events');

load_page_lang('event');

include __DIR__ . '/../src/includes/header.php';
include __DIR__ . '/../src/includes/nav.php';
?>


<main class="page-content">
    <h1 class="page-title"><?= htmlspecialchars(t('event.title')) ?></h1>

    <div class="event-layout">
        <aside class="sub-nav" aria-label="Page sub navigation">
            <ul>
                <li><a href="#workshop-2" class="active"><?= htmlspecialchars(t('event.workshop_2_title')) ?></a></li>
                <li><a href="#other-events"><?= htmlspecialchars(t('event.section_2')) ?></a></li>
            </ul>
        </aside>

        <div class="main-page">
            <section id="workshop-2" class="page-section">
                <h2><?= htmlspecialchars(t('event.workshop_2_title')) ?></h2>

                <?= t('event.workshop_2_context_1') ?>

                <section class="page-image-group">
                    <div class="image-row">
                        <img src="assets/img/event/workshop2/workshop1.jpg" alt="Photo 1">
                        <img src="assets/img/event/workshop2/workshop2.jpg" alt="Photo 2">
                        <img src="assets/img/event/workshop2/workshop3.jpg" alt="Photo 3">
                        <img src="assets/img/event/workshop2/Social2.jpg" alt="Photo 4">
                    </div>
                    <p>Memories from the workshop.</p>
                </section>

                <?= t('event.workshop_2_context_2') ?>

                <section class="page-image-group">
                    <div class="image-row">
                        <img src="assets/img/event/workshop2/Pre0.jpg" alt="Photo 1">
                        <img src="assets/img/event/workshop2/Pre1.jpg" alt="Photo 2">
                        <img src="assets/img/event/workshop2/Pre2.jpg" alt="Photo 3">
                        <img src="assets/img/event/workshop2/Pre3.jpg" alt="Photo 4">
                    </div>
                    <p>Presentations from the workshop.</p>
                </section>             

                <section class="page-image-group">
                    <div class="image-row">
                        <img src="assets/img/event/workshop2/Pre4.jpg" alt="Photo 1">
                        <img src="assets/img/event/workshop2/Pre5.jpg" alt="Photo 2">
                        <img src="assets/img/event/workshop2/Pre6.jpg" alt="Photo 3">
                        <img src="assets/img/event/workshop2/workshop4.jpg" alt="Photo 4">
                    </div>
                    <p>Presentations from the workshop.</p>
                </section>

            </section>

            <section id="other-events" class="page-section">
                <h2><?= htmlspecialchars(t('event.section_2')) ?></h2>
            </section>
        </div>
    </div>
</main>

<script src="assets/js/sub_nav.js"></script>
</body>

</html>
