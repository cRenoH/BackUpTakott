<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DariMata Studio - Keranjang Belanja Anda">
    <meta name="keywords" content="DariMata, Fashion, E-commerce, Keranjang Belanja, Cart">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keranjang Belanja - DariMata Studio</title>

    <!-- Google Font: Nunito Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">

    <style>
        /* Shopping Cart Page Styles */
        .shopping-cart-section {
            padding: 40px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .section-title h2 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-color);
        }

        .cart-table-container {
            background-color: var(--background-color);
            padding: 20px;
            border-radius: 8px;
            box-shadow: var(--box-shadow);
            margin-bottom: 30px;
        }

        .cart-table {
            width: 100%;
            border-collapse: collapse;
        }

        .cart-table th,
        .cart-table td {
            padding: 15px 10px;
            text-align: left;
            border-bottom: 1px solid var(--border-color);
            vertical-align: middle;
        }

        .cart-table th {
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            color: var(--text-light-color);
        }

        .cart-table td.product-thumbnail img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 4px;
            border: 1px solid var(--border-color);
        }

        .cart-table td.product-name a {
            font-weight: 600;
            color: var(--text-color);
            font-size: 0.95rem;
        }

        .cart-table td.product-name a:hover {
            color: var(--primary-color);
        }

        .cart-table td.product-name .product-meta-cart {
            font-size: 0.8rem;
            color: var(--text-light-color);
            display: block;
            margin-top: 4px;
        }

        .cart-table .quantity-input-group-cart {
            display: flex;
            align-items: center;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            width: 90px;
            /* Lebar tetap untuk quantity */
        }

        .cart-table .quantity-input-group-cart button {
            background-color: var(--light-gray-color);
            border: none;
            color: var(--text-color);
            padding: 8px 10px;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .cart-table .quantity-input-group-cart input {
            width: 40px;
            text-align: center;
            border: none;
            padding: 8px 0;
            font-size: 0.9rem;
            font-weight: 600;
            border-left: 1px solid var(--border-color);
            border-right: 1px solid var(--border-color);
        }

        .cart-table .quantity-input-group-cart input::-webkit-outer-spin-button,
        .cart-table .quantity-input-group-cart input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .cart-table td.product-price,
        .cart-table td.product-subtotal {
            font-weight: 600;
            font-size: 0.95rem;
        }

        .cart-table td.product-remove .remove-item-btn {
            color: var(--secondary-color);
            font-size: 1.1rem;
            background: none;
            border: none;
            cursor: pointer;
        }

        .cart-table td.product-remove .remove-item-btn:hover {
            color: #c82333;
        }

        .cart-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 30px;
            padding: 20px;
            background-color: var(--background-color);
            border-radius: 8px;
            box-shadow: var(--box-shadow);
        }

        .coupon-form {
            display: flex;
            gap: 10px;
        }

        .cart-actions .btn-outline-secondary {
            background-color: var(--primary-color);
            color: var(--border-color);
            padding: 10px 15px;
            font-size: 0.9rem;
            border-radius: 4px;
            transform: translateY(5px);
            margin-bottom: 10px;
            border: none;
            cursor: pointer;
        }

        .cart-actions .btn-outline-secondary:hover {
            opacity: 1;
            transform: translateY(0);
        }

        .btn-outline-secondary:hover {
            background-color: var(--btn-hover-color);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: #fff;
        }

        .coupon-form input[type="text"] {
            padding: 10px 15px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            font-size: 0.9rem;
            min-width: 200px;
        }

        .coupon-form input[type="text"]:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 2px rgba(1, 24, 216, 0.1);
        }

        .cart-totals {
            background-color: var(--background-color);
            padding: 25px;
            border-radius: 8px;
            box-shadow: var(--box-shadow);
        }

        .cart-totals h3 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border-color);
        }

        .cart-totals table {
            width: 100%;
            margin-bottom: 20px;
        }

        .cart-totals th,
        .cart-totals td {
            padding: 10px 0;
            font-size: 0.95rem;
        }

        .cart-totals th {
            text-align: left;
            font-weight: 600;
            color: var(--text-light-color);
        }

        .cart-totals td {
            text-align: right;
            font-weight: 600;
        }

        .cart-totals .order-total th,
        .cart-totals .order-total td {
            font-size: 1.1rem;
            color: var(--primary-color);
            font-weight: 700;
            padding-top: 15px;
            border-top: 1px solid var(--border-color);
        }

        .cart-totals .btn-checkout {
            width: 100%;
            padding: 15px;
            font-size: 1rem;
            transform: translateY(5px);
        }

        .cart-totals .btn-checkout:hover {
            opacity: 1;
            transform: translateY(0);
        }

        .btn-checkout:hover {
            background-color: var(--btn-hover-color);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: #fff;
        }

        .empty-cart-message {
            text-align: center;
            padding: 40px 20px;
            background-color: var(--background-color);
            border-radius: 8px;
            box-shadow: var(--box-shadow);
        }

        .empty-cart-message i {
            font-size: 3rem;
            color: var(--text-light-color);
            margin-bottom: 20px;
        }

        .empty-cart-message h4 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .empty-cart-message p {
            color: var(--text-light-color);
            margin-bottom: 20px;
        }


        /* Responsive Shopping Cart */
        @media (max-width: 767px) {
            .cart-table thead {
                display: none;
                /* Sembunyikan header tabel di mobile */
            }

            .cart-table tr {
                display: block;
                margin-bottom: 20px;
                border: 1px solid var(--border-color);
                border-radius: 6px;
                padding: 10px;
            }

            .cart-table td {
                display: block;
                text-align: right;
                /* Ratakan kanan data sel */
                padding: 8px 5px;
                border-bottom: none;
                /* Hapus border bawah default */
                position: relative;
            }

            .cart-table td::before {
                /* Tambahkan label untuk setiap data sel */
                content: attr(data-label);
                position: absolute;
                left: 5px;
                font-weight: 600;
                color: var(--text-light-color);
                font-size: 0.85rem;
            }

            .cart-table td.product-thumbnail {
                text-align: center;
                padding-bottom: 10px;
            }

            .cart-table td.product-thumbnail::before {
                display: none;
            }

            .cart-table td.product-name {
                text-align: center;
                font-size: 1rem;
            }

            .cart-table td.product-name::before {
                display: none;
            }

            .cart-table td.product-price,
            .cart-table td.product-subtotal,
            .cart-table td.product-quantity {
                text-align: right;
            }

            .cart-table .quantity-input-group-cart {
                margin-left: auto;
                /* Dorong quantity ke kanan */
                margin-right: 0;
            }

            .cart-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .coupon-form {
                width: 100%;
                margin-bottom: 15px;
            }

            .coupon-form input[type="text"] {
                flex-grow: 1;
            }

            .cart-actions .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <header class="site-header">
        <div class="container header-container">
            <div class="header-logo">
                <a href="/">
                    <img src="img/logo2.png" alt="DariMata Studio Logo">
                </a>
            </div>
            <nav class="main-navigation">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="shop2">Shop</a></li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </nav>
            <form class="header-search" action="/search" method="GET">
                <input type="search" name="q" placeholder="Search products..." aria-label="Search">
                <button type="submit" aria-label="Submit search"><i class="fas fa-search"></i></button>
            </form>
            <div class="header-actions">
                <div class="action-item wishlist-icon">
                    <a href="wishlist" style="color: inherit; text-decoration: none;">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>
                <div class="action-item cart-icon active"> <!-- Tambahkan class active di sini -->
                    <a href="cart" style="color: inherit; text-decoration: none;">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="cart-count-badge" id="headerCartCount">0</span>
                    </a>
                </div>
                <div class="action-item profile-icon" id="profileIconContainer">
                    <div class="profile-icon-wrapper">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="profile-dropdown" id="profileDropdownMenu">
                        <ul>
                            <li><a href="user-profile"><i class="fas fa-user-circle"
                                        style="margin-right: 8px;"></i>My Account</a></li>
                            <li><a href="#"><i class="fas fa-history" style="margin-right: 8px;"></i>Order History</a>
                            </li>
                            <li><a href="#"><i class="fas fa-cog" style="margin-right: 8px;"></i>Settings</a></li>
                            <li>
                                <hr>
                            </li>
                            <li><a href="#"><i class="fas fa-sign-out-alt" style="margin-right: 8px;"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Open menu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>
    <div class="mobile-nav" id="mobileNav">
        <button class="mobile-nav-close" id="mobileNavClose" aria-label="Close menu">&times;</button>
        <form class="header-search mobile-search" action="/search" method="GET" style="margin: 20px 0; width: 100%;">
            <input type="search" name="q" placeholder="Search products..." aria-label="Search">
            <button type="submit" aria-label="Submit search"><i class="fas fa-search"></i></button>
        </form>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="shop2">Shop</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="contact">Contact</a></li>
            <li>
                <hr style="margin: 15px 0; border-color: var(--border-color);">
            </li>
            <li><a href="user-profilee">My Account</a></li>
            <li><a href="#">Order History</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
    <div class="mobile-nav-overlay" id="mobileNavOverlay"></div>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-shop"
        style="background-color: var(--light-gray-color); padding: 25px 0; border-bottom: 1px solid var(--border-color);">
        <div class="container">
            <div class="breadcrumb-text" style="text-align: left;">
                <div class="breadcrumb-links" style="font-size: 0.9rem;">
                    <a href="/" style="color: var(--text-light-color);">Home</a>
                    <span style="margin: 0 8px; color: var(--text-light-color);">/</span>
                    <a href="shop2" style="color: var(--text-light-color);">Shop</a>
                    <span style="margin: 0 8px; color: var(--text-light-color);">/</span>
                    <a href="shop2" style="color: var(--text-light-color);">Shopping Cart</a>
                    <span style="margin: 0 8px; color: var(--text-light-color);">/</span>
                    <span style="color: var(--text-color);">Checkout</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Shopping Cart Section -->
    <section class="shopping-cart-section">
        <div class="container">
            <div class="section-title">
                <h2>Your Shopping Cart</h2>
            </div>

            <div id="cartContent">
                <!-- Konten ini akan di-generate oleh JS -->
                <!-- Contoh jika keranjang kosong: -->
                <!-- -->
            </div>

        </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-widget">
                    <h5>About Us</h5>
                    <p>DariMata Studio is dedicated to bringing you unique and stylish fashion pieces that inspire
                        confidence.</p>
                    <div class="social-icons">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Pinterest"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
                <div class="footer-widget">
                    <h5>Shop</h5>
                    <ul>
                        <li><a href="shop2?category=new-arrivals">New Arrivals</a></li>
                        <li><a href="shop2?category=clothing">Clothing</a></li>
                        <li><a href="shop2?category=accessories">Accessories</a></li>
                        <li><a href="shop2?category=sale">Sale</a></li>
                    </ul>
                </div>
                <div class="footer-widget">
                    <h5>Customer Service</h5>
                    <ul>
                        <li><a href="contact">Contact Us</a></li>
                        <li><a href="#">Shipping & Returns</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Size Guide</a></li>
                    </ul>
                </div>
                <div class="footer-widget">
                    <h5>Newsletter</h5>
                    <p>Subscribe to our newsletter for the latest updates and promotions.</p>
                    <form action="#" method="post" style="display: flex; margin-top: 10px;">
                        <input type="email" name="email" placeholder="Your Email" required
                            style="flex-grow: 1; padding: 8px; border: 1px solid rgba(255,255,255,0.2); border-radius: 3px 0 0 3px; background: rgba(255,255,255,0.1); color: #fff;">
                        <button type="submit" class="btn"
                            style="border-radius: 0 3px 3px 0; padding: 8px 12px; background: #fff; color: var(--primary-color); text-transform: capitalize; font-weight: 600;">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <span id="currentYearFooter"></span> DariMata Studio. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // JavaScript untuk Header (Disalin dari halaman lain)
            const profileIconContainer = document.getElementById('profileIconContainer');
            const profileDropdownMenu = document.getElementById('profileDropdownMenu');
            if (profileIconContainer && profileDropdownMenu) {
                profileIconContainer.addEventListener('click', function (event) { event.stopPropagation(); profileDropdownMenu.classList.toggle('active'); });
                document.addEventListener('click', function (event) { if (profileIconContainer && !profileIconContainer.contains(event.target) && profileDropdownMenu && !profileDropdownMenu.contains(event.target)) { profileDropdownMenu.classList.remove('active'); } });
            }
            const mobileMenuToggle = document.getElementById('mobileMenuToggle');
            const mobileNav = document.getElementById('mobileNav');
            const mobileNavClose = document.getElementById('mobileNavClose');
            const mobileNavOverlay = document.getElementById('mobileNavOverlay');
            if (mobileMenuToggle && mobileNav && mobileNavClose && mobileNavOverlay) {
                mobileMenuToggle.addEventListener('click', function () { mobileNav.classList.add('active'); mobileNavOverlay.classList.add('active'); document.body.style.overflow = 'hidden'; });
                function closeMobileMenu() { mobileNav.classList.remove('active'); mobileNavOverlay.classList.remove('active'); document.body.style.overflow = ''; }
                mobileNavClose.addEventListener('click', closeMobileMenu);
                mobileNavOverlay.addEventListener('click', closeMobileMenu);
            }
            const currentYearSpan = document.getElementById('currentYear');
            if (currentYearSpan) { currentYearSpan.textContent = new Date().getFullYear(); }
            const searchForms = document.querySelectorAll('.header-search');
            searchForms.forEach(form => {
                form.addEventListener('submit', function (event) {
                    event.preventDefault();
                    const query = form.querySelector('input[type="search"]').value;
                    if (query.trim() !== '') { window.location.href = 'shop2?search=' + encodeURIComponent(query); }
                });
            });

            // Shopping Cart Page Specific JavaScript
            const cartContentEl = document.getElementById('cartContent');
            const headerCartCountEl = document.getElementById('headerCartCount');
            let shoppingCart = [];

            // Fungsi untuk format mata uang
            function formatCurrency(amount) {
                return 'Rp' + parseInt(amount).toLocaleString('id-ID');
            }

            // Fungsi untuk memuat dan menampilkan keranjang
            function renderCart() {
                try {
                    const storedCart = localStorage.getItem('shoppingCart');
                    if (storedCart) {
                        shoppingCart = JSON.parse(storedCart);
                    } else {
                        // Jika localStorage kosong, gunakan data contoh
                        shoppingCart = [
                            { id: 'workaholic-tee', name: 'Boxy Fit Tee [WORKAHOLIC]', price: 199000, quantity: 2, image: 'img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - BLACK - FRONT.png', color: 'Black', size: 'M' },
                            { id: 'mata-hoodie', name: 'Hoodie [MATA]', price: 399000, quantity: 1, image: 'img/product/FIX/hoodie/MATA/MATA - BLACK - FRONT.png', color: 'Black', size: 'L' },
                            { id: 'creativesolution-crewneck', name: 'Crewneck [CREATIVESOLUTIONS]', price: 249000, quantity: 1, image: 'img/product/FIX/crewneck/CREATIVE SOLUTIONS/CREATIVESOLUTIONS - GREEN - FRONT.png', color: 'Dark Green', size: 'L' }
                        ];
                        // Simpan data contoh ke localStorage agar konsisten jika user merefresh
                        localStorage.setItem('shoppingCart', JSON.stringify(shoppingCart));
                    }
                } catch (e) {
                    console.error("Error parsing shoppingCart from localStorage:", e);
                    shoppingCart = []; // Fallback ke array kosong jika ada error parsing
                    // Jika parsing gagal, dan kita ingin tetap ada contoh:
                    // shoppingCart = [
                    //     { id: 'workaholic-tee', name: 'Boxy Fit Tee [WORKAHOLIC]', price: 199000, quantity: 2, image: 'img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - BLACK - FRONT.png', color: 'Black', size: 'M' },
                    //     { id: 'mata-hoodie', name: 'Hoodie [MATA]', price: 399000, quantity: 1, image: 'img/product/FIX/hoodie/MATA/MATA - BLACK - FRONT.png', color: 'Black', size: 'L' },
                    //     { id: 'minimalism-crewneck', name: 'Unfinished Crewneck [MINIMALISM]', price: 249000, quantity: 1, image: 'img/product/FIX/crewneck/minimalism/no bg/UNFINISHED CREWNECK BACK.png', color: 'Natural', size: 'XL' }
                    // ];
                }


                if (!cartContentEl) return;

                if (shoppingCart.length === 0) {
                    cartContentEl.innerHTML = `
                        <div class="empty-cart-message">
                            <i class="fas fa-shopping-cart"></i>
                            <h4>Your cart is currently empty.</h4>
                            <p>Looks like you haven't added anything to your cart yet.</p>
                            <a href="shop2" class="btn btn-primary">Continue Shopping</a>
                        </div>
                    `;
                    updateHeaderCartCount();
                    return;
                }

                let cartHTML = `
                    <div class="cart-table-container">
                        <table class="cart-table">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Subtotal</th>
                                    <th class="product-remove">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                `;

                let subtotal = 0;
                shoppingCart.forEach((item, index) => {
                    // Pastikan item.price dan item.quantity adalah angka
                    const itemPrice = Number(item.price) || 0;
                    const itemQuantity = Number(item.quantity) || 0;
                    const itemSubtotal = itemPrice * itemQuantity;
                    subtotal += itemSubtotal;

                    cartHTML += `
                        <tr data-index="${index}" data-id="${item.id}">
                            <td class="product-thumbnail" data-label="Image"><img src="${item.image || 'img/placeholder.png'}" alt="${item.name}"></td>
                            <td class="product-name" data-label="Product">
                                <a href="product-details?product=${item.id}">${item.name}</a>
                                ${item.color || item.size ? `<span class="product-meta-cart">
                                    ${item.color ? `Color: ${item.color}` : ''} ${item.color && item.size ? ' / ' : ''} ${item.size ? `Size: ${item.size}` : ''}
                                </span>` : ''}
                            </td>
                            <td class="product-price" data-label="Price">${formatCurrency(itemPrice)}</td>
                            <td class="product-quantity" data-label="Quantity">
                                <div class="quantity-input-group-cart">
                                    <button type="button" class="quantity-minus-cart" aria-label="Decrease quantity">-</button>
                                    <input type="number" value="${itemQuantity}" min="1" aria-label="Product quantity" class="item-quantity-input">
                                    <button type="button" class="quantity-plus-cart" aria-label="Increase quantity">+</button>
                                </div>
                            </td>
                            <td class="product-subtotal" data-label="Subtotal">${formatCurrency(itemSubtotal)}</td>
                            <td class="product-remove" data-label="Remove">
                                <button class="remove-item-btn" aria-label="Remove item"><i class="fas fa-times"></i></button>
                            </td>
                        </tr>
                    `;
                });

                cartHTML += `
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-actions">
                        <form class="coupon-form" id="couponForm">
                            <input type="text" id="couponCodeInput" placeholder="Coupon code">
                            <button type="submit" class="btn btn-outline-secondary">Apply Coupon</button>
                        </form>
                        <button type="button" class="btn btn-outline-secondary update-cart-btn">Update Cart</button>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-md-6 col-lg-5">
                            <div class="cart-totals">
                                <h3>Cart Totals</h3>
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Subtotal</th>
                                            <td id="cartSubtotal">${formatCurrency(subtotal)}</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td>
                                                <small>Calculated at checkout</small>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td id="cartTotal">${formatCurrency(subtotal)}</td> <!-- Asumsi belum ada ongkir -->
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="checkout" class="btn btn-primary btn-checkout">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                `;
                cartContentEl.innerHTML = cartHTML;
                attachCartEventListeners();
                updateHeaderCartCount();
            }

            // Fungsi untuk update jumlah item di header
            function updateHeaderCartCount() {
                let totalItems = 0;
                shoppingCart.forEach(item => {
                    const itemQuantity = Number(item.quantity) || 0;
                    totalItems += itemQuantity;
                });
                if (headerCartCountEl) headerCartCountEl.textContent = totalItems;
            }

            // Fungsi untuk menyimpan keranjang ke localStorage
            function saveCart() {
                localStorage.setItem('shoppingCart', JSON.stringify(shoppingCart));
                renderCart(); // Re-render untuk update tampilan dan total
            }

            // Event listener untuk tombol di keranjang
            function attachCartEventListeners() {
                document.querySelectorAll('.quantity-minus-cart').forEach(button => {
                    button.addEventListener('click', function () {
                        const row = this.closest('tr');
                        const index = parseInt(row.dataset.index);
                        if (shoppingCart[index] && shoppingCart[index].quantity > 1) {
                            shoppingCart[index].quantity--;
                            saveCart();
                        }
                    });
                });

                document.querySelectorAll('.quantity-plus-cart').forEach(button => {
                    button.addEventListener('click', function () {
                        const row = this.closest('tr');
                        const index = parseInt(row.dataset.index);
                        if (shoppingCart[index]) {
                            shoppingCart[index].quantity++;
                            saveCart();
                        }
                    });
                });

                document.querySelectorAll('.item-quantity-input').forEach(input => {
                    input.addEventListener('change', function () {
                        const row = this.closest('tr');
                        const index = parseInt(row.dataset.index);
                        let newQuantity = parseInt(this.value);
                        if (isNaN(newQuantity) || newQuantity < 1) {
                            newQuantity = 1;
                        }
                        if (shoppingCart[index]) {
                            shoppingCart[index].quantity = newQuantity;
                            saveCart();
                        }
                    });
                });

                document.querySelectorAll('.remove-item-btn').forEach(button => {
                    button.addEventListener('click', function () {
                        if (confirm('Are you sure you want to remove this item?')) {
                            const row = this.closest('tr');
                            const index = parseInt(row.dataset.index);
                            shoppingCart.splice(index, 1);
                            saveCart();
                        }
                    });
                });

                const updateCartBtn = document.querySelector('.update-cart-btn');
                if (updateCartBtn) {
                    updateCartBtn.addEventListener('click', function () {
                        // Fungsi saveCart() sudah mengupdate, tombol ini bisa untuk feedback
                        // atau jika ada perubahan kuantitas yang belum tersimpan (misalnya jika input tidak langsung trigger save)
                        saveCart(); // Pastikan semua perubahan tersimpan
                        alert('Cart updated!');
                    });
                }

                const couponForm = document.getElementById('couponForm');
                if (couponForm) {
                    couponForm.addEventListener('submit', function (event) {
                        event.preventDefault();
                        const couponCode = document.getElementById('couponCodeInput').value;
                        if (couponCode.trim() !== '') {
                            alert(`Coupon "${couponCode}" applied! (This is a demo)`);
                            // Implementasi logika kupon Anda di sini
                        } else {
                            alert('Please enter a coupon code.');
                        }
                    });
                }
            }

            // Muat keranjang saat halaman dimuat
            renderCart();
        });
    </script>
</body>

</html>

</body>