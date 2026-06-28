<?php
declare(strict_types=1);

$siteName = 'Al Saba Spices';
$tagline = 'Authentic Indian flavors, crafted for your kitchen.';
$products = [
    ['name' => 'Halal Chicken Soup Powder', 'desc' => 'Rich color and warm aroma for everyday cooking.', 'detail' => 'Ground from the finest turmeric root, our powder brings bright color and an earthy warmth to soups, rice dishes, and golden milk blends.', 'image' => 'https://images.unsplash.com/photo-1615485290382-441e4d049cb5?auto=format&fit=crop&w=900&q=80', 'price' => 'From $8.50', 'buyUrl' => 'https://example.com/shop?product=halal-chicken-soup-powder'],
    ['name' => 'Curry Masala', 'desc' => 'A balanced blend for delicious Indian dishes.', 'detail' => 'A harmonious mix of premium spices, designed to lift curries, stews and marinades with a refined, layered flavor profile.', 'image' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=900&q=80', 'price' => 'From $10.00', 'buyUrl' => 'https://example.com/shop?product=curry-masala'],
    ['name' => 'Red Chili Powder', 'desc' => 'Bold heat with vibrant flavor.', 'detail' => 'Made from sun-ripened chilies, this powder delivers bright heat and rich color, ideal for sauces, spice rubs, and hearty Indian classics.', 'image' => 'https://images.unsplash.com/photo-1514517220017-8ce97a34a7b6?auto=format&fit=crop&w=900&q=80', 'price' => 'From $7.90', 'buyUrl' => 'https://example.com/shop?product=red-chili-powder'],
    ['name' => 'Garam Masala', 'desc' => 'A fragrant spice mix for curries and grills.', 'detail' => 'A premium aromatic blend with cinnamon, cardamom and clove, crafted to finish dishes with warmth, depth and elegant spice character.', 'image' => 'https://images.unsplash.com/photo-1615486366062-27d4d2c0d7f5?auto=format&fit=crop&w=900&q=80', 'price' => 'From $12.00', 'buyUrl' => 'https://example.com/shop?product=garam-masala'],
    ['name' => 'Saffron Fusion Blend', 'desc' => 'A premium blend with saffron and warm spices.', 'detail' => 'Perfect for biryanis and desserts, this saffron fusion adds luxury aroma and rich color to every dish.', 'image' => 'https://images.unsplash.com/photo-1520866880875-2e11e0a3f2a2?auto=format&fit=crop&w=900&q=80', 'price' => 'From $18.00', 'buyUrl' => 'https://example.com/shop?product=saffron-fusion-blend'],
    ['name' => 'Cardamom Pods', 'desc' => 'Whole green cardamom for fragrant cooking.', 'detail' => 'Use these premium cardamom pods in chai, rice dishes, and curries for bright, complex spice notes.', 'image' => 'https://images.unsplash.com/photo-1525351484163-7529414344d8?auto=format&fit=crop&w=900&q=80', 'price' => 'From $14.50', 'buyUrl' => 'https://example.com/shop?product=cardamom-pods'],
    ['name' => 'Cumin Seeds', 'desc' => 'Earthy cumin seeds for authentic seasoning.', 'detail' => 'Perfect for tempering, roasting, and spice blends, these seeds bring a warm, nutty foundation to Indian recipes.', 'image' => 'https://images.unsplash.com/photo-1532634896-26909d0d4902?auto=format&fit=crop&w=900&q=80', 'price' => 'From $6.50', 'buyUrl' => 'https://example.com/shop?product=cumin-seeds'],
    ['name' => 'Black Peppercorns', 'desc' => 'Bold whole peppercorns for fresh grinding.', 'detail' => 'Premium peppercorns for bold seasoning, ideal for curries, marinades, and finishing touches.', 'image' => 'https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?auto=format&fit=crop&w=900&q=80', 'price' => 'From $9.20', 'buyUrl' => 'https://example.com/shop?product=black-peppercorns'],
];
$galleryImages = [
    'https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=900&q=80',
    'https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=900&q=80',
    'https://images.unsplash.com/photo-1482049016688-2d3e1b311543?auto=format&fit=crop&w=900&q=80',
    'https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=900&q=80',
    'https://images.unsplash.com/photo-1514986888952-8cd320577b11?auto=format&fit=crop&w=900&q=80',
    'https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?auto=format&fit=crop&w=900&q=80',
    'https://images.unsplash.com/photo-1571047399553-7b7faa922c27?auto=format&fit=crop&w=900&q=80',
    'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=900&q=80',
];
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
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8') ?> | <?= htmlspecialchars($tagline, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="Authentic export-quality Indian spices, luxury blends, and gift-ready premium products for chefs, restaurants, and home kitchens.">
  <?php
    $siteUrl = (isset($_SERVER['HTTP_HOST']) ? ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] : 'https://example.com');
    $pageUrl = $siteUrl . strtok($_SERVER['REQUEST_URI'], '?');
    $logoUrl = $siteUrl . '/assets/brand-mark.svg';
    $ogImage = $logoUrl;
  ?>
  <meta property="og:locale" content="en_US">
  <meta property="og:site_name" content="<?= htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:title" content="<?= htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:description" content="Al Saba Spices offers authentic Indian spices and food products with rich flavor and quality.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= htmlspecialchars($pageUrl, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:image" content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="twitter:description" content="Al Saba Spices offers authentic Indian spices and food products with rich flavor and quality.">
  <meta name="twitter:image" content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') ?>">
  <link rel="stylesheet" href="/assets/app.css">

  <script type="application/ld+json">
  <?= json_encode([
    "@context" => "https://schema.org",
    "@graph" => [
      [
        "@type" => "Organization",
        "name" => $siteName,
        "url" => $siteUrl,
        "logo" => $logoUrl,
        "sameAs" => [
          "https://www.instagram.com/",
          "https://www.facebook.com/"
        ]
      ],
      [
        "@type" => "WebSite",
        "name" => $siteName,
        "url" => $siteUrl,
        "description" => "Al Saba Spices offers authentic Indian spices and food products with rich flavor and quality."
      ]
    ]
  ], JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT) ?>
  </script>
