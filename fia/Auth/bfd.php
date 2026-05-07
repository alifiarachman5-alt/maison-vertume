<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bouquets for Delivery — Maison Vertumne</title>
  <link rel="stylesheet" href="style-bfd.css">
</head>
<body>

<!-- ═══ NAVBAR ═══ -->
<nav class="navbar" id="navbar">
  <div class="nav-inner">
    <a href="index.html" class="nav-logo">
      <div class="nav-logo-emblem">🌿</div>
      <div class="nav-logo-text">
        Maison Vertumne
        <small>Artisan Fleuriste</small>
      </div>
    </a>
    <div class="nav-links" id="navLinks">
      <a href="bouquet-delivery.html" class="active">Bouquets for Delivery</a>
      <a href="eshop-grief.html">E-Shop</a>
      <a href="index.html">Home</a>
    </div>
    <div class="nav-right">
      <a href="#" class="nav-login">Login</a>
      <button class="nav-cart" id="navCartBtn" title="Shopping Cart" onclick="openCart()">
        🛒
        <span class="cart-count" id="cartCount">0</span>
      </button>
      <button class="nav-burger" id="navBurger" aria-label="Menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</nav>

<!-- ═══ DELIVERY HERO ═══ -->
<section class="delivery-hero">
  <div class="dh-bg-decor"></div>
  <div class="container">
    <div class="dh-inner">
      <div class="dh-content">
        <span class="eyebrow">Free delivery in Paris</span>
        <h1>Vertumne Bouquets<br><em>Available for Delivery</em></h1>
        <p class="dh-desc">
          Our bouquets are made with care and specialise in flower arrangements,
          with the seasons, with flowers and natural elements, living and dried.
          Delivery in Paris, from €45, same day if ordered before noon.
        </p>
        <div class="dh-cta">
          <a href="#bouquets" class="btn btn-white">🌸 Browse Bouquets</a>
          <a href="eshop-grief.html" class="btn btn-outline" style="color:#fff;border-color:rgba(255,255,255,.5);">Full E-Shop</a>
        </div>
        <div class="dh-meta">
          <div class="dh-meta-item">
            <span class="meta-icon">🚚</span>
            <div>
              <strong>Same day delivery</strong>
              <span>Order before 12:00 noon</span>
            </div>
          </div>
          <div class="dh-meta-item">
            <span class="meta-icon">📍</span>
            <div>
              <strong>Paris all zones</strong>
              <span>All 20 arrondissements</span>
            </div>
          </div>
        </div>
      </div>
      <div class="dh-image">
        <div class="dh-img-frame">
          <img src="../image/bunga1.png" alt="Delivery Bouquet" onerror="this.parentNode.innerHTML='<div class=\'placeholder-img\'>🌺</div>'">
        </div>
        <div class="dh-price-pill">
          <span class="pill-label">Starting from</span>
          <span class="pill-price">€45</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ HOW IT WORKS ═══ -->
<section class="how-section">
  <div class="container">
    <div class="gallery-header" style="text-align:center;margin-bottom:3rem;">
      <span class="eyebrow">How It Works</span>
      <h2>Order in 3 Simple Steps</h2>
      <div class="divider-line center"></div>
    </div>
    <div class="steps-row">
      <div class="step-item">
        <div class="step-num">01</div>
        <div class="step-icon">🌸</div>
        <h3>Choose your Bouquet</h3>
        <p>Browse our seasonal collections and pick the arrangement that speaks to you.</p>
      </div>
      <div class="step-arrow">→</div>
      <div class="step-item">
        <div class="step-num">02</div>
        <div class="step-icon">💌</div>
        <h3>Add a Personal Card</h3>
        <p>Write your heartfelt message and we'll include a handwritten card with every bouquet.</p>
      </div>
      <div class="step-arrow">→</div>
      <div class="step-item">
        <div class="step-num">03</div>
        <div class="step-icon">🚚</div>
        <h3>We Deliver with Care</h3>
        <p>Your fresh bouquet arrives beautifully wrapped — same day across all of Paris.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ BOUQUET CARDS ═══ (main content from reference image) -->
