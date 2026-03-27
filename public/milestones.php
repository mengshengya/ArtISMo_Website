<?php
require_once __DIR__ . '/../src/includes/config.php';

$currentPage = 'milestones';
$pageTitle = t('nav.milestones');

load_page_lang('milestones');

include __DIR__ . '/../src/includes/header.php';
include __DIR__ . '/../src/includes/nav.php';
?>

<main class="page-content">
    <h1 class="page-title"><?= htmlspecialchars(t('milestones.title')) ?></h1>

    <div class="milestones-layout">
        <aside class="sub-nav" aria-label="Page sub navigation">
            <ul>
                <li><a href="#vehicle-modeling" class="active"><?= htmlspecialchars(t('milestones.section_1')) ?></a>
                </li>
                <li><a href="#estimation-algorithms"><?= htmlspecialchars(t('milestones.section_2')) ?></a></li>
                <li><a href="#platoon-applications"><?= htmlspecialchars(t('milestones.section_3')) ?></a></li>
                <li><a href="#validation-integration"><?= htmlspecialchars(t('milestones.section_4')) ?></a></li>
                <li><a href="#experimental-platform"><?= htmlspecialchars(t('milestones.section_5')) ?></a></li>
                <li><a href="#simulation-environment"><?= htmlspecialchars(t('milestones.section_6')) ?></a></li>
                <li><a href="#real-vehicle-testing"><?= htmlspecialchars(t('milestones.section_7')) ?></a></li>
            </ul>
        </aside>

        <div class="main-page">
            <section id="vehicle-modeling" class="page-section">
                <h2><?= htmlspecialchars(t('milestones.section_1')) ?></h2>
                <p><?= htmlspecialchars(t('milestones.content_1')) ?></p>

                <!-- 这个是视频板块，和照片一样的用法 type 和classe都不要变, 到时候删了这些，放到对应的地方就行-->
                

                

            </section>

            <section id="estimation-algorithms" class="page-section">
                <h2><?= htmlspecialchars(t('milestones.section_2')) ?></h2>
                <p><?= htmlspecialchars(t('milestones.content_2')) ?></p>
            </section>
            <section id="platoon-applications" class="page-section">
                <h2><?= htmlspecialchars(t('milestones.section_3')) ?></h2>
                <p><?= htmlspecialchars(t('milestones.content_3')) ?></p>
            </section>
            <section id="validation-integration" class="page-section">
                <h2><?= htmlspecialchars(t('milestones.section_4')) ?></h2>
                <p><?= htmlspecialchars(t('milestones.content_4')) ?></p>
            </section>
            <section id="experimental-platform" class="page-section">
                <h2><?= htmlspecialchars(t('milestones.section_5')) ?></h2>
                <?= t('milestones.content_5') ?>
            </section>
            <section id="simulation-environment" class="page-section">
                <h2><?= htmlspecialchars(t('milestones.section_6')) ?></h2>
                <?= t('milestones.simulation_0') ?>
                <h3><?= htmlspecialchars(t('milestones.simulation_1_title')) ?></h3>
                <?= t('milestones.simulation_1') ?>
                <section class="page-video">
                    <video controls>
                        <source src="assets/video/milestones/simulation/web.mp4" type="video/mp4">
                    </video>
                    <p>Web-based QLabs simulation environment demo</p>
                </section>
                <h3><?= htmlspecialchars(t('milestones.simulation_2_title')) ?></h3>
                <?= t('milestones.simulation_2') ?>
                <section class="page-video">
                    <video controls preload="metadata" style="width: 100%; max-width: 900px;">
                        <source src="assets/video/milestones/simulation/yolo.mkv" type="video/x-matroska">
                    </video>
                    <p>Python-based local monitoring and management platform demo.</p>
                </section>
            </section>
            <section id="real-vehicle-testing" class="page-section">
                <h2><?= htmlspecialchars(t('milestones.section_7')) ?></h2>
                <?= t('milestones.real_vehicle_text_1') ?>
                <section class="page-video">
                    <video controls preload="metadata" style="width: 50%; max-width: 900px;">
                        <source src="assets/video/milestones/real_vehicle/Real_car_Web.mp4" type="video/mp4">
                    </video>
                    <p>Web-based remote monitoring and control of physical QCar 2.</p>
                </section>
                <?= t('milestones.real_vehicle_text_2') ?>
            </section>
        </div>
    </div>
</main>

<script src="assets/js/sub_nav.js"></script>
</body>

</html>