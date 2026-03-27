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
                <!-- href="#section1/2" 里的section之类的最好改个名，和下方id="section1/2"要同名，
                最好起个有点实际意义的，但是不改逻辑也通，可以参考之前的abstract和milestones-->
                <li><a href="#section1" class="active"><?= htmlspecialchars(t('event.workshop_2_title')) ?></a></li>
                <li><a href="#section2"><?= htmlspecialchars(t('event.section_2')) ?></a></li>
            </ul>
        </aside>

        <div class="main-page">
            <section id="section1" class="page-section">
                <h2><?= htmlspecialchars(t('event.workshop_2_title')) ?></h2>

                <?= t('event.workshop_2_context_1') ?>

                <!-- 这个section是四张照片，大小固定，可以放1-4张照片。p和一张照片的一样，不想要可以空 -->
                <section class="page-image-group">
                    <div class="image-row">
                        <img src="assets\img\event\workshop2\workshop1.jpg" alt="Photo 1">
                        <img src="assets\img\event\workshop2\workshop2.jpg" alt="Photo 2">
                        <img src="assets\img\event\workshop2\workshop3.jpg" alt="Photo 3">
                        <img src="assets\img\event\workshop2\Social2.jpg" alt="Photo 4">
                    </div>
                    <p>Memories from the workshop.</p>
                </section>

                <?= t('event.workshop_2_context_2') ?>

                <section class="page-image-group">
                    <div class="image-row">
                        <img src="assets\img\event\workshop2\Pre0.jpg" alt="Photo 1">
                        <img src="assets\img\event\workshop2\Pre1.jpg" alt="Photo 2">
                        <img src="assets\img\event\workshop2\Pre2.jpg" alt="Photo 3">
                        <img src="assets\img\event\workshop2\Pre3.jpg" alt="Photo 4">
                    </div>
                    <p>Presentations from the workshop.</p>
                </section>             

                <section class="page-image-group">
                    <div class="image-row">
                        <img src="assets\img\event\workshop2\Pre4.jpg" alt="Photo 1">
                        <img src="assets\img\event\workshop2\Pre5.jpg" alt="Photo 2">
                        <img src="assets\img\event\workshop2\Pre6.jpg" alt="Photo 3">
                        <img src="assets\img\event\workshop2\workshop4.jpg" alt="Photo 4">
                    </div>
                    <p>Presentations from the workshop.</p>
                </section>

            </section>

            <section id="section2" class="page-section">
                <h2><?= htmlspecialchars(t('event.section_2')) ?></h2>
            </section>
        </div>
    </div>
</main>

<script src="assets/js/sub_nav.js"></script>
</body>

</html>