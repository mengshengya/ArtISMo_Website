<?php
if (!isset($member) || !is_array($member)) {
    return;
}

$name = $member['name'] ?? '';
$description = $member['description'] ?? '';
$photo = $member['photo'] ?? '';
$link = $member['link'] ?? '';
$buttonText = t('team.button');
$details = $member['details'] ?? [];
?>

<article class="team-card">
    <div class="main">
        <h3><?= htmlspecialchars($name) ?></h3>

        <?php if ($description !== ''): ?>
            <p class="desc"><?= htmlspecialchars($description) ?></p>
        <?php endif; ?>

        <?php if (!empty($details) && is_array($details)): ?>
            <ul class="meta-list">
                <?php foreach ($details as $label => $value): ?>
                    <li>
                        <span><?= htmlspecialchars($label) ?> :</span>
                        <?= htmlspecialchars($value) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <?php if ($link !== ''): ?>
            <div class="action">
                <a href="<?= htmlspecialchars($link, ENT_QUOTES) ?>" target="_blank" rel="noopener noreferrer">
                    <?= htmlspecialchars($buttonText) ?>
                </a>
            </div>
        <?php endif; ?>
    </div>

    <aside class="photo">
        <?php if ($photo !== ''): ?>
            <img src="<?= htmlspecialchars($photo, ENT_QUOTES) ?>" alt="<?= htmlspecialchars($name) ?>">
        <?php else: ?>
            <div class="no-photo">No image</div>
        <?php endif; ?>
    </aside>
</article>