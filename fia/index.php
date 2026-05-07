<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison Vertumne Flowers</title>
    <link rel="stylesheet" href="/fia/Assets/css/sythop.css">
    <style>
        /* ── Cart ── */
        .cart-overlay {
            display: none; position: fixed; inset: 0;
            background: rgba(0,0,0,.35); z-index: 1000;
        }
        .cart-overlay.open { display: block; }
        .cart-drawer {
            position: fixed; top: 0; right: 0;
            width: 360px; max-width: 95vw; height: 100%;
            background: #fff; transform: translateX(100%);
            transition: transform .35s ease; z-index: 1001;
            display: flex; flex-direction: column; font-family: inherit;
        }
        .cart-drawer.open { transform: translateX(0); }
        .cart-header {
            display: flex; justify-content: space-between; align-items: center;
            padding: 1.2rem 1.4rem; border-bottom: 1px solid #e8e8e8;
        }
        .cart-header h3 { margin: 0; font-size: 1rem; letter-spacing: .08em; text-transform: uppercase; }
        .cart-close { background: none; border: none; font-size: 1.2rem; cursor: pointer; color: #666; }
        .cart-body { flex: 1; overflow-y: auto; padding: 1rem 1.4rem; }
        .cart-empty { text-align: center; color: #aaa; padding: 3rem 0; font-size: .9rem; }
        .cart-empty .empty-icon { font-size: 2.5rem; margin-bottom: .5rem; }
        .cart-item { display: flex; align-items: center; gap: .85rem; padding: .85rem 0; border-bottom: 1px solid #f0f0f0; }
        .cart-item-img { width: 56px; height: 56px; object-fit: cover; border-radius: 6px; background: #e8ede4; flex-shrink: 0; }
        .cart-item-img.placeholder { display: flex; align-items: center; justify-content: center; font-size: 1.5rem; }
        .cart-item-info { flex: 1; }
        .cart-item-name { font-weight: 600; font-size: .88rem; margin-bottom: .2rem; }
        .cart-item-price { color: #888; font-size: .82rem; }
        .cart-item-remove { background: none; border: none; color: #bbb; cursor: pointer; font-size: .78rem; text-decoration: underline; }
        .cart-item-remove:hover { color: #c0392b; }
        .cart-footer { padding: 1.2rem 1.4rem; border-top: 1px solid #e8e8e8; }
        .cart-total { display: flex; justify-content: space-between; font-size: .95rem; margin-bottom: 1rem; }
        .cart-total strong { font-size: 1.1rem; }
        .btn-checkout {
            display: block; width: 100%; padding: .75rem;
            background: #4a6741; color: #fff; border: none; border-radius: 8px;
            font-size: .9rem; letter-spacing: .06em; text-transform: uppercase;
            cursor: pointer; margin-bottom: .6rem; transition: background .2s;
        }
        .btn-checkout:hover { background: #3a5232; }
        .btn-continue {
            display: block; width: 100%; padding: .7rem;
            background: transparent; color: #4a6741; border: 1.5px solid #4a6741;
            border-radius: 8px; font-size: .88rem; letter-spacing: .06em;
            text-transform: uppercase; cursor: pointer; transition: all .2s;
        }
        .btn-continue:hover { background: #f0f4ee; }

        /* ══════════════════════════════
           LOGIN OVERLAY — single panel
        ══════════════════════════════ */
        .login-overlay {
            display: none; position: fixed; inset: 0;
            background: rgba(0,0,0,.55); z-index: 2000;
            align-items: center; justify-content: center;
        }
        .login-overlay.open { display: flex; }

        .login-panel {
            background: #fff;
            border-radius: 4px;
            padding: 2.4rem 2.2rem 2rem;
            width: 300px;
            position: relative;
            box-shadow: 0 8px 32px rgba(0,0,0,.18);
        }

        .login-close {
            position: absolute; top: .8rem; right: 1rem;
            background: none; border: none;
            font-size: 1rem; color: #bbb; cursor: pointer;
        }
        .login-close:hover { color: #333; }

        .login-panel h2 {
            font-size: .75rem;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: #555;
            margin: 0 0 1.8rem;
            text-align: center;
        }

        /* Field wrapper — holds both the normal and focus states */
        .field {
            position: relative;
            margin-bottom: 1.3rem;
        }

        .field label {
            display: block;
            font-size: .68rem;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: #aaa;
            margin-bottom: .3rem;
            transition: color .2s;
        }

        /* Base input */
        .field input {
            width: 100%;
            box-sizing: border-box;
            border: none;
            border-bottom: 1.5px solid #ddd;
            padding: .45rem 0;
            font-size: .88rem;
            outline: none;
            background: transparent;
            color: #222;
            transition: border-color .2s, background .2s, padding .2s;
            border-radius: 0;
        }

        /* ── HOVER variation ── 
           When user mouses over the input, it gets a subtle 
           filled-box look (the "other variation" you described) */
        .field input:hover {
            background: #f5f0f0;
            border-bottom-color: #c9b0b0;
            padding: .45rem .5rem;
            border-radius: 3px 3px 0 0;
        }

        /* ── FOCUS variation ──
           When actively typing, label turns green and line goes green */
        .field input:focus {
            background: #f5f0f0;
            border-bottom-color: #4a6741;
            padding: .45rem .5rem;
            border-radius: 3px 3px 0 0;
        }
        .field input:focus ~ label,
        .field:focus-within label {
            color: #4a6741;
        }

        .btn-login {
            display: block; width: 100%;
            padding: .65rem;
            background: #2c2c2c; color: #fff;
            border: none; border-radius: 3px;
            font-size: .82rem; letter-spacing: .1em;
            text-transform: uppercase; cursor: pointer;
            margin: .4rem 0 1rem;
            transition: background .2s;
        }
        .btn-login:hover { background: #4a6741; }

        .login-links {
            display: flex; justify-content: space-between;
            font-size: .7rem;
        }
        .login-links a { color: #aaa; text-decoration: none; }
        .login-links a:hover { color: #4a6741; text-decoration: underline; }
    </style>
</head>
<body>

    <!-- ══ LOGIN OVERLAY ══ -->
    <div class="login-overlay" id="loginOverlay" onclick="handleLoginBgClick(event)">
        <div class="login-panel">
            <button class="login-close" onclick="closeLogin()">✕</button>
            <h2>Welcome to Maison Vertumne</h2>

            <div class="field">
                <label for="loginEmail">E-mail</label>
                <input type="email" id="loginEmail" placeholder="your@email.com">
            </div>

            <div class="field">
                <label for="loginPass">Password</label>
                <input type="password" id="loginPass" placeholder="••••••••">
            </div>

            <button class="btn-login" onclick="handleLogin()">Log In</button>

            <div class="login-links">
                <a href="#">Forgot your password?</a>
                <a href="#">Create an account</a>
            </div>
        </div>
    </div>

    <!-- ══ HEADER ══ -->
    <header>
        <div class="top-nav">
            <div class="logo">
                <img src="../image/logo.png" alt="Maison Vertumne Logo">
            </div>
            <div class="user-menu">
                <a href="#" onclick="openLogin(); return false;">Login</a>
                <a href="#" id="cartNavLink" onclick="openCart(); return false;">Shopping Cart (0)</a>
            </div>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="bfd.html">Bouquets for delivery</a></li>
                <li><a href="eshop-grief.html">E-Shop</a></li>
            </ul>
        </nav>
    </header>

    <!-- ══ HERO ══ -->
    <section class="hero">
        <p class="subtitle">Artisan fleuriste depuis 1995</p>
        <h1>MAISON VERTUMNE FLOWERS</h1>
        <p class="tagline">Atelier floral au coeur de Paris</p>
        <p class="description">It is first and foremost a story, a date, an emotion that deserves to be celebrated with colors and flowers. This story is told to us by you.</p>
    </section>

    <!-- ══ GALLERY ══ -->
    <section class="gallery-section">
        <div class="container">
            <div class="image-grid">
                <div class="photo-wrap"><img src="../image/bunga1.png" alt="Flower 1"></div>
                <div class="photo-wrap"><img src="../image/bunga2.jpg" alt="Flower 2"></div>
                <div class="photo-wrap"><img src="../image/bunga3.jpg" alt="Flower 3"></div>
                <div class="photo-wrap"><img src="../image/bunga4.jpg" alt="Flower 4"></div>
            </div>
        </div>
    </section>

    <!-- ══ CART ══ -->
    <div class="cart-overlay" id="cartOverlay" onclick="closeCart()"></div>
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

    <script>
        /* ── LOGIN ── */
        function openLogin()  { document.getElementById('loginOverlay').classList.add('open'); }
        function closeLogin() { document.getElementById('loginOverlay').classList.remove('open'); }
        function handleLoginBgClick(e) {
            if (e.target === document.getElementById('loginOverlay')) closeLogin();
        }
        function handleLogin() {
            const email = document.getElementById('loginEmail').value.trim();
            const pass  = document.getElementById('loginPass').value;
            if (!email || !pass) { alert('Please fill in both fields.'); return; }
            alert('Welcome back! 🌿');
            closeLogin();
        }

        /* ── CART ── */
        let cart = [];
        function openCart()  { document.getElementById('cartOverlay').classList.add('open');  document.getElementById('cartDrawer').classList.add('open'); }
        function closeCart() { document.getElementById('cartOverlay').classList.remove('open'); document.getElementById('cartDrawer').classList.remove('open'); }

        function addToCart(name, price, imgSrc) {
            const existing = cart.find(i => i.name === name);
            if (existing) existing.qty++;
            else cart.push({ name, price, qty: 1, img: imgSrc });
            updateCartUI(); openCart();
        }
        function removeFromCart(idx) { cart.splice(idx, 1); updateCartUI(); }

        function updateCartUI() {
            const count = cart.reduce((s,i) => s + i.qty, 0);
            const total = cart.reduce((s,i) => s + i.price * i.qty, 0);
            document.getElementById('cartNavLink').textContent = `Shopping Cart (${count})`;
            document.getElementById('cartTotal').textContent = '€' + total.toLocaleString();
            const body = document.getElementById('cartBody');
            const footer = document.getElementById('cartFooter');
            if (cart.length === 0) {
                body.innerHTML = `<div class="cart-empty"><div class="empty-icon">🌿</div><p>Your cart is empty.<br>Add an arrangement.</p></div>`;
                footer.style.display = 'none';
            } else {
                footer.style.display = 'block';
                body.innerHTML = cart.map((item, idx) => `
                    <div class="cart-item">
                        <img class="cart-item-img" src="${item.img}" alt="${item.name}"
                             onerror="this.outerHTML='<div class=\\'cart-item-img placeholder\\'>🌿</div>'">
                        <div class="cart-item-info">
                            <div class="cart-item-name">${item.name}</div>
                            <div class="cart-item-price">€${item.price.toLocaleString()} × ${item.qty}</div>
                        </div>
                        <button class="cart-item-remove" onclick="removeFromCart(${idx})">Remove</button>
                    </div>`).join('');
            }
        }

        function checkout() {
            alert('Thank you for your order. 🌿\nOur team will reach out to confirm your arrangement details.');
            cart = []; updateCartUI(); closeCart();
        }
    </script>

</body>
</html>