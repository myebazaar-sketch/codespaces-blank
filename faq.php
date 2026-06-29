<?php
declare(strict_types=1);

$siteName = 'Al Saba Spices';
require __DIR__ . '/data/faqs.php';

$siteUrl = (isset($_SERVER['HTTP_HOST']) ? ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://example.com');
$pageUrl = $siteUrl . strtok($_SERVER['REQUEST_URI'], '?');
$logoUrl = $siteUrl . '/assets/brand-mark.svg';

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FAQ — <?= htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="Frequently asked questions about Al Saba Spices products, shipping and wholesale.">
  <meta property="og:title" content="FAQ — <?= htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:url" content="<?= htmlspecialchars($pageUrl, ENT_QUOTES, 'UTF-8') ?>">
  <link rel="stylesheet" href="/assets/app.css">
</head>
<body>
  <nav class="topbar">
    <a class="topbar-brand" href="/">
      <img src="/assets/brand-mark.svg" alt="Al Saba Spices logo">
      <div class="brand-name">Al Saba Spices</div>
    </a>
    <div class="topbar-links">
      <a href="#products">Products</a>
      <a href="#shop">Shop</a>
      <a href="#gallery">Gallery</a>
      <a href="/faq.php">FAQ</a>
      <a href="#contact">Contact</a>
    </div>
  </nav>

  <main class="section" style="max-width:840px; margin: 4rem auto; padding: 0 1rem;">
    <div class="section-heading">
      <p class="section-tag">Help</p>
      <h1>Frequently Asked Questions</h1>
    </div>

    <section class="faq-list">
      <?php foreach ($faqs as $item): ?>
        <details class="faq-item" style="margin-bottom:1rem; background:rgba(255,255,255,0.02); padding:1rem; border-radius:6px;">
          <summary style="font-weight:600; cursor:pointer;"><?= htmlspecialchars($item['question'], ENT_QUOTES, 'UTF-8') ?></summary>
          <div style="margin-top:0.5rem; color:#F7EEDC;"><?= htmlspecialchars($item['answer'], ENT_QUOTES, 'UTF-8') ?></div>
        </details>
      <?php endforeach; ?>
    </section>

    <p style="margin-top:1.5rem;"><a class="btn" href="/">Back to home</a></p>
  </main>
</body>
</html>