</head>
<body>
  <nav class="topbar">
    <a class="topbar-brand" href="/" aria-label="Al Saba Spices">
      <img src="/assets/brand-mark.svg" alt="Al Saba Spices logo">
    </a>
    <div class="topbar-links">
      <a href="#products">Products</a>
      <a href="#shop">Shop</a>
      <a href="#gallery">Gallery</a>
      <a href="#contact">Contact</a>
    </div>
  </nav>

  <header class="hero">
    <div class="hero-panel">
      <div class="hero-copy">
        
        <p class="eyebrow">Luxury spice exports & premium gifting</p>
        <h1><?= htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8') ?></h1>
        <p class="lead">Premium Indian spice blends curated as elegant gifts and export-grade essentials for discerning kitchens.</p>
        <div class="hero-actions">
          <a class="btn" href="#products">Explore Premium Collection</a>
          <a class="btn" href="#shop">Buy it now</a>
        </div>
        <div class="hero-featured-row">
          <div class="hero-feature-card hero-feature-highlight">
            <span class="hero-feature-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M12 2l2.76 5.59L21.6 8.24l-4.38 4.27L18.28 21 12 17.77 5.72 21l1.06-8.49L2.4 8.24l6.84-0.65L12 2z" fill="#7A2E1D"/>
              </svg>
            </span>
            <strong>Export-ready quality</strong>
            <span>Premium spices packed for global delivery.</span>
          </div>
          <div class="hero-feature-card">
            <span class="hero-feature-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M12 2C9.24 2 7 4.24 7 7c0 1.93 1.29 3.56 3.06 4.19C10.03 12.42 9 13.87 9 15.5c0 1.93 1.57 3.5 3.5 3.5S16 17.43 16 15.5c0-1.63-1.03-3.08-1.94-4.31C15.71 10.56 17 8.93 17 7c0-2.76-2.24-5-5-5z" fill="#7A2E1D"/>
              </svg>
            </span>
            <strong>Authentic Indian blends</strong>
            <span>Curated from traditional recipes and premium ingredients.</span>
          </div>
          <div class="hero-feature-card">
            <span class="hero-feature-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M12 12c2.76 0 5-2.24 5-5S14.76 2 12 2 7 4.24 7 7s2.24 5 5 5zm-6 9c0-2.76 4.48-4 6-4s6 1.24 6 4v1H6v-1z" fill="#7A2E1D"/>
              </svg>
            </span>
            <strong>Wholesale support</strong>
            <span>Flexible order fulfillment for retail and hospitality.</span>
          </div>
        </div>
        <div class="hero-stats">
          <div>
            <strong>12+</strong>
            <span>Signature blends</span>
          </div>
          <div>
            <strong>100%</strong>
            <span>Export-grade quality</span>
          </div>
          <div>
            <strong>24/7</strong>
            <span>Luxury wholesale support</span>
          </div>
        </div>
      </div>
      <div class="hero-image-card">
        <div class="hero-image-badge">Authentic • Fresh • Premium</div>
        <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=1000&q=80" alt="Indian spices and kitchen ingredients">
        <div class="hero-image-overlay">
          <span>Indian Kitchen Essentials</span>
          <strong>Crafted for rich flavor and tradition</strong>
        </div>
      </div>
    </div>
  </header>

  <section id="about" class="section about-section">
    <div class="section-heading">
      <p class="section-tag">About the Brand</p>
      <h2>Al Saba Spices: Premium Indian Spice Exports</h2>
    </div>
    <div class="about-copy">
      <p>Al Saba Spices delivers premium export-quality Indian spices, signature blends, and gift-ready collections for chefs, restaurants, and premium homes. We focus on authenticity, traceability, and refined flavor.</p>
      <p>Our curated spices bring authentic aroma and color to every recipe, with a portfolio built for luxury gifting, hospitality, and export markets.</p>
    </div>
  </section>

  <main>
    <section class="section intro">
      <div class="section-heading">
        <p class="section-tag">Our Promise</p>
        <h2>Elevated spice craftsmanship for premium gifting and export</h2>
      </div>
      <p>Al Saba Spices brings the essence of Indian culinary heritage to your table through refined blends, rich aromas, and export-ready quality designed for boutique gifting and hospitality.</p>
    </section>

    <section id="products" class="section">
      <div class="section-heading">
        <p class="section-tag">Featured Collection</p>
        <h2>Signature premium products</h2>
      </div>
      <div class="product-grid">
        <?php foreach ($products as $product): ?>
          <article class="product-card" tabindex="0" role="button"
            data-name="<?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?>"
            data-desc="<?= htmlspecialchars($product['desc'], ENT_QUOTES, 'UTF-8') ?>"
            data-detail="<?= htmlspecialchars($product['detail'], ENT_QUOTES, 'UTF-8') ?>"
            data-image="<?= htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8') ?>"
            data-price="<?= htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8') ?>"
            data-buy-url="<?= htmlspecialchars($product['buyUrl'], ENT_QUOTES, 'UTF-8') ?>">
            <img loading="lazy" decoding="async" src="<?= htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?>">
            <h3><?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?></h3>
            <p><?= htmlspecialchars($product['desc'], ENT_QUOTES, 'UTF-8') ?></p>
            <div class="product-price"><?= htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8') ?></div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section id="shop" class="section shop-section">
      <div class="section-heading">
        <p class="section-tag">E-commerce</p>
        <h2>Buy premium spices on leading marketplaces</h2>
      </div>
      <div class="marketplace-grid">
        <article class="marketplace-card">
          <h3>Meesho</h3>
          <p>Shop curated Indian spices on Meesho for convenient home delivery.</p>
          <a class="btn" href="https://www.meesho.com" target="_blank" rel="noopener">Visit Meesho</a>
        </article>
        <article class="marketplace-card">
          <h3>Flipkart</h3>
          <p>Find our premium blends on Flipkart with trusted delivery options.</p>
          <a class="btn" href="https://www.flipkart.com" target="_blank" rel="noopener">Visit Flipkart</a>
        </article>
        <article class="marketplace-card">
          <h3>Amazon</h3>
          <p>Buy export-ready Indian spices on Amazon for fast shipping.</p>
          <a class="btn" href="https://www.amazon.in" target="_blank" rel="noopener">Visit Amazon</a>
        </article>
        <article class="marketplace-card">
          <h3>JioMart</h3>
          <p>Order from JioMart for easy local delivery and grocery checkout.</p>
          <a class="btn" href="https://www.jiomart.com" target="_blank" rel="noopener">Visit JioMart</a>
        </article>
      </div>
    </section>

    <section id="gallery" class="section gallery-section">
      <div class="section-heading">
        <p class="section-tag">Visual Story</p>
        <h2>Luxury spice stories in motion</h2>
      </div>
      <div class="gallery-grid">
        <?php foreach ($galleryImages as $image): ?>
          <div class="gallery-card">
            <img loading="lazy" decoding="async" src="<?= htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ?>" alt="Al Saba Spices kitchen presentation">
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="section media-section">
      <div class="section-heading">
        <p class="section-tag">Watch & Learn</p>
        <h2>Recipe inspiration for refined kitchens</h2>
      </div>
      <div class="media-grid">
        <div class="video-card">
          <h3>Spice blending tips</h3>
          <iframe src="https://www.youtube.com/embed/6Q8wAodM0iY" title="Indian spice cooking video" allowfullscreen></iframe>
        </div>
        <div class="video-card">
          <h3>Traditional Indian kitchen recipes</h3>
          <iframe src="https://www.youtube.com/embed/5b0f0f7V2Q4" title="Traditional Indian kitchen recipe" allowfullscreen></iframe>
        </div>
      </div>
    </section>

    <section class="section articles-section">
      <div class="section-heading">
        <p class="section-tag">Insights</p>
        <h2>Articles & spice knowledge</h2>
      </div>
      <div class="article-grid">
        <?php foreach ($articles as $article): ?>
          <a class="article-card" href="/article.php?slug=<?= htmlspecialchars($article['slug'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener" aria-label="Read article: <?= htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8') ?>">
            <img loading="lazy" decoding="async" src="<?= htmlspecialchars($article['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8') ?>">
            <h3><?= htmlspecialchars($article['title'], ENT_QUOTES, 'UTF-8') ?></h3>
            <p><?= htmlspecialchars($article['text'], ENT_QUOTES, 'UTF-8') ?></p>
          </a>
        <?php endforeach; ?>
      </div>
    </section>

    <section id="contact" class="section contact">
      <div class="contact-card">
        <p class="section-tag">Contact</p>
        <h2>Bring premium Indian flavor to your market</h2>
        <p>For wholesale orders, luxury gifting requests, and export inquiries, reach out to us today.</p>
        <div class="hero-actions contact-actions">
          <a class="btn" href="mailto:info@alsabaspices.com">Email Us</a>
          <a class="btn btn-secondary" href="https://wa.me/971500000000" target="_blank" rel="noopener">WhatsApp Inquiry</a>
        </div>
      </div>
    </section>
  </main>

  <div class="product-modal" id="productModal" aria-hidden="true">
    <div class="product-modal-backdrop" data-close></div>
    <div class="product-modal-panel" role="dialog" aria-modal="true" aria-labelledby="modalProductName">
      <button class="product-modal-close" type="button" data-close aria-label="Close product details">×</button>
      <div class="product-modal-image">
        <img src="" alt="" id="modalProductImage">
      </div>
      <div class="product-modal-content">
        <p class="section-tag">Product detail</p>
        <h2 id="modalProductName"></h2>
        <p class="product-modal-short" id="modalProductDesc"></p>
        <p class="product-modal-detail" id="modalProductDetail"></p>
        <div class="product-price" id="modalProductPrice"></div>
        <a class="btn product-modal-buy" id="modalProductBuy" href="#" target="_blank" rel="noopener">Buy it now</a>
      </div>
    </div>
  </div>

  <footer class="footer">
    <p>Al Saba Spices</p>
    <p>Premium Indian spice blends for gifting, hospitality, and export-ready markets.</p>
    <a href="mailto:info@alsabaspices.com">info@alsabaspices.com</a>
    <div class="social" aria-label="Follow Al Saba Spices on social media">
      <a href="https://www.instagram.com/" target="_blank" rel="noopener" aria-label="Instagram">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M7 2h10a5 5 0 015 5v10a5 5 0 01-5 5H7a5 5 0 01-5-5V7a5 5 0 015-5z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M12 8.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M17.5 6.5h.01" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
      <a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M22 12a10 10 0 10-11.5 9.9v-7h-2.3v-2.9h2.3V9.1c0-2.3 1.4-3.6 3.5-3.6 1 0 2 .08 2 .08v2.2h-1.1c-1.1 0-1.4.66-1.4 1.3v1.6h2.4l-.38 2.9h-2v7A10 10 0 0022 12z" stroke="currentColor" stroke-width="0" fill="currentColor"/>
        </svg>
      </a>
      <a href="https://twitter.com/" target="_blank" rel="noopener" aria-label="Twitter">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0012 7v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z" stroke="currentColor" stroke-width="0" fill="currentColor"/>
        </svg>
      </a>
      <a href="https://www.youtube.com/" target="_blank" rel="noopener" aria-label="YouTube">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M22.54 6.42a2.78 2.78 0 00-1.95-1.97C18.88 4 12 4 12 4s-6.88 0-8.59.45A2.78 2.78 0 001.47 6.42 29.58 29.58 0 001 12a29.58 29.58 0 00.47 5.58 2.78 2.78 0 001.95 1.97C5.12 20 12 20 12 20s6.88 0 8.59-.45a2.78 2.78 0 001.95-1.97A29.58 29.58 0 0023 12a29.58 29.58 0 00-.46-5.58z" stroke="currentColor" stroke-width="0" fill="currentColor"/>
          <path d="M10 15l5-3-5-3v6z" fill="#fff"/>
        </svg>
      </a>
      <a href="https://www.linkedin.com/" target="_blank" rel="noopener" aria-label="LinkedIn">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M16 8a6 6 0 016 6v6h-4v-6a2 2 0 00-4 0v6h-4v-12h4v2a4 4 0 014-2z" stroke="currentColor" stroke-width="0" fill="currentColor"/>
          <rect x="2" y="9" width="4" height="12" rx="1" fill="currentColor"/>
          <circle cx="4" cy="4" r="2" fill="currentColor"/>
        </svg>
      </a>
    </div>
  </footer>

  <script>
    const productCards = document.querySelectorAll('.product-card');
    const modal = document.getElementById('productModal');
    const modalImage = document.getElementById('modalProductImage');
    const modalName = document.getElementById('modalProductName');
    const modalDesc = document.getElementById('modalProductDesc');
    const modalDetail = document.getElementById('modalProductDetail');
    const modalPrice = document.getElementById('modalProductPrice');
    const modalCloseTargets = document.querySelectorAll('[data-close]');
    const modalBuyButton = document.getElementById('modalProductBuy');

    function openModal(card) {
      modalImage.src = card.dataset.image;
      modalImage.alt = card.dataset.name;
      modalName.textContent = card.dataset.name;
      modalDesc.textContent = card.dataset.desc;
      modalDetail.textContent = card.dataset.detail;
      modalPrice.textContent = card.dataset.price;
      modalBuyButton.href = card.dataset.buyUrl || 'https://example.com/shop';
      modal.classList.add('product-modal-open');
      modal.setAttribute('aria-hidden', 'false');
    }

    function closeModal() {
      modal.classList.remove('product-modal-open');
      modal.setAttribute('aria-hidden', 'true');
    }

    productCards.forEach(card => {
      card.addEventListener('click', () => openModal(card));
      card.addEventListener('keydown', event => {
        if (event.key === 'Enter' || event.key === ' ') {
          event.preventDefault();
          openModal(card);
        }
      });
    });

    modalCloseTargets.forEach(trigger => {
      trigger.addEventListener('click', closeModal);
    });

    document.addEventListener('keydown', event => {
      if (event.key === 'Escape' && modal.classList.contains('product-modal-open')) {
        closeModal();
      }
    });
  </script>
</body>
</html>
