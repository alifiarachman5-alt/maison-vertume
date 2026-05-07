<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Maison Vertumne - Gift Card</title>
    <link rel="stylesheet" href="style-shop.css">
</head>
    <style>
        /* ── Cart Button ── */
        .cart-nav-btn {
            position: fixed;
            top: 1.2rem;
            right: 1.5rem;
            background: #4a6741;
            color: #fff;
            border: none;
            border-radius: 50px;
            padding: .55rem 1.1rem;
            font-size: .95rem;
            cursor: pointer;
            z-index: 999;
            display: flex;
            align-items: center;
            gap: .45rem;
        }
        .cart-nav-btn .cart-count {
            background: #fff;
            color: #4a6741;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: .72rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* ── Add to Cart btn on product card ── */
        .product-item {
            position: relative;
        }
        .btn-add {
            display: block;
            width: 100%;
            margin-top: .6rem;
            padding: .5rem;
            background: #4a6741;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: .85rem;
            cursor: pointer;
            letter-spacing: .04em;
            transition: background .2s;
        }
        .btn-add:hover { background: #3a5232; }

        /* ── Overlay ── */
        .cart-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,.35);
            z-index: 1000;
        }
        .cart-overlay.open { display: block; }

        /* ── Drawer ── */
        .cart-drawer {
            position: fixed;
            top: 0; right: 0;
            width: 360px;
            max-width: 95vw;
            height: 100%;
            background: #fff;
            transform: translateX(100%);
            transition: transform .35s ease;
            z-index: 1001;
            display: flex;
            flex-direction: column;
            font-family: inherit;
        }
        .cart-drawer.open { transform: translateX(0); }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.2rem 1.4rem;
            border-bottom: 1px solid #e8e8e8;
        }
        .cart-header h3 {
            margin: 0;
            font-size: 1rem;
            letter-spacing: .08em;
            text-transform: uppercase;
        }
        .cart-close {
            background: none;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            color: #666;
            line-height: 1;
        }

        .cart-body {
            flex: 1;
            overflow-y: auto;
            padding: 1rem 1.4rem;
        }

        .cart-empty {
            text-align: center;
            color: #aaa;
            padding: 3rem 0;
            font-size: .9rem;
        }
        .cart-empty .empty-icon { font-size: 2.5rem; margin-bottom: .5rem; }

        .cart-item {
            display: flex;
            align-items: center;
            gap: .85rem;
            padding: .85rem 0;
            border-bottom: 1px solid #f0f0f0;
        }
        .cart-item-img {
            width: 56px;
            height: 56px;
            object-fit: cover;
            border-radius: 6px;
            background: #e8ede4;
            flex-shrink: 0;
        }
        .cart-item-img.placeholder {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }
        .cart-item-info { flex: 1; }
        .cart-item-name  { font-weight: 600; font-size: .88rem; margin-bottom: .2rem; }
        .cart-item-price { color: #888; font-size: .82rem; }

        .cart-item-remove {
            background: none;
            border: none;
            color: #bbb;
            cursor: pointer;
            font-size: .78rem;
            text-decoration: underline;
            white-space: nowrap;
        }
        .cart-item-remove:hover { color: #c0392b; }

        .cart-footer {
            padding: 1.2rem 1.4rem;
            border-top: 1px solid #e8e8e8;
        }
        .cart-total {
            display: flex;
            justify-content: space-between;
            font-size: .95rem;
            margin-bottom: 1rem;
        }
        .cart-total strong { font-size: 1.1rem; }

        .btn-checkout {
            display: block;
            width: 100%;
            padding: .75rem;
            background: #4a6741;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: .9rem;
            letter-spacing: .06em;
            text-transform: uppercase;
            cursor: pointer;
            margin-bottom: .6rem;
            transition: background .2s;
        }
        .btn-checkout:hover { background: #3a5232; }

        .btn-continue {
            display: block;
            width: 100%;
            padding: .7rem;
            background: transparent;
            color: #4a6741;
            border: 1.5px solid #4a6741;
            border-radius: 8px;
            font-size: .88rem;
            letter-spacing: .06em;
            text-transform: uppercase;
            cursor: pointer;
            transition: all .2s;
        }
        .btn-continue:hover { background: #f0f4ee; }
    </style>

<body>

    <!-- ── Floating Cart Button ── -->
    <button class="cart-nav-btn" onclick="openCart()">
        🛒 Cart
        <span class="cart-count" id="cartCount">0</span>
    </button>

    <!-- ── Overlay ── -->
    <div class="cart-overlay" id="cartOverlay" onclick="closeCart()"></div>

    <!-- ── Cart Drawer ── -->
    <div class="cart-drawer" id="cartDrawer">
        <div class="cart-header">
            <h3>Your Cart</h3>
            <button class="cart-close" onclick="closeCart()">✕</button>
        </div>
        <div class="cart-body" id="cartBody">
            <div class="cart-empty">
                <div class="empty-icon">🌿</div>
                <p>Your cart is empty.<br>Add an arrangement.</p>
            </div>
        </div>
        <div class="cart-footer" id="cartFooter" style="display:none;">
            <div class="cart-total">
                <span>Total</span>
                <strong id="cartTotal">€0</strong>
            </div>
            <button class="btn-checkout" onclick="checkout()">Checkout →</button>
            <button class="btn-continue" onclick="closeCart()">Continue Shopping</button>
        </div>
    </div>

    <div class="container">
        <header>
            <h1>MAISON VERTUMNE FLOWERS</h1>
        </header>

        <div class="main-content">
            <aside class="sidebar">
                <nav>
                    <ul>
                        <li><a href="eshop-grief.html">Grief</a></li>
                        <li><a href="bouquets.html">Bouquets</a></li>
                        <li><a href="gift-card.html" class="active">Gift Card</a></li>
                        <li><a href="course.html">Course</a></li>
                        <li><a href="index.html">Home</a></li>
                    </ul>
                </nav>
            </aside>

            <div class="product-grid">
                <div class="product-card">
                    <div class="img-box"><img src="../image/gc1.jpg" alt="3-class Subscription Card"></div>
                    <h3>3-class Subscription Card</h3>
                    <p>€230.00</p>
                    <button class="btn-add" onclick="addToCart('Basket', 250, '../image/g01.jpg')">Add to Cart</button>
                </div>
                <div class="product-card">
                    <div class="img-box"><img src="../image/gc2.jpg" alt="Privilege Card"></div>
                    <h3>Privilege Card</h3>
                    <p>€195.00</p>
                    <button class="btn-add" onclick="addToCart('Basket', 250, '../image/g01.jpg')">Add to Cart</button>
                </div>
                <div class="product-card">
                    <div class="img-box"><img src="../image/gc3.jpg" alt="5-Course Subscription Card"></div>
                    <h3>5-Course Subscription Card</h3>
                    <p>€450.00</p>
                    <button class="btn-add" onclick="addToCart('Basket', 250, '../image/g01.jpg')">Add to Cart</button>
                </div>
                <div class="product-card">
                    <div class="img-box"><img src="../image/gc4.jpg" alt="Floral Subscription Card"></div>
                    <h3>Floral Subscription Card</h3>
                    <p>Starting from €120.00</p>
                    <button class="btn-add" onclick="addToCart('Basket', 250, '../image/g01.jpg')">Add to Cart</button>
                </div>
                <div class="product-card">
                    <div class="img-box"><img src="../image/gc5.jpg" alt="Shopping Card"></div>
                    <h3>Shopping Card</h3>
                    <p>Starting from €50.00</p>
                    <button class="btn-add" onclick="addToCart('Basket', 250, '../image/g01.jpg')">Add to Cart</button>
                </div>
                <div class="product-card">
                    <div class="img-box"><img src="../image/gc6.jpg" alt="Single Course Card"></div>
                    <h3>Single Course Card</h3>
                    <p>€95.00</p>
                    <button class="btn-add" onclick="addToCart('Basket', 250, '../image/g01.jpg')">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-green">
        <div class="footer-grid">
            <div class="footer-logo">
                <img src="../image/logo.png" alt="Logo">
            </div>
            <div class="footer-column">
                <h4>Information</h4>
                <a href="#">Contact us</a>
            </div>
            <div class="footer-column">
                <h4>Our networks</h4>
                <div class="social-icons">
                    <a href="#">Instagram</a>
                    <a href="#">Facebook</a>
                </div>
            </div>
            <div class="footer-column">
                <h4>The Shop</h4>
                <p>Maison Vertumne, 12 rue de la Sourdière, 75001 Paris</p>
                <p>Monday - Friday: 10:00 - 18:00</p>
                <p>contact@maisonvertumne.fr</p>
            </div>
        </div>
        <div class="newsletter">
            <p>Sign up with your email address to receive news and updates from Maison Vertumne</p>
            <input type="email" placeholder="Your Email Address">
        </div>
    </footer>

    <script>
        let cart = [];

        function openCart() {
            document.getElementById('cartOverlay').classList.add('open');
            document.getElementById('cartDrawer').classList.add('open');
        }

        function closeCart() {
            document.getElementById('cartOverlay').classList.remove('open');
            document.getElementById('cartDrawer').classList.remove('open');
        }

        function addToCart(name, price, imgSrc) {
            const existing = cart.find(i => i.name === name);
            if (existing) {
                existing.qty++;
            } else {
                cart.push({ name, price, qty: 1, img: imgSrc });
            }
            updateCartUI();
            openCart();
        }

        function removeFromCart(idx) {
            cart.splice(idx, 1);
            updateCartUI();
        }

        function updateCartUI() {
            const count = cart.reduce((sum, i) => sum + i.qty, 0);
            const total = cart.reduce((sum, i) => sum + i.price * i.qty, 0);

            document.getElementById('cartCount').textContent = count;
            document.getElementById('cartTotal').textContent = '€' + total.toLocaleString();

            const body   = document.getElementById('cartBody');
            const footer = document.getElementById('cartFooter');

            if (cart.length === 0) {
                body.innerHTML = `
                    <div class="cart-empty">
                        <div class="empty-icon">🌿</div>
                        <p>Your cart is empty.<br>Add an arrangement.</p>
                    </div>`;
                footer.style.display = 'none';
            } else {
                footer.style.display = 'block';
                body.innerHTML = cart.map((item, idx) => `
                    <div class="cart-item">
                        <img
                            class="cart-item-img"
                            src="${item.img}"
                            alt="${item.name}"
                            onerror="this.outerHTML='<div class=\\'cart-item-img placeholder\\'>🌿</div>'"
                        >
                        <div class="cart-item-info">
                            <div class="cart-item-name">${item.name}</div>
                            <div class="cart-item-price">€${item.price.toLocaleString()} × ${item.qty}</div>
                        </div>
                        <button class="cart-item-remove" onclick="removeFromCart(${idx})">Remove</button>
                    </div>
                `).join('');
            }
        }

        function checkout() {
            alert('Thank you for your order. 🌿\nOur team will reach out to confirm your arrangement details.');
            cart = [];
            updateCartUI();
            closeCart();
        }
    </script>

</body>
</html>
