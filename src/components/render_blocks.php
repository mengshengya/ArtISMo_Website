<?php

function content_escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function content_value($value, string $lang): string
{
    if (is_array($value)) {
        if (isset($value[$lang])) {
            return (string) $value[$lang];
        }

        if (isset($value['en'])) {
            return (string) $value['en'];
        }

        $fallback = reset($value);
        return $fallback === false ? '' : (string) $fallback;
    }

    return (string) $value;
}

function content_text(array $item, string $lang, string $field = 'text'): string
{
    if (isset($item[$field . '_key'])) {
        return t((string) $item[$field . '_key']);
    }

    return content_value($item[$field] ?? '', $lang);
}

function content_title(array $section, string $lang): string
{
    if (isset($section['title_key'])) {
        return t((string) $section['title_key']);
    }

    return content_value($section['title'] ?? '', $lang);
}

function render_content_sub_nav(array $sections, string $lang): void
{
    ?>
    <aside class="sub-nav" aria-label="Page sub navigation">
        <ul>
            <?php foreach ($sections as $index => $section): ?>
                <?php
                $id = (string) ($section['id'] ?? '');
                $title = content_title($section, $lang);

                if ($id === '' || $title === '') {
                    continue;
                }
                ?>
                <li>
                    <a href="#<?= content_escape($id) ?>" class="<?= $index === 0 ? 'active' : '' ?>">
                        <?= content_escape($title) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside>
    <?php
}

function render_content_sections(array $sections, string $lang): void
{
    foreach ($sections as $section) {
        $id = (string) ($section['id'] ?? '');
        $title = content_title($section, $lang);

        if ($id === '' || $title === '') {
            continue;
        }
        ?>
        <section id="<?= content_escape($id) ?>" class="page-section">
            <h2><?= content_escape($title) ?></h2>
            <?php render_content_blocks($section['blocks'] ?? [], $lang); ?>
        </section>
        <?php
    }
}

function render_content_blocks(array $blocks, string $lang): void
{
    foreach ($blocks as $block) {
        render_content_block($block, $lang);
    }
}

function render_content_block(array $block, string $lang): void
{
    $type = $block['type'] ?? 'paragraph';

    if ($type === 'paragraph') {
        $text = content_text($block, $lang);

        if ($text !== '') {
            echo '<p>' . content_escape($text) . '</p>';
        }

        return;
    }

    if ($type === 'html') {
        $html = content_text($block, $lang);

        if ($html !== '') {
            echo $html;
        }

        return;
    }

    if ($type === 'heading') {
        $text = content_text($block, $lang);

        if ($text !== '') {
            echo '<h3>' . content_escape($text) . '</h3>';
        }

        return;
    }

    if ($type === 'image') {
        render_content_image($block, $lang);
        return;
    }

    if ($type === 'image_group') {
        render_content_image_group($block, $lang);
        return;
    }

    if ($type === 'video') {
        render_content_video($block, $lang);
        return;
    }

    if ($type === 'youtube') {
        render_content_youtube($block, $lang);
    }
}

function render_content_image(array $block, string $lang): void
{
    $src = (string) ($block['src'] ?? '');

    if ($src === '') {
        return;
    }

    $alt = content_text($block, $lang, 'alt');
    $caption = content_text($block, $lang, 'caption');
    ?>
    <section class="page-image">
        <img src="<?= content_escape($src) ?>" alt="<?= content_escape($alt) ?>">
        <?php if ($caption !== ''): ?>
            <p><?= content_escape($caption) ?></p>
        <?php endif; ?>
    </section>
    <?php
}

function render_content_image_group(array $block, string $lang): void
{
    $images = $block['images'] ?? [];

    if (!is_array($images) || empty($images)) {
        return;
    }

    $caption = content_text($block, $lang, 'caption');
    ?>
    <section class="page-image-group">
        <div class="image-row">
            <?php foreach ($images as $image): ?>
                <?php
                if (!is_array($image)) {
                    continue;
                }

                $src = (string) ($image['src'] ?? '');

                if ($src === '') {
                    continue;
                }

                $alt = content_text($image, $lang, 'alt');
                ?>
                <img src="<?= content_escape($src) ?>" alt="<?= content_escape($alt) ?>">
            <?php endforeach; ?>
        </div>
        <?php if ($caption !== ''): ?>
            <p><?= content_escape($caption) ?></p>
        <?php endif; ?>
    </section>
    <?php
}

function render_content_video(array $block, string $lang): void
{
    $src = (string) ($block['src'] ?? '');

    if ($src === '') {
        return;
    }

    $mime = (string) ($block['mime'] ?? 'video/mp4');
    $caption = content_text($block, $lang, 'caption');
    ?>
    <section class="page-video">
        <video controls preload="metadata">
            <source src="<?= content_escape($src) ?>" type="<?= content_escape($mime) ?>">
        </video>
        <?php if ($caption !== ''): ?>
            <p><?= content_escape($caption) ?></p>
        <?php endif; ?>
    </section>
    <?php
}

function render_content_youtube(array $block, string $lang): void
{
    $url = (string) ($block['url'] ?? '');
    $embedUrl = youtube_embed_url($url);

    if ($embedUrl === '') {
        return;
    }

    $title = content_text($block, $lang, 'title');
    $caption = content_text($block, $lang, 'caption');
    ?>
    <section class="page-video youtube-video">
        <div class="youtube-video__frame">
            <iframe
                src="<?= content_escape($embedUrl) ?>"
                title="<?= content_escape($title) ?>"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen></iframe>
        </div>
        <?php if ($caption !== ''): ?>
            <p><?= content_escape($caption) ?></p>
        <?php endif; ?>
    </section>
    <?php
}