<section class="bouquets-delivery-section" id="bouquets">
  <div class="container">
    <div class="gallery-header">
      <span class="eyebrow">Our Collections</span>
      <h2>Discover Our Bouquets</h2>
      <div class="divider-line"></div>
      <p style="max-width:560px;margin-top:.8rem;">
        Each bouquet is handmade with the finest seasonal flowers, crafted in our Parisian atelier.
      </p>
    </div>

    <div class="delivery-grid">
      <!-- Card 1 — large featured -->
      <div class="delivery-card featured">
        <div class="dc-img">
          <img src="../image/bunga1.png" alt="Sunset Bouquet" onerror="this.parentNode.innerHTML='<div class=\'placeholder-img pc-1\'>🌺</div>'">
          <div class="dc-overlay">
            <button class="dc-quick-order" onclick="addToCart('Sunset Bouquet', 65)">Add to Cart →</button>
          </div>
        </div>
        <div class="dc-info">
          <div class="dc-info-top">
            <span class="dc-tag">Bestseller</span>
            <span class="dc-price">€65</span>
          </div>
          <h3>Discover the Sunset Bouquet</h3>
          <p>A warm mix of peach, coral and cream blooms, ideal for birthdays and celebrations. Peony, ranunculus and garden roses.</p>
          <ul class="dc-details">
            <li>🌸 Seasonal flowers</li>
            <li>📦 Eco packaging included</li>
            <li>💌 Free personal card</li>
          </ul>
          <button class="btn btn-primary" onclick="addToCart('Sunset Bouquet', 65)">Order Now</button>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="delivery-card">
        <div class="dc-img">
          <img src="../image/bunga2.jpg" alt="Bouquet of the Month" onerror="this.parentNode.innerHTML='<div class=\'placeholder-img pc-2\'>🌹</div>'">
          <div class="dc-overlay">
            <button class="dc-quick-order" onclick="addToCart('Bouquet of the Month', 55)">Add to Cart →</button>
          </div>
        </div>
        <div class="dc-info">
          <div class="dc-info-top">
            <span class="dc-tag seasonal">Seasonal</span>
            <span class="dc-price">€55</span>
          </div>
          <h3>Discover Our Bouquet of the Month</h3>
          <p>Our artisans handpick the most beautiful flowers of the month, always fresh and always unique.</p>
          <button class="btn btn-primary" onclick="addToCart('Bouquet of the Month', 55)">Order Now</button>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="delivery-card">
        <div class="dc-img">
          <img src="../image/bunga3.jpg" alt="Natural Bouquet" onerror="this.parentNode.innerHTML='<div class=\'placeholder-img pc-3\'>🌿</div>'">
          <div class="dc-overlay">
            <button class="dc-quick-order" onclick="addToCart('Natural Bouquet', 48)">Add to Cart →</button>
          </div>
        </div>
        <div class="dc-info">
          <div class="dc-info-top">
            <span class="dc-tag new">New</span>
            <span class="dc-price">€48</span>
          </div>
          <h3>Discover the Natural Bouquet</h3>
          <p>Wild greenery, dried elements and seasonal flowers — a rustic, organic arrangement inspired by nature.</p>
          <button class="btn btn-primary" onclick="addToCart('Natural Bouquet', 48)">Order Now</button>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="delivery-card">
        <div class="dc-img">
          <img src="../image/bunga4.jpg" alt="Classic Bouquet" onerror="this.parentNode.innerHTML='<div class=\'placeholder-img pc-4\'>🌷</div>'">
          <div class="dc-overlay">
            <button class="dc-quick-order" onclick="addToCart('Classic Rose Bouquet', 75)">Add to Cart →</button>
          </div>
        </div>
        <div class="dc-info">
          <div class="dc-info-top">
            <span class="dc-tag premium">Premium</span>
            <span class="dc-price">€75</span>
          </div>
          <h3>Classic Rose Bouquet</h3>
          <p>Timeless elegance — a luxurious arrangement of garden roses in blush, ivory and champagne tones.</p>
          <button class="btn btn-primary" onclick="addToCart('Classic Rose Bouquet', 75)">Order Now</button>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="delivery-card">
        <div class="dc-img">
          <img src="../image/bunga1.png" alt="Spring Bouquet" onerror="this.parentNode.innerHTML='<div class=\'placeholder-img pc-5\'>🌼</div>'">
          <div class="dc-overlay">
            <button class="dc-quick-order" onclick="addToCart('Spring Garden Bouquet', 52)">Add to Cart →</button>
          </div>
        </div>
        <div class="dc-info">
          <div class="dc-info-top">
            <span class="dc-tag">Spring</span>
            <span class="dc-price">€52</span>
          </div>
          <h3>Spring Garden Bouquet</h3>
          <p>Light, fresh and joyful — tulips, anemones and sweet peas in pastel shades of lavender and blush.</p>
          <button class="btn btn-primary" onclick="addToCart('Spring Garden Bouquet', 52)">Order Now</button>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="delivery-card">
        <div class="dc-img">
          <img src="../image/bunga2.jpg" alt="Luxury Bouquet" onerror="this.parentNode.innerHTML='<div class=\'placeholder-img pc-6\'>🌺</div>'">
          <div class="dc-overlay">
            <button class="dc-quick-order" onclick="addToCart('Luxury Grand Bouquet', 120)">Add to Cart →</button>
          </div>
        </div>
        <div class="dc-info">
          <div class="dc-info-top">
            <span class="dc-tag premium">Luxury</span>
            <span class="dc-price">€120</span>
          </div>
          <h3>Luxury Grand Bouquet</h3>
          <p>An opulent statement piece with dahlias, garden roses and trailing foliage — perfect for grand occasions.</p>
          <button class="btn btn-primary" onclick="addToCart('Luxury Grand Bouquet', 120)">Order Now</button>
        </div>
      </div>
    </div>

    <div style="text-align:center;margin-top:3rem;">
      <a href="eshop.html" class="btn btn-outline">View All Products in E-Shop →</a>
    </div>
  </div>
