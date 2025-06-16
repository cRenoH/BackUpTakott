<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DariMata Studio - Checkout Pesanan Anda">
    <meta name="keywords" content="DariMata, Fashion, E-commerce, Checkout, Pembayaran">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout - DariMata Studio</title>

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
        :root {
            --checkout-spacing: 30px;
            --checkout-card-radius: 12px;
            --checkout-card-padding: 25px;
            --checkout-section-padding: 60px 0;
        }

        /* Checkout Page Styles */
        .checkout-section {
            padding: var(--checkout-section-padding);
            background-color: #f9fafb;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--text-color);
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 4px;
        }

        .section-title p {
            color: var(--text-light-color);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .checkout-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: var(--checkout-spacing);
        }

        .checkout-form-container,
        .order-summary-container {
            background-color: white;
            padding: var(--checkout-card-padding);
            border-radius: var(--checkout-card-radius);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .checkout-form-container:hover,
        .order-summary-container:hover {
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            transform: translateY(-2px);
        }

        .checkout-form-container h3,
        .order-summary-container h3 {
            font-size: 1.4rem;
            font-weight: 800;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--border-color);
            position: relative;
        }

        .checkout-form-container h3::after,
        .order-summary-container h3::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }

        .form-section {
            margin-bottom: 30px;
        }

        .form-section h4 {
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--text-color);
            display: flex;
            align-items: center;
        }

        .form-section h4 i {
            margin-right: 10px;
            color: var(--primary-color);
        }

        /* Customer Info Section */
        .customer-info-summary {
            display: flex;
            flex-direction: column;
            gap: 15px;
            padding: 20px;
            background-color: rgba(1, 24, 216, 0.03);
            border-radius: 8px;
            border: 1px solid rgba(1, 24, 216, 0.1);
            margin-bottom: 20px;
        }

        .customer-info-row {
            display: flex;
            align-items: flex-start;
        }

        .customer-info-label {
            font-weight: 600;
            min-width: 120px;
            color: var(--text-light-color);
        }

        .customer-info-value {
            flex: 1;
        }

        /* Address Card */
        .address-card-checkout {
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
            transition: var(--transition);
            position: relative;
            background-color: white;
        }

        .address-card-checkout:hover {
            border-color: var(--primary-color);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .address-card-checkout h5 {
            font-size: 1.05rem;
            font-weight: 700;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .address-card-checkout h5 .badge {
            font-size: 0.75rem;
            padding: 4px 8px;
            background: var(--primary-color);
            color: white;
            border-radius: 4px;
        }

        .address-card-checkout p {
            font-size: 0.9rem;
            color: var(--text-color);
            margin-bottom: 5px;
            line-height: 1.5;
        }

        .address-card-checkout p strong {
            color: var(--text-color);
        }

        /* Payment Methods */
        .payment-methods {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .payment-method-option {
            padding: 15px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            background-color: white;
        }

        .payment-method-option.selected,
        .payment-method-option:hover {
            border-color: var(--primary-color);
            background-color: rgba(1, 24, 216, 0.03);
        }

        .payment-method-option input[type="radio"] {
            margin-right: 12px;
            width: 1.1em;
            height: 1.1em;
            accent-color: var(--primary-color);
        }

        .payment-method-option img {
            height: 24px;
            margin-right: 12px;
            object-fit: contain;
        }

        .payment-method-option label {
            font-weight: 600;
            font-size: 0.95rem;
            margin-bottom: 0;
            cursor: pointer;
            flex-grow: 1;
        }

        /* Order Summary Items */
        .order-summary-items {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 20px;
        }

        .order-item {
            display: flex;
            align-items: center;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--border-color);
        }

        .order-item:last-child {
            padding-bottom: 0;
            border-bottom: none;
        }

        .order-item-image img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 6px;
            margin-right: 15px;
            border: 1px solid var(--border-color);
        }

        .order-item-details {
            flex-grow: 1;
        }

        .order-item-name {
            font-weight: 600;
            font-size: 0.95rem;
            margin-bottom: 5px;
        }

        .order-item-meta {
            font-size: 0.85rem;
            color: var(--text-light-color);
            margin-bottom: 5px;
        }

        .order-item-qty {
            font-size: 0.85rem;
            color: var(--text-light-color);
        }

        .order-item-price {
            font-weight: 700;
            font-size: 0.95rem;
            margin-left: auto;
            color: var(--text-color);
        }

        /* Coupon Code Section */
        .coupon-section {
            margin: 25px 0;
        }

        .coupon-form {
            display: flex;
            gap: 10px;
        }

        .coupon-form .form-control {
            flex: 1;
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid var(--border-color);
        }

        .coupon-form .btn {
            padding: 12px 20px;
            border-radius: 8px;
        }

        .coupon-message {
            margin-top: 10px;
            font-size: 0.9rem;
            padding: 8px 12px;
            border-radius: 6px;
            display: none;
        }

        .coupon-message.success {
            background-color: rgba(40, 167, 69, 0.1);
            color: #28a745;
            display: block;
        }

        .coupon-message.error {
            background-color: rgba(220, 53, 69, 0.1);
            color: #dc3545;
            display: block;
        }

        /* Order Summary Totals */
        .order-summary-totals {
            margin-top: 20px;
        }

        .order-summary-totals table {
            width: 100%;
            font-size: 0.95rem;
        }

        .order-summary-totals th,
        .order-summary-totals td {
            padding: 10px 0;
            vertical-align: middle;
        }

        .order-summary-totals th {
            text-align: left;
            font-weight: 500;
            color: var(--text-light-color);
        }

        .order-summary-totals td {
            text-align: right;
            font-weight: 600;
            color: var(--text-color);
        }

        .order-summary-totals .grand-total th,
        .order-summary-totals .grand-total td {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--primary-color);
            padding-top: 15px;
            border-top: 1px solid var(--border-color);
        }

        /* Place Order Button */
        .btn-place-order {
            width: 100%;
            padding: 16px;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 8px;
            margin-top: 20px;
            background: var(--primary-color);
            border: none;
            box-shadow: 0 4px 15px rgba(1, 24, 216, 0.2);
            transition: all 0.3s ease;
        }

        .btn-place-order:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(1, 24, 216, 0.3);
        }

        /* Responsive Checkout */
        @media (max-width: 1199px) {
            :root {
                --checkout-spacing: 25px;
                --checkout-card-padding: 20px;
            }
        }

        @media (max-width: 991px) {
            .checkout-grid {
                grid-template-columns: 1fr;
            }

            .order-summary-container {
                margin-top: var(--checkout-spacing);
            }

            :root {
                --checkout-section-padding: 40px 0;
            }
        }

        @media (max-width: 767px) {
            :root {
                --checkout-card-padding: 18px;
                --checkout-spacing: 20px;
            }

            .section-title h2 {
                font-size: 1.8rem;
            }

            .customer-info-row {
                flex-direction: column;
                gap: 5px;
            }

            .customer-info-label {
                min-width: auto;
            }

            .coupon-form {
                flex-direction: column;
            }
        }

        @media (max-width: 575px) {
            :root {
                --checkout-card-padding: 15px;
            }

            .section-title h2 {
                font-size: 1.6rem;
            }

            .order-item {
                flex-wrap: wrap;
            }

            .order-item-price {
                margin-left: 85px;
                margin-top: 5px;
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
                <div class="action-item cart-icon active">
                    <a href="cart" style="color: inherit; text-decoration: none;">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="cart-count-badge" id="headerCartCountCheckout">0</span>
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
            <li><a href="user-profile">My Account</a></li>
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
                    <a href="cart" style="color: var(--text-light-color);">Shopping Cart</a>
                    <span style="margin: 0 8px; color: var(--text-light-color);">/</span>
                    <span style="color: var(--text-color); font-weight: 500;">Checkout</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Checkout Section -->
    <section class="checkout-section">
        <div class="container">
            <div class="section-title">
                <h2>Checkout</h2>
            </div>

            <form id="checkoutForm">
                <div class="checkout-grid">
                    <div class="checkout-form-container">
                        <!-- Customer Information -->
                        <div class="form-section">
                            <h4><i class="fas fa-user-circle"></i> Customer Information</h4>
                            <div class="customer-info-summary">
                                <div class="customer-info-row">
                                    <span class="customer-info-label">Name:</span>
                                    <span class="customer-info-value" id="customerName">Joe Angkasa</span>
                                </div>
                                <div class="customer-info-row">
                                    <span class="customer-info-label">Email:</span>
                                    <span class="customer-info-value" id="customerEmail">joe.angkasa@example.com</span>
                                </div>
                                <div class="customer-info-row">
                                    <span class="customer-info-label">Phone:</span>
                                    <span class="customer-info-value" id="customerPhone">+62 812-3456-7890</span>
                                </div>
                            </div>
                        </div>

                        <!-- Shipping Address -->
                        <div class="form-section">
                            <h4><i class="fas fa-map-marker-alt"></i> Shipping Address</h4>
                            <div id="shippingAddressDisplaySection">
                                <div id="defaultAddressInfo" class="address-card-checkout">
                                    <h5>Home <span class="badge">Default</span></h5>
                                    <p><strong>Joe Angkasa</strong></p>
                                    <p>Jl. Raya Bogor No. 123, RT 05/RW 02</p>
                                    <p>Kecamatan Bogor Utara, Kota Bogor</p>
                                    <p>Jawa Barat, 16115</p>
                                    <p>Indonesia</p>
                                    <p>Phone: +62 812-3456-7890</p>
                                </div>
                                <button type="button" class="btn btn-outline-primary btn-sm" id="changeAddressBtn"
                                    style="margin-top: 15px;">
                                    <i class="fas fa-edit"></i> Change Address
                                </button>
                            </div>
                        </div>

                        <!-- Payment Method -->
                        <div class="form-section">
                            <h4><i class="fas fa-credit-card"></i> Payment Method</h4>
                            <div class="payment-methods">
                                <div class="payment-method-option selected">
                                    <input type="radio" id="paymentBCA" name="paymentMethod" value="bca" checked>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Bank_Central_Asia.svg"
                                        alt="BCA">
                                    <label for="paymentBCA">BCA Virtual Account</label>
                                </div>
                                <div class="payment-method-option">
                                    <input type="radio" id="paymentGoPay" name="paymentMethod" value="gopay">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Logo_Gojek.png"
                                        alt="GoPay">
                                    <label for="paymentGoPay">GoPay</label>
                                </div>
                                <div class="payment-method-option">
                                    <input type="radio" id="paymentDANA" name="paymentMethod" value="dana">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/72/Logo_dana_blue.svg"
                                        alt="DANA">
                                    <label for="paymentDANA">DANA</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="order-summary-container">
                        <h3>Order Summary</h3>
                        <div class="order-summary-items" id="checkoutOrderItems">
                            <!-- Items will be populated by JavaScript -->
                        </div>

                        <!-- Coupon Code Section -->
                        <div class="coupon-section">
                            <div class="coupon-form">
                                <input type="text" class="form-control" id="couponCode" placeholder="Coupon code">
                                <button type="button" class="btn btn-outline-secondary"
                                    id="applyCouponBtn">Apply</button>
                            </div>
                            <div class="coupon-message" id="couponMessage"></div>
                        </div>

                        <div class="order-summary-totals">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Subtotal</th>
                                        <td id="checkoutSubtotal">Rp0</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td id="checkoutShipping">Rp18,000</td>
                                    </tr>
                                    <tr id="discountRow" style="display: none;">
                                        <th>Discount</th>
                                        <td id="checkoutDiscount">-Rp0</td>
                                    </tr>
                                    <tr class="grand-total">
                                        <th>Total</th>
                                        <td id="checkoutGrandTotal">Rp0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" class="btn btn-primary btn-place-order">
                            <i class="fas fa-lock" style="margin-right: 8px;"></i> Bayar Sekarang
                        </button>
                    </div>
                </div>
            </form>
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
            // Header JavaScript
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
            const currentYearSpan = document.getElementById('currentYearFooter');
            if (currentYearSpan) { currentYearSpan.textContent = new Date().getFullYear(); }
            const searchForms = document.querySelectorAll('.header-search');
            searchForms.forEach(form => {
                form.addEventListener('submit', function (event) {
                    event.preventDefault();
                    const query = form.querySelector('input[type="search"]').value;
                    if (query.trim() !== '') { window.location.href = 'shop2?search=' + encodeURIComponent(query); }
                });
            });

            // Checkout Page Specific JavaScript
            const checkoutOrderItemsEl = document.getElementById('checkoutOrderItems');
            const checkoutSubtotalEl = document.getElementById('checkoutSubtotal');
            const checkoutShippingEl = document.getElementById('checkoutShipping');
            const checkoutDiscountEl = document.getElementById('checkoutDiscount');
            const checkoutGrandTotalEl = document.getElementById('checkoutGrandTotal');
            const headerCartCountCheckoutEl = document.getElementById('headerCartCountCheckout');
            const customerNameEl = document.getElementById('customerName');
            const customerEmailEl = document.getElementById('customerEmail');
            const customerPhoneEl = document.getElementById('customerPhone');
            const defaultAddressInfoEl = document.getElementById('defaultAddressInfo');
            const changeAddressBtn = document.getElementById('changeAddressBtn');
            const couponCodeInput = document.getElementById('couponCode');
            const applyCouponBtn = document.getElementById('applyCouponBtn');
            const couponMessageEl = document.getElementById('couponMessage');
            const discountRowEl = document.getElementById('discountRow');

            let shoppingCartData = [];
            let appliedCoupon = null;

            function formatCurrency(amount) {
                return 'Rp' + parseInt(amount).toLocaleString('id-ID');
            }

            function loadAndDisplayUserDefaultData() {
                // Simulate loading user data from localStorage or profile
                const userData = {
                    firstName: "Ahmad",
                    lastName: "Rizky",
                    email: "ahmad.rizky@example.com",
                    phone: "+62 812-3456-7890",
                    defaultAddress: {
                        addressName: "Home",
                        fullName: "Ahmad Rizky",
                        addressLine1: "Jl. Raya Bogor No. 123, RT 05/RW 02",
                        addressLine2: "",
                        city: "Kota Bogor",
                        district: "Kecamatan Bogor Utara",
                        province: "Jawa Barat",
                        postalCode: "16115",
                        country: "Indonesia",
                        phone: "+62 812-3456-7890"
                    }
                };

                // Display customer info
                if (customerNameEl) customerNameEl.textContent = userData.firstName + ' ' + userData.lastName;
                if (customerEmailEl) customerEmailEl.textContent = userData.email;
                if (customerPhoneEl) customerPhoneEl.textContent = userData.phone;

                // Display default address
                if (defaultAddressInfoEl && userData.defaultAddress) {
                    const addr = userData.defaultAddress;
                    defaultAddressInfoEl.innerHTML = `
                        <h5>${addr.addressName} <span class="badge">Default</span></h5>
                        <p><strong>${addr.fullName}</strong></p>
                        <p>${addr.addressLine1}${addr.addressLine2 ? `<br>${addr.addressLine2}` : ''}</p>
                        <p>${addr.district}, ${addr.city}</p>
                        <p>${addr.province}, ${addr.postalCode}</p>
                        <p>${addr.country}</p>
                        <p>Phone: ${addr.phone}</p>
                    `;
                }
            }

            function loadCartDataForCheckout() {
                try {
                    const storedCart = localStorage.getItem('shoppingCart');
                    if (storedCart) {
                        shoppingCartData = JSON.parse(storedCart);
                    } else {
                        // Fallback demo data if localStorage is empty
                        shoppingCartData = [
                            { id: 'workaholic-tee', name: 'Boxy Fit Tee [WORKAHOLIC]', price: 199000, quantity: 2, image: 'img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - BLACK - FRONT.png', color: 'Black', size: 'M' },
                            { id: 'mata-hoodie', name: 'Hoodie [MATA]', price: 399000, quantity: 1, image: 'img/product/FIX/hoodie/MATA/MATA - BLACK - FRONT.png', color: 'Black', size: 'L' },
                            { id: 'creativesolution-crewneck', name: 'Crewneck [CREATIVESOLUTIONS]', price: 249000, quantity: 1, image: 'img/product/FIX/crewneck/CREATIVE SOLUTIONS/CREATIVESOLUTIONS - GREEN - FRONT.png', color: 'Dark Green', size: 'L' }
                        ];
                    }
                } catch (e) {
                    console.error("Error parsing shoppingCart for checkout:", e);
                    shoppingCartData = [];
                }

                if (!checkoutOrderItemsEl) return;
                checkoutOrderItemsEl.innerHTML = ''; // Clear previous items

                if (shoppingCartData.length === 0) {
                    checkoutOrderItemsEl.innerHTML = '<p class="text-center text-muted my-3">Your cart is empty. Please add items to proceed.</p>';
                }

                let subtotal = 0;
                shoppingCartData.forEach(item => {
                    const itemPrice = Number(item.price) || 0;
                    const itemQuantity = Number(item.quantity) || 0;
                    subtotal += itemPrice * itemQuantity;

                    const itemHTML = `
                        <div class="order-item">
                            <div class="order-item-image">
                                <img src="${item.image || 'img/placeholder.png'}" alt="${item.name}">
                            </div>
                            <div class="order-item-details">
                                <div class="order-item-name">${item.name}</div>
                                <div class="order-item-meta">
                                    ${item.color ? `Color: ${item.color}` : ''} ${item.color && item.size ? ' / ' : ''} ${item.size ? `Size: ${item.size}` : ''}
                                </div>
                                <div class="order-item-qty">Qty: ${itemQuantity}</div>
                            </div>
                            <div class="order-item-price">${formatCurrency(itemPrice * itemQuantity)}</div>
                        </div>
                    `;
                    checkoutOrderItemsEl.innerHTML += itemHTML;
                });

                updateCheckoutTotals(subtotal);
                updateHeaderCartCountCheckout();
            }

            function updateCheckoutTotals(subtotal) {
                const shippingCost = 18000; // Flat shipping rate
                let discount = 0;

                // Calculate discount if coupon is applied
                if (appliedCoupon) {
                    if (appliedCoupon.type === 'percentage') {
                        discount = subtotal * (appliedCoupon.value / 100);
                    } else if (appliedCoupon.type === 'fixed') {
                        discount = appliedCoupon.value;
                    }
                    // Ensure discount doesn't exceed subtotal
                    discount = Math.min(discount, subtotal);
                }

                const grandTotal = subtotal + shippingCost - discount;

                if (checkoutSubtotalEl) checkoutSubtotalEl.textContent = formatCurrency(subtotal);
                if (checkoutShippingEl) checkoutShippingEl.textContent = formatCurrency(shippingCost);
                if (checkoutDiscountEl) checkoutDiscountEl.textContent = '-' + formatCurrency(discount);
                if (checkoutGrandTotalEl) checkoutGrandTotalEl.textContent = formatCurrency(grandTotal);

                // Show/hide discount row
                if (discountRowEl) {
                    discountRowEl.style.display = discount > 0 ? 'table-row' : 'none';
                }
            }

            function updateHeaderCartCountCheckout() {
                if (headerCartCountCheckoutEl) {
                    const totalItems = shoppingCartData.reduce((total, item) => total + (item.quantity || 0), 0);
                    headerCartCountCheckoutEl.textContent = totalItems;
                    headerCartCountCheckoutEl.style.display = totalItems > 0 ? 'flex' : 'none';
                }
            }

            // Event Listeners
            if (changeAddressBtn) {
                changeAddressBtn.addEventListener('click', function () {
                    // In a real implementation, this would open a modal or redirect to address selection
                    alert('Address selection would open here. This is a demo.');
                });
            }

            if (applyCouponBtn && couponCodeInput) {
                applyCouponBtn.addEventListener('click', function () {
                    const couponCode = couponCodeInput.value.trim();

                    // Reset coupon message
                    couponMessageEl.className = 'coupon-message';
                    couponMessageEl.style.display = 'none';

                    if (!couponCode) {
                        couponMessageEl.textContent = 'Please enter a coupon code';
                        couponMessageEl.classList.add('error');
                        couponMessageEl.style.display = 'block';
                        return;
                    }

                    // Simulate coupon validation
                    const validCoupons = {
                        'WELCOME10': { type: 'percentage', value: 10, message: '10% discount applied!' },
                        'FREESHIP': { type: 'fixed', value: 18000, message: 'Free shipping applied!' },
                        'NEW25': { type: 'percentage', value: 25, message: '25% discount applied!' }
                    };

                    if (validCoupons[couponCode]) {
                        appliedCoupon = validCoupons[couponCode];
                        couponMessageEl.textContent = appliedCoupon.message;
                        couponMessageEl.classList.add('success');
                        couponMessageEl.style.display = 'block';

                        // Recalculate totals with the new coupon
                        const subtotal = shoppingCartData.reduce((total, item) => {
                            return total + (Number(item.price) || 0) * (Number(item.quantity) || 0);
                        }, 0);
                        updateCheckoutTotals(subtotal);
                    } else {
                        couponMessageEl.textContent = 'Invalid coupon code';
                        couponMessageEl.classList.add('error');
                        couponMessageEl.style.display = 'block';
                        appliedCoupon = null;

                        // Recalculate totals without coupon
                        const subtotal = shoppingCartData.reduce((total, item) => {
                            return total + (Number(item.price) || 0) * (Number(item.quantity) || 0);
                        }, 0);
                        updateCheckoutTotals(subtotal);
                    }
                });
            }

            // Payment method selection
            const paymentMethodOptions = document.querySelectorAll('.payment-method-option');
            paymentMethodOptions.forEach(option => {
                option.addEventListener('click', function () {
                    paymentMethodOptions.forEach(opt => opt.classList.remove('selected'));
                    this.classList.add('selected');
                    const radioInput = this.querySelector('input[type="radio"]');
                    if (radioInput) radioInput.checked = true;
                });
            });

            // Form submission
            const checkoutForm = document.getElementById('checkoutForm');
            if (checkoutForm) {
                checkoutForm.addEventListener('submit', function (e) {
                    e.preventDefault();

                    if (shoppingCartData.length === 0) {
                        alert('Your cart is empty. Please add items before checkout.');
                        return;
                    }

                    // In a real implementation, this would process the payment
                    // For demo purposes, we'll simulate a successful order
                    const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;

                    // Create order summary
                    const subtotal = shoppingCartData.reduce((total, item) => total + (Number(item.price) || 0) * (Number(item.quantity) || 0), 0);
                    let discount = 0;
                    if (appliedCoupon) {
                        if (appliedCoupon.type === 'percentage') {
                            discount = subtotal * (appliedCoupon.value / 100);
                        } else if (appliedCoupon.type === 'fixed') {
                            discount = appliedCoupon.value;
                        }
                        discount = Math.min(discount, subtotal);
                    }

                    const orderSummary = {
                        items: shoppingCartData,
                        subtotal: subtotal,
                        shipping: 18000,
                        discount: discount,
                        paymentMethod: paymentMethod,
                        date: new Date().toISOString(),
                        orderId: 'DM-' + Math.floor(Math.random() * 1000000).toString().padStart(6, '0')
                    };

                    // In a real app, you would send this to your backend
                    console.log('Order submitted:', orderSummary);

                    // Clear cart
                    localStorage.removeItem('shoppingCart');
                    shoppingCartData = [];

                    // Redirect to order confirmation page
                    // In a real implementation, you would pass the order ID
                    window.location.href = 'payment?order=' + orderSummary.orderId;
                });
            }

            // Initialize the page
            loadAndDisplayUserDefaultData();
            loadCartDataForCheckout();
        });
    </script>
</body>

</html>