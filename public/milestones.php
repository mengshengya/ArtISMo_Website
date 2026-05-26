<?php
require_once __DIR__ . '/../src/includes/config.php';

$currentPage = 'milestones';
$pageTitle = t('nav.milestones');

load_page_lang('milestones');

$platoonVideoEmbedUrl = youtube_embed_url('https://youtu.be/n3M1J4P6dlQ?si=q5tv1sALv1Eirxkx');
$simulationWebVideoEmbedUrl = youtube_embed_url('https://youtu.be/A0KsCnvjmfI?si=Gm6_9qTzkTo0drTY');
$simulationYoloVideoEmbedUrl = youtube_embed_url('https://youtu.be/SraIErZ5QTg?si=3rbx-DJPYJrunefU');
$realVehicleVideoEmbedUrl = youtube_embed_url('https://youtube.com/shorts/asIicSg48Fg?feature=share');

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
                <?php if ($platoonVideoEmbedUrl !== ''): ?>
                    <section class="page-video youtube-video">
                        <div class="youtube-video__frame">
                            <iframe
                                src="<?= htmlspecialchars($platoonVideoEmbedUrl) ?>"
                                title="Resilient Platoon Applications video"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin"
                                allowfullscreen></iframe>
                        </div>
                        <p>Resilient Platoon Applications demo.</p>
                    </section>
                <?php endif; ?>
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
                <?php if ($simulationWebVideoEmbedUrl !== ''): ?>
                    <section class="page-video youtube-video">
                        <div class="youtube-video__frame">
                            <iframe
                                src="<?= htmlspecialchars($simulationWebVideoEmbedUrl) ?>"
                                title="Web-based QLabs simulation environment demo"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin"
                                allowfullscreen></iframe>
                        </div>
                        <p>Web-based QLabs simulation environment demo</p>
                    </section>
                <?php endif; ?>
                <h3><?= htmlspecialchars(t('milestones.simulation_2_title')) ?></h3>
                <?= t('milestones.simulation_2') ?>
                <?php if ($simulationYoloVideoEmbedUrl !== ''): ?>
                    <section class="page-video youtube-video">
                        <div class="youtube-video__frame">
                            <iframe
                                src="<?= htmlspecialchars($simulationYoloVideoEmbedUrl) ?>"
                                title="Python-based local monitoring and management platform demo"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin"
                                allowfullscreen></iframe>
                        </div>
                        <p>Python-based local monitoring and management platform demo.</p>
                    </section>
                <?php endif; ?>
            </section>
            <section id="real-vehicle-testing" class="page-section">
                <h2><?= htmlspecialchars(t('milestones.section_7')) ?></h2>
                <?= t('milestones.real_vehicle_text_1') ?>
                <?php if ($realVehicleVideoEmbedUrl !== ''): ?>
                    <section class="page-video youtube-video">
                        <div class="youtube-video__frame">
                            <iframe
                                src="<?= htmlspecialchars($realVehicleVideoEmbedUrl) ?>"
                                title="Web-based remote monitoring and control of physical QCar 2"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin"
                                allowfullscreen></iframe>
                        </div>
                        <p>Web-based remote monitoring and control of physical QCar 2.</p>
                    </section>
                <?php endif; ?>
                <?= t('milestones.real_vehicle_text_2') ?>
            </section>
        </div>
    </div>
</main>

<script src="assets/js/sub_nav.js"></script>
</body>

</html>