</section>

<!-- ═══ DELIVERY ZONES ═══ -->
<section class="zones-section">
  <div class="container">
    <div class="zones-grid">
      <div class="zones-content">
        <span class="eyebrow">Delivery Zones</span>
        <h2>We Deliver All Across Paris</h2>
        <div class="divider-line"></div>
        <p>From the historic Marais to the trendy Montmartre, we deliver fresh handmade bouquets to every corner of Paris.</p>
        <div class="zones-list">
          <div class="zone-tag">1er–4e · Centre Historique</div>
          <div class="zone-tag">5e–6e · Saint-Germain</div>
          <div class="zone-tag">7e–8e · Invalides & Champs-Élysées</div>
          <div class="zone-tag">9e–11e · Pigalle & République</div>
          <div class="zone-tag">12e–15e · Sud Paris</div>
          <div class="zone-tag">16e–20e · Suburbs included</div>
        </div>
        <p class="zones-note">🕐 Order before 12:00 for same-day delivery. Orders placed after noon are delivered the next morning.</p>
      </div>
      <div class="zones-visual">
        <div class="map-placeholder">
          <span style="font-size:4rem;">🗺️</span>
          <p>Paris Delivery Map</p>
          <small>All 20 arrondissements covered</small>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FAQ CONTACT ═══ -->
<section class="faq-section" style="padding:80px 0;background:var(--sage-ultra);">
  <div class="container">
    <div class="faq-inner" style="max-width:680px;margin:0 auto;text-align:center;">
      <span class="eyebrow">Support</span>
      <h2>Do you have any other questions?</h2>
      <div class="divider-line center"></div>
      <p style="margin-bottom:2rem;">
        Feel free to contact our team. We'll be happy to help you with your order, a custom arrangement, or a delivery question.
      </p>
      <div class="faq-contact">
        <h3 style="font-family:'Playfair Display',serif;font-size:1.3rem;color:#fff;margin-bottom:.8rem;">Get in Touch</h3>
        <p style="color:rgba(255,255,255,.78);margin-bottom:1rem;font-size:.88rem;">Mon–Sat 9:00–18:00 | We'll respond within the hour.</p>
        <a href="tel:+33123456789" style="font-family:'Playfair Display',serif;font-size:1.5rem;color:#fff;display:block;margin-bottom:1.5rem;">+33 (0)1 23 45 67 89</a>
        <a href="mailto:hello@maisonvertumne.fr" class="btn btn-white">✉ hello@maisonvertumne.fr</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ FOOTER ═══ -->
