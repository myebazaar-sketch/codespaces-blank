<?php
declare(strict_types=1);

require __DIR__ . '/data/articles.php';

$slug = filter_input(INPUT_GET, 'slug', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$article = null;
foreach ($articles as $item) {
    if ($item['slug'] === $slug) {
        $article = $item;
        break;
    }
}

if (!$article) {
    header('HTTP/1.1 404 Not Found');
    echo '<!doctype html><html lang="en"><head><meta charset="utf-8"><title>Article not found</title></head><body><h1>Article not found</h1><p>The requested article is not available.</p><p><a href="/">Return home</a></p></body></html>';
    exit;
}

function renderArticleContent(string $content): string
{
    $allowedTags = '<h1><h2><h3><h4><p><strong><em><ul><ol><li><br><a>';
    return strip_tags($content, $allowedTags);
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="<?= htmlspecialchars($article['text'], ENT_QUOTES, 'UTF-8') ?>">
  <?php
    $siteUrl = (isset($_SERVER['HTTP_HOST']) ? ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://example.com');
    $pageUrl = $siteUrl . strtok($_SERVER['REQUEST_URI'], '?');
    $logoUrl = $siteUrl . '/assets/brand-mark.svg';
    $ogImage = htmlspecialchars($article['image'], ENT_QUOTES, 'UTF-8');
  ?>
  <meta property="og:locale" content="en_US">
  <meta property="og:site_name" content="<?= htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:title" content="<?= htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($article['text'], ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:type" content="article">
  <meta property="og:url" content="<?= htmlspecialchars($pageUrl, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:image" content="<?= $ogImage ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8') ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($article['text'], ENT_QUOTES, 'UTF-8') ?>">
  <meta name="twitter:image" content="<?= $ogImage ?>">
  <link rel="stylesheet" href="/assets/app.css">

  <script type="application/ld+json">
  <?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "Article",
    "headline" => $article['title'],
    "description" => $article['text'],
    "image" => [$article['image']],
    "author" => ["@type" => "Person", "name" => "Al Saba Spices"],
    "publisher" => ["@type" => "Organization", "name" => $siteName, "logo" => ["@type" => "ImageObject", "url" => $logoUrl]],
    "mainEntityOfPage" => ["@type" => "WebPage", "@id" => $pageUrl]
  ], JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT) ?>
  </script>
</head>
<body>
  <nav class="topbar">
    <a class="topbar-brand" href="/">
      <img src="/assets/brand-mark.svg" alt="Al Saba Spices logo">
      <div class="brand-name">Al Saba Spices</div>
    </a>
    <div class="topbar-links">
      <a href="/">Home</a>
      <a href="/faq.php">FAQ</a>
    </div>
  </nav>
  <main class="section" style="padding-top: 6rem; max-width: 840px; margin: 0 auto;">
    <article class="article-card" style="width: 100%; min-width: auto; height: auto;">
      <img loading="lazy" decoding="async" src="<?= htmlspecialchars($article['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8') ?>">
      <h1><?= htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8') ?></h1>
      <div class="article-body" style="margin-top: 1rem; color: #F7EEDC; line-height: 1.9;">
        <?= renderArticleContent($article['content']) ?>
      </div>
      <p style="margin-top: 1.5rem;"><a class="btn" href="/">Back to home</a></p>
    </article>
  </main>
</body>
</html>
