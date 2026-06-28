<?php
declare(strict_types=1);

$articles = [
    ['slug' => 'daily-cooking', 'title' => 'How to Use Indian Spices in Daily Cooking', 'text' => 'Learn simple ways to bring authentic flavor into everyday meals.', 'content' => 'From turmeric in breakfast smoothies to garam masala in quick stir-fries, discover practical tips for using premium Indian spices throughout the day. These blends elevate comfort dishes and add aromatic warmth to home cooking.', 'image' => 'https://images.unsplash.com/photo-1512058564366-c9e7c8f4d9a5?auto=format&fit=crop&w=900&q=80'],
    ['slug' => 'rich-indian-curries', 'title' => 'The Secret Behind Rich Indian Curries', 'text' => 'Discover how spice blending creates depth, aroma, and warmth.', 'content' => 'Learn how premium curry masalas and freshly toasted spices build layers of flavor in curries. A few carefully chosen blends bring both balance and richness to classic recipes.', 'image' => 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=900&q=80'],
    ['slug' => 'spice-blend-basics', 'title' => 'Spice Blend Basics for Every Kitchen', 'text' => 'Create the foundation of Indian cooking with essential blend recipes.', 'content' => 'Master simple spice mixes like garam masala and curry powder to bring authentic, balanced flavor to curries, vegetables, and marinades. These core blends are the starting point for everyday meals.', 'image' => 'https://images.unsplash.com/photo-1506084868230-bb9d95c24759?auto=format&fit=crop&w=900&q=80'],
    ['slug' => 'premium-gift-boxes', 'title' => 'Premium Spice Gift Boxes for Special Occasions', 'text' => 'Find the perfect luxury spice set for gifting and hospitality.', 'content' => 'Discover curated gift box ideas that pair rich spices with elegant packaging. Ideal for corporate gifts, festive celebrations, and memorable culinary experiences.', 'image' => 'https://images.unsplash.com/photo-1517685352821-92cf88aee5a5?auto=format&fit=crop&w=900&q=80'],
    ['slug' => 'aromatic-tea-infusions', 'title' => 'Aromatic Tea Infusions with Indian Spices', 'text' => 'Blend spices into fragrant tea recipes for wellness and warmth.', 'content' => 'Explore recipes for chai and spiced wellness brews using cardamom, cinnamon, ginger, and clove. These soothing infusions are perfect for cozy mornings and elegant tea service.', 'image' => 'https://images.unsplash.com/photo-1510626176961-4b27b7b7bbd0?auto=format&fit=crop&w=900&q=80'],
    ['slug' => 'festive-masala-recipes', 'title' => 'Festive Masala Recipes for Celebrations', 'text' => 'Create vibrant celebratory dishes with festive spice blends.', 'content' => 'Use signature masalas to elevate festive menus, from rich biryanis to spiced roasted vegetables. The right blend adds depth, color, and aroma to every special occasion.', 'image' => 'https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=900&q=80'],
    ['slug' => 'sustainable-spice-sourcing', 'title' => 'Sustainable Spice Sourcing and Quality', 'text' => 'Learn how premium spices are sourced responsibly.', 'content' => 'Understand the practices behind high-quality spice sourcing, from ethical farming to careful selection. Sustainable sourcing ensures better flavor, traceability, and long-term quality.', 'image' => 'https://images.unsplash.com/photo-1490645935967-10de6ba17061?auto=format&fit=crop&w=900&q=80'],
    ['slug' => 'handcrafted-spice-rubs', 'title' => 'Handcrafted Spice Rubs for Meat and Grills', 'text' => 'Make grilled dishes unforgettable with artisanal rubs.', 'content' => 'Create bold rubs using cumin, smoked paprika, coriander and fennel for meats, seafood, and vegetables. These handcrafted blends bring smoky depth and savory complexity.', 'image' => 'https://images.unsplash.com/photo-1511690743698-d9d85f2fbf38?auto=format&fit=crop&w=900&q=80'],
    ['slug' => 'exotic-ingredient-guides', 'title' => 'Guide to Exotic Indian Ingredients', 'text' => 'Explore unique spices and how to use them in recipes.', 'content' => 'From saffron to asafoetida, this guide introduces lesser-known ingredients and simple ways to incorporate them into everyday cooking to deepen flavor profiles.', 'image' => 'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=900&q=80'],
    ['slug' => 'holiday-hosting-tips', 'title' => 'Holiday Hosting Tips with Spice-Driven Menus', 'text' => 'Plan memorable holiday meals with spice-led recipes.', 'content' => 'Learn how to design festive menus around signature spices, from appetizers to desserts. These tips help create a cohesive and luxurious dining experience.', 'image' => 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=900&q=80'],
];

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
  </nav>
  <main class="section" style="padding-top: 6rem; max-width: 840px; margin: 0 auto;">
    <article class="article-card" style="width: 100%; min-width: auto; height: auto;">
      <img loading="lazy" decoding="async" src="<?= htmlspecialchars($article['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8') ?>">
      <h1><?= htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8') ?></h1>
      <p style="margin-top: 1rem; color: #F7EEDC; line-height: 1.9;"><?= htmlspecialchars($article['content'], ENT_QUOTES, 'UTF-8') ?></p>
      <p style="margin-top: 1.5rem;"><a class="btn" href="/">Back to home</a></p>
    </article>
  </main>
</body>
</html>
