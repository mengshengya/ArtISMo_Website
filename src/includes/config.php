<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$supportedLangs = ['en', 'fr'];
$defaultLang = 'en';

if (isset($_GET['lang']) && in_array($_GET['lang'], $supportedLangs, true)) {
    $_SESSION['lang'] = $_GET['lang'];
}

$lang = $_SESSION['lang'] ?? $defaultLang;

$translations = [];

$commonFile = __DIR__ . '/../lang/' . $lang . '/common_' . $lang . '.php';

if (is_file($commonFile)) {
    $commonTranslations = require $commonFile;

    if (is_array($commonTranslations)) {
        $translations = $commonTranslations;
    }
}

function load_page_lang(string $page): void
{
    global $lang, $translations;

    $pageFile = __DIR__ . '/../lang/' . $lang . '/' . $page . '_' . $lang . '.php';

    if (is_file($pageFile)) {
        $pageTranslations = require $pageFile;

        if (is_array($pageTranslations)) {
            $translations = array_merge($translations, $pageTranslations);
        }
    }
}

function t(string $key): string
{
    global $translations;
    return $translations[$key] ?? $key;
}

function page_url(string $pageFile): string
{
    global $lang;
    return $pageFile . '?lang=' . urlencode($lang);
}

function lang_switch_url(string $targetLang): string
{
    $currentPage = basename($_SERVER['PHP_SELF']);
    return $currentPage . '?lang=' . urlencode($targetLang);
}

function youtube_embed_url(string $url): string
{
    $parts = parse_url($url);

    if ($parts === false || empty($parts['host'])) {
        return '';
    }

    $host = strtolower($parts['host']);
    $path = $parts['path'] ?? '';
    $videoId = '';

    if ($host === 'youtu.be' || substr($host, -9) === '.youtu.be') {
        $pathParts = explode('/', trim($path, '/'));
        $videoId = $pathParts[0] ?? '';
    } elseif (in_array($host, ['youtube.com', 'www.youtube.com', 'm.youtube.com'], true)) {
        parse_str($parts['query'] ?? '', $query);

        if (!empty($query['v']) && is_string($query['v'])) {
            $videoId = $query['v'];
        } elseif (preg_match('#^/(embed|shorts)/([^/?]+)#', $path, $matches)) {
            $videoId = $matches[2];
        }
    }

    if (!preg_match('/^[A-Za-z0-9_-]{11}$/', $videoId)) {
        return '';
    }

    return 'https://www.youtube-nocookie.com/embed/' . rawurlencode($videoId)
        . '?autoplay=1&mute=1&playsinline=1&controls=1&rel=0';
}
