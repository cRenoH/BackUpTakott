<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DariMata Studio - Contact Us">
    <meta name="keywords" content="DariMata, Fashion, E-commerce, Contact, Customer Service">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us - DariMata Studio</title>

    <!-- Google Font: Nunito Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome and Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Tambahkan ini di bagian head -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- AOS Library for Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Reset and Base Styles (Consistent with about.html) */
        :root {
            --primary-color: #0118D8;
            --secondary-color: #e53637;
            --text-color: #111111;
            --text-light-color: #555555;
            --background-color: #ffffff;
            --light-gray-color: #f8f9fa;
            --border-color: #eeeeee;
            --header-height: 80px;
            --border-radius: 8px;
            --box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
            --transition: all 0.3s ease;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Nunito Sans', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--background-color);
            padding-top: var(--header-height);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px;
            padding-right: 15px;
        }

        a {
            text-decoration: none;
            color: var(--primary-color);
            transition: color 0.3s ease;
        }

        a:hover {
            color: var(--secondary-color);
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        ul {
            list-style: none;
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            font-size: 15px;
            font-weight: 600;
            text-align: center;
            text-transform: uppercase;
            border-radius: 6px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 1px solid transparent;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: #ffffff;
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: #0012b3;
            border-color: #0012b3;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(1, 24, 216, 0.2);
        }

        .btn-outline-primary {
            background-color: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: #ffffff;
        }

        /* Header Styles (Same as about.html) */
        .site-header {
            background-color: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border-bottom: 1px solid var(--border-color);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            height: var(--header-height);
            display: flex;
            align-items: center;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .header-logo a {
            display: inline-block;
        }

        .header-logo img {
            max-height: 40px;
        }

        .main-navigation {
            margin-left: auto;
            margin-right: 30px;
        }

        .main-navigation ul {
            display: flex;
            align-items: center;
        }

        .main-navigation ul li {
            margin-left: 30px;
        }

        .main-navigation ul li:first-child {
            margin-left: 0;
        }

        .main-navigation ul li a {
            color: var(--text-color);
            font-weight: 600;
            font-size: 15px;
            padding: 10px 0;
            position: relative;
        }

        .main-navigation ul li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }

        .main-navigation ul li a:hover::after,
        .main-navigation ul li.active a::after {
            width: 100%;
        }

        .header-search {
            display: flex;
            align-items: center;
            background-color: var(--light-gray-color);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            padding: 0px 5px 0px 15px;
            height: 40px;
            width: 250px;
            transition: width 0.3s ease, box-shadow 0.3s ease;
        }

        .header-search:focus-within {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 2px rgba(1, 24, 216, 0.1);
            width: 300px;
        }

        .header-search input[type="search"] {
            border: none;
            background: transparent;
            outline: none;
            flex-grow: 1;
            font-size: 14px;
            color: var(--text-color);
            height: 100%;
        }

        .header-search input[type="search"]::placeholder {
            color: var(--text-light-color);
        }

        .header-search button {
            background: transparent;
            border: none;
            color: var(--text-light-color);
            font-size: 1rem;
            cursor: pointer;
            padding: 0 10px;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .header-search button:hover {
            color: var(--primary-color);
        }

        .header-actions {
            display: flex;
            align-items: center;
            margin-left: 20px;
        }

        .header-actions .action-item {
            margin-left: 20px;
            position: relative;
            color: var(--text-color);
            font-size: 1.1rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
        }

        .header-actions .action-item:hover {
            color: var(--primary-color);
        }

        .header-actions .action-item .cart-count-badge {
            position: absolute;
            top: 0px;
            right: 0px;
            background-color: var(--secondary-color);
            color: white;
            font-size: 10px;
            font-weight: bold;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-icon-wrapper {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: var(--light-gray-color);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border: 1px solid var(--border-color);
        }

        .profile-icon-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-icon-wrapper i {
            font-size: 1rem;
        }

        .profile-dropdown {
            position: absolute;
            top: calc(100% + 15px);
            right: 0;
            background-color: var(--background-color);
            border: 1px solid var(--border-color);
            border-radius: 6px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            width: 220px;
            padding: 10px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s ease;
            z-index: 1001;
        }

        .profile-dropdown.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .profile-dropdown ul li {
            margin-bottom: 5px;
        }

        .profile-dropdown ul li:last-child {
            margin-bottom: 0;
        }

        .profile-dropdown ul li a {
            display: block;
            padding: 10px 12px;
            color: var(--text-color);
            font-size: 14px;
            border-radius: 4px;
        }

        .profile-dropdown ul li a:hover {
            background-color: var(--light-gray-color);
            color: var(--primary-color);
        }

        .profile-dropdown ul hr {
            margin: 8px 0;
            border-color: var(--border-color);
        }

        .mobile-menu-toggle {
            display: none;
            font-size: 1.5rem;
            color: var(--text-color);
            background: none;
            border: none;
            cursor: pointer;
            margin-left: 15px;
        }

        .mobile-nav {
            position: fixed;
            top: 0;
            left: -100%;
            width: 280px;
            height: 100%;
            background-color: var(--background-color);
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            z-index: 1002;
            transition: left 0.3s ease;
            overflow-y: auto;
        }

        .mobile-nav.active {
            left: 0;
        }

        .mobile-nav-close {
            font-size: 1.5rem;
            color: var(--text-color);
            background: none;
            border: none;
            cursor: pointer;
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .mobile-nav ul {
            margin-top: 30px;
        }

        .mobile-nav ul li {
            margin-bottom: 15px;
        }

        .mobile-nav ul li a {
            color: var(--text-color);
            font-weight: 600;
            font-size: 16px;
            display: block;
        }

        .mobile-nav ul li a:hover {
            color: var(--primary-color);
        }

        .mobile-nav-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1001;
        }

        .mobile-nav-overlay.active {
            display: block;
        }

        /* Breadcrumb Styles (Same as about.html) */
        .breadcrumb-shop {
            background-color: var(--light-gray-color);
            padding: 20px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .breadcrumb-text {
            text-align: left;
        }

        .breadcrumb-links a {
            color: var(--text-light-color);
            margin-right: 8px;
            font-size: 0.9rem;
        }

        .breadcrumb-links a:not(:last-child)::after {
            content: "/";
            margin-left: 8px;
            color: var(--text-light-color);
        }

        .breadcrumb-links span {
            color: var(--text-color);
            font-weight: 500;
            font-size: 0.9rem;
        }

        /* Contact Page Specific Styles */
        .contact-hero {
            background-color: var(--primary-color);
            padding: 80px 0;
            text-align: center;
            color: #ffffff;
        }

        .contact-hero h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .contact-hero p {
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto 30px auto;
            opacity: 0.9;
            line-height: 1.7;
        }

        .contact-section {
            padding: 60px 0;
        }

        .contact-section .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .contact-section .section-title h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--text-color);
            margin-bottom: 10px;
        }

        .contact-section .section-title p {
            font-size: 1rem;
            color: var(--text-light-color);
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .contact-info {
            background-color: var(--light-gray-color);
            padding: 40px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }

        .contact-info h3 {
            font-size: 1.5rem;
            margin-bottom: 25px;
            color: var(--primary-color);
            position: relative;
            padding-bottom: 10px;
        }

        .contact-info h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--primary-color);
        }

        .contact-info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .contact-info-item:last-child {
            margin-bottom: 0;
        }

        .contact-info-icon {
            width: 50px;
            height: 50px;
            background-color: rgba(1, 24, 216, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 1.2rem;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .contact-info-content h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: var(--text-color);
        }

        .contact-info-content p,
        .contact-info-content a {
            color: var(--text-light-color);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .contact-info-content a:hover {
            color: var(--primary-color);
        }

        .contact-form {
            background-color: var(--background-color);
            padding: 40px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            border: 1px solid var(--border-color);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--text-color);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            font-family: 'Nunito Sans', sans-serif;
            font-size: 0.95rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 2px rgba(1, 24, 216, 0.1);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .customer-service-section {
            background-color: var(--light-gray-color);
            padding: 60px 0;
        }

        .service-items {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .service-item {
            background-color: var(--background-color);
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            text-align: center;
            border: 1px solid var(--border-color);
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .service-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            display: inline-block;
        }

        .service-item h4 {
            font-size: 1.2rem;
            margin-bottom: 15px;
            color: var(--text-color);
        }

        .service-item p {
            color: var(--text-light-color);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* FAQ Section */
        .faq-section {
            padding: 60px 0;
        }

        .faq-item {
            margin-bottom: 15px;
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            overflow: hidden;
        }

        .faq-question {
            padding: 15px 20px;
            background-color: var(--light-gray-color);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .faq-question:hover {
            background-color: #f1f3f5;
        }

        .faq-question::after {
            content: '+';
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .faq-question.active::after {
            content: '-';
        }

        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
        }

        .faq-answer.active {
            padding: 20px;
            max-height: 500px;
        }

        .faq-answer p {
            color: var(--text-light-color);
            line-height: 1.7;
        }

        /* Footer (Same as about.html) */
        .site-footer {
            background-color: #0118D8;
            color: #fff;
            padding: 60px 0 20px;
            font-size: 14px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-widget h5 {
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .footer-widget ul li {
            margin-bottom: 10px;
        }

        .footer-widget ul li a {
            color: rgba(255, 255, 255, 0.8);
        }

        .footer-widget ul li a:hover {
            color: #ffffff;
            text-decoration: underline;
        }

        .footer-widget p {
            margin-bottom: 15px;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.8);
        }

        .social-icons a {
            color: #fff;
            margin-right: 15px;
            font-size: 1.2rem;
        }

        .social-icons a:hover {
            color: #ffffff;
            opacity: 0.8;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.7);
        }

        /* Responsive Styles */
        @media (max-width: 1199px) {
            .header-search {
                width: 200px;
            }

            .header-search:focus-within {
                width: 250px;
            }

            .main-navigation ul li {
                margin-left: 20px;
            }
        }

        @media (max-width: 991px) {

            .main-navigation,
            .header-search {
                display: none;
            }

            .mobile-menu-toggle {
                display: block;
            }

            .header-actions .action-item {
                margin-left: 15px;
            }

            .contact-hero h1 {
                font-size: 2.5rem;
            }

            .contact-container {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 767px) {
            body {
                padding-top: 70px;
            }

            .site-header {
                height: 70px;
            }

            .header-logo img {
                max-height: 35px;
            }

            .header-actions .action-item {
                margin-left: 10px;
                font-size: 1rem;
                width: 32px;
                height: 32px;
            }

            .profile-icon-wrapper {
                width: 32px;
                height: 32px;
            }

            .profile-icon-wrapper i {
                font-size: 0.9rem;
            }

            .header-actions .action-item .cart-count-badge {
                width: 14px;
                height: 14px;
                font-size: 9px;
                top: -2px;
                right: -2px;
            }

            .contact-hero {
                padding: 60px 0;
            }

            .contact-hero h1 {
                font-size: 2rem;
            }

            .contact-hero p {
                font-size: 1rem;
            }

            .contact-info,
            .contact-form {
                padding: 30px;
            }
        }

        @media (max-width: 480px) {
            .header-actions .action-item {
                margin-left: 8px;
            }

            .contact-info,
            .contact-form {
                padding: 25px 20px;
            }

            .contact-info-item {
                flex-direction: column;
            }

            .contact-info-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
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
                    <li class="active"><a href="contact">Contact</a></li>
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
                <div class="action-item cart-icon">
                    <a href="cart" style="color: inherit; text-decoration: none;">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="cart-count-badge" id="headerCartCountContact">0</span>
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
                            <li><a href="user-profile#orders-tab"><i class="fas fa-history"
                                        style="margin-right: 8px;"></i>Order History</a>
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

    <!-- Mobile Navigation -->
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
            <li class="active"><a href="contact">Contact</a></li>
            <li>
                <hr style="margin: 15px 0; border-color: var(--border-color);">
            </li>
            <li><a href="user-profile">My Account</a></li>
            <li><a href="user-profile#orders-tab">Order History</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
    <div class="mobile-nav-overlay" id="mobileNavOverlay"></div>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-shop">
        <div class="container">
            <div class="breadcrumb-text">
                <div class="breadcrumb-links">
                    <a href="./">Home</a>
                    <span>Contact Us</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Hero Section -->
    <section class="contact-hero" data-aos="fade-in" data-aos-duration="800">
        <div class="container">
            <h1>Kami Disini Untuk Membantu</h1>
            <p>Punya pertanyaan atau butuh bantuan? Tim kami siap memberikan Anda pengalaman layanan
                pelanggan terbaik. Hubungi kami melalui salah satu saluran di bawah ini.</p>
            <a href="#contact-form" class="btn btn-primary"
                style="background-color: #fff; color: var(--primary-color); border-color: #fff;">Kirim Pesan</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Hubungi Kami</h2>
                <p>Kami ingin mendengar kabar dari Anda! Pilih metode kontak yang Anda inginkan.</p>
            </div>

            <div class="contact-container">
                <div class="contact-info" data-aos="fade-up" data-aos-delay="100">
                    <h3>Informasi Kami</h3>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Outlet Kami</h4>
                            <p>Jl. Batu Jajar No.14, RT.3/RW.1, Kb. Klp., Jakarta, Kota Jakarta Pusat<br>DKI Jakarta, 10120</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Nomor Telpon</h4>
                            <p><a href="tel:+622112345678">+62 21 1234 5678</a></p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Alamat Email</h4>
                            <p><a href="mailto:info@darimata.com">info@darimata.com</a></p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Jam Kerja</h4>
                            <p>Senin - Jumat: 9:00 - 18:00<br>Sabtu: 10:00 - 15:00</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form" data-aos="fade-up" data-aos-delay="200" id="contact-form">
                    <h3
                        style="margin-bottom: 25px; color: var(--primary-color); position: relative; padding-bottom: 10px;">
                        Kotak Pesan
                        <span
                            style="position: absolute; bottom: 0; left: 0; width: 50px; height: 3px; background-color: var(--primary-color);"></span>
                    </h3>

                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="name">Nama Anda</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Alamat Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" id="subject" name="subject" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Pesan Anda</label>
                            <textarea id="message" name="message" class="form-control" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%;">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Service Section -->
    <section class="customer-service-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Customer Service</h2>
                <p>akses cepat ke layanan dan informasi yang paling banyak diminta.</p>
            </div>

            <div class="service-items">
                <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h4>Contact Us</h4>
                    <p>Ada pertanyaan? Tim layanan pelanggan kami siap membantu Anda dengan pertanyaan apa pun.</p>
                    <a href="#contact-form" class="btn btn-outline-primary" style="margin-top: 15px;">Contact Now</a>
                </div>

                <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h4>Shipping & Returns</h4>
                    <p>Pelajari tentang kebijakan pengiriman, waktu pengiriman, dan proses pengembalian yang mudah.</p>
                    <a href="#" class="btn btn-outline-primary" style="margin-top: 15px;">Learn More</a>
                </div>

                <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-icon">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <h4>FAQs</h4>
                    <p>Temukan jawaban atas pertanyaan yang sering diajukan tentang pesanan, pembayaran, dan banyak lagi.</p>
                    <a href="#faq-section" class="btn btn-outline-primary" style="margin-top: 15px;">View FAQs</a>
                </div>

                <div class="service-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-icon">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h4>Size Guide</h4>
                    <p>Tidak yakin dengan ukuran? Periksa panduan ukuran kami untuk mendapatkan ukuran yang pas.</p>
                    <a href="#" class="btn btn-outline-primary" style="margin-top: 15px;">View Guide</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Pertanyaan yang Sering Diajukan</h2>
                <p>Temukan jawaban cepat untuk pertanyaan umum seputar berbelanja di DariMata Studio.</p>
            </div>
            <div class="faq-list">
                <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq-question">Bagaimana cara melacak pesanan saya?</div>
                    <div class="faq-answer">
                        <p>Setelah pesanan Anda dikirim, Anda akan menerima email berisi nomor pelacakan 
                            dan tautan. Anda juga dapat melacak status pesanan di dasbor akun Anda di bawah "Riwayat Pesanan".</p>
                    </div>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-question">Metode pembayaran apa yang diterima?</div>
                    <div class="faq-answer">
                        <p>Kami menerima berbagai metode pembayaran termasuk transfer bank, kartu kredit/debit, 
                            dompet elektronik, dan banyak lagi. Semua opsi pembayaran tercantum di kasir.</p>
                    </div>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="faq-question">Bagaimana saya dapat mengembalikan barang?</div>
                    <div class="faq-answer">
                        <p>Anda dapat meminta pengembalian dalam waktu 7 hari setelah menerima pesanan Anda. Silakan 
                            kunjungi halaman Pengiriman & Pengembalian kami atau hubungi layanan pelanggan kami untuk petunjuk terperinci.</p>
                    </div>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="faq-question">Bagaimana cara menghubungi layanan pelanggan?</div>
                    <div class="faq-answer">
                        <p>Anda dapat menghubungi kami melalui formulir kontak di atas, email di <a
                                href="mailto:info@darimata.com">info@darimata.com</a>, atau hubungi di <a
                                href="tel:+622112345678">+62 21 1234 5678</a> selama jam kerja.</p>
                    </div>
                </div>
                <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="faq-question">Apakah DariMata Studio mengirimkan secara internasional?</div>
                    <div class="faq-answer">
                        <p>Saat ini, kami hanya mengirimkan barang ke seluruh Indonesia. Nantikan informasi terbaru tentang pengiriman internasional di masa mendatang!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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

    <!-- JS: AOS, FAQ Accordion, Header, Mobile Nav, Cart Count, Footer Year -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        // FAQ Accordion
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.faq-question').forEach(function (q) {
                q.addEventListener('click', function () {
                    const answer = this.nextElementSibling;
                    const isActive = this.classList.contains('active');
                    document.querySelectorAll('.faq-question').forEach(el => el.classList.remove('active'));
                    document.querySelectorAll('.faq-answer').forEach(el => el.classList.remove('active'));
                    if (!isActive) {
                        this.classList.add('active');
                        answer.classList.add('active');
                    }
                });
            });

            // Profile dropdown
            const profileIconContainer = document.getElementById('profileIconContainer');
            const profileDropdownMenu = document.getElementById('profileDropdownMenu');
            if (profileIconContainer && profileDropdownMenu) {
                profileIconContainer.addEventListener('click', function (event) {
                    event.stopPropagation();
                    profileDropdownMenu.classList.toggle('active');
                });
                document.addEventListener('click', function (event) {
                    if (!profileIconContainer.contains(event.target) && !profileDropdownMenu.contains(event.target)) {
                        profileDropdownMenu.classList.remove('active');
                    }
                });
            }

            // Mobile nav
            const mobileMenuToggle = document.getElementById('mobileMenuToggle');
            const mobileNav = document.getElementById('mobileNav');
            const mobileNavClose = document.getElementById('mobileNavClose');
            const mobileNavOverlay = document.getElementById('mobileNavOverlay');
            if (mobileMenuToggle && mobileNav && mobileNavClose && mobileNavOverlay) {
                mobileMenuToggle.addEventListener('click', function () {
                    mobileNav.classList.add('active');
                    mobileNavOverlay.classList.add('active');
                    document.body.style.overflow = 'hidden';
                });
                function closeMobileMenu() {
                    mobileNav.classList.remove('active');
                    mobileNavOverlay.classList.remove('active');
                    document.body.style.overflow = '';
                }
                mobileNavClose.addEventListener('click', closeMobileMenu);
                mobileNavOverlay.addEventListener('click', closeMobileMenu);
            }

            // Cart count
            const headerCartCountContactEl = document.getElementById('headerCartCountContact');
            if (headerCartCountContactEl) {
                const storedCart = localStorage.getItem('shoppingCart');
                let totalItems = 0;
                if (storedCart) {
                    try {
                        const shoppingCartData = JSON.parse(storedCart);
                        shoppingCartData.forEach(item => {
                            totalItems += (Number(item.quantity) || 0);
                        });
                    } catch (e) { }
                }
                headerCartCountContactEl.textContent = totalItems;
            }

            // Update year in footer
            const yearEl = document.getElementById('currentYearFooter');
            if (yearEl) {
                yearEl.textContent = new Date().getFullYear();
            }
        });
    </script>
</body>

</html>