<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="logo-wrap">
          <div class="emblem">🌿</div>
          <div class="brand-name">Maison Vertumne<small>Artisan Fleuriste</small></div>
        </div>
        <p>Artisan florist since 1995. Handcrafted bouquets delivered with love across Paris.</p>
      </div>
      <div class="footer-col">
        <h4>Navigation</h4>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="bouquet-delivery.html">Bouquets for Delivery</a></li>
          <li><a href="eshop-grief.html">E-Shop</a></li>
          <li><a href="#">News</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Collections</h4>
        <ul>
          <li><a href="#">Seasonal Bouquets</a></li>
          <li><a href="#">Wedding Flowers</a></li>
          <li><a href="#">Gift Sets</a></li>
          <li><a href="#">Corporate</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Contact</h4>
        <address>12 Rue des Fleurs<br>75004 Paris, France<br><br>+33 (0)1 23 45 67 89<br>hello@maisonvertumne.fr</address>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2025 Maison Vertumne Flowers. All rights reserved.</p>
      <div class="social-links">
        <a href="#" title="Instagram">📷</a>
        <a href="#" title="Facebook">📘</a>
        <a href="#" title="Pinterest">📌</a>
      </div>
    </div>
  </div>
</footer>

<!-- ═══ CART DRAWER ═══ -->
<div class="cart-overlay" id="cartOverlay" onclick="closeCart()"></div>
<div class="cart-drawer" id="cartDrawer">
  <div class="cart-header">
    <h3>🛒 Your Cart</h3>
    <button class="cart-close" onclick="closeCart()">✕</button>
  </div>
  <div class="cart-body" id="cartBody">
    <div class="cart-empty">
      <div class="empty-icon">🌸</div>
      <p>Your cart is empty.<br>Add a beautiful bouquet!</p>
    </div>
  </div>
  <div class="cart-footer" id="cartFooter" style="display:none;">
    <div class="cart-total">
      <span>Total</span>
      <strong id="cartTotal">€0</strong>
    </div>
    <a href="eshop.html" class="btn btn-primary" style="width:100%;justify-content:center;margin-bottom:.8rem;">Checkout</a>
    <button onclick="closeCart()" class="btn btn-outline" style="width:100%;justify-content:center;">Continue Shopping</button>
  </div>
</div>

<script>
  // Navbar scroll
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 40);
  });

  // Mobile nav
  document.getElementById('navBurger').addEventListener('click', () => {
    document.getElementById('navLinks').classList.toggle('open');
  });

  // Cart state
  let cart = [];

  function openCart() {
    document.getElementById('cartOverlay').classList.add('open');
    document.getElementById('cartDrawer').classList.add('open');
  }
  function closeCart() {
    document.getElementById('cartOverlay').classList.remove('open');
    document.getElementById('cartDrawer').classList.remove('open');
  }

  function addToCart(name, price) {
    const existing = cart.find(i => i.name === name);
    if (existing) existing.qty++;
    else cart.push({ name, price, qty: 1 });
    updateCart();
    openCart();
  }

  function removeFromCart(idx) {
    cart.splice(idx, 1);
    updateCart();
  }

  function updateCart() {
    const count = cart.reduce((s, i) => s + i.qty, 0);
    const total = cart.reduce((s, i) => s + i.price * i.qty, 0);
    document.getElementById('cartCount').textContent = count;
    document.getElementById('cartTotal').textContent = '€' + total;

    const body = document.getElementById('cartBody');
    const footer = document.getElementById('cartFooter');

    if (cart.length === 0) {
      body.innerHTML = '<div class="cart-empty"><div class="empty-icon">🌸</div><p>Your cart is empty.<br>Add a beautiful bouquet!</p></div>';
      footer.style.display = 'none';
    } else {
      footer.style.display = 'block';
      body.innerHTML = cart.map((item, idx) => `
        <div class="cart-item">
          <div class="cart-item-img"><div class="placeholder-img" style="background:linear-gradient(145deg,#c5d4b0,#9bae8b);display:flex;align-items:center;justify-content:center;font-size:1.2rem;">🌸</div></div>
          <div class="cart-item-info">
            <div class="cart-item-name">${item.name}</div>
            <div class="cart-item-price">€${item.price} × ${item.qty}</div>
          </div>
          <button class="cart-item-remove" onclick="removeFromCart(${idx})">Remove</button>
        </div>
      `).join('');
    }
  }
</script>
</body>
</html>
