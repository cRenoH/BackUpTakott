<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DariMata Studio - Customer Dashboard">
    <meta name="keywords" content="DariMata, Fashion, E-commerce, Dashboard, Account">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DariMata Studio - My Account</title>

    <!-- Google Font: Nunito Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">

    <style>
        :root {
            --primary-color: #0118d8;
            --secondary-color: #e53637;
            --text-color: #111;
            --text-light-color: #777;
            --border-color: #eee;
            --light-gray-color: #f9f9f9;
            --border-radius: 8px;
            --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            --transition: all 0.3s ease;
        }

        /* Dashboard Layout */
        .dashboard {
            padding: 2rem 0;
            background-color: var(--light-gray-color);
            min-height: calc(100vh - 120px);
        }

        .dashboard-container {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 1.5rem;
            padding: 1rem 0;
        }

        /* Sidebar */
        .dashboard-sidebar {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 1.5rem;
            position: sticky;
            top: 100px;
            max-height: calc(100vh - 120px);
            overflow-y: auto;
            transition: all 0.3s ease;
        }

        .dashboard-sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .dashboard-sidebar::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 3px;
        }

        .user-profile {
            text-align: center;
            padding: 1rem 0 1.5rem;
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 1rem;
        }

        .user-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 1rem;
            overflow: hidden;
            border: 3px solid var(--primary-color);
            box-shadow: 0 5px 15px rgba(1, 24, 216, 0.1);
        }

        .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-name {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-color);
            margin-bottom: 0.25rem;
        }

        .user-email {
            color: var(--text-light-color);
            font-size: 0.85rem;
        }

        .dashboard-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .dashboard-menu li {
            margin-bottom: 0.5rem;
        }

        .dashboard-menu li a {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            border-radius: var(--border-radius);
            color: var(--text-color);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .dashboard-menu li a i {
            margin-right: 0.75rem;
            font-size: 1rem;
            width: 20px;
            text-align: center;
            color: var(--text-light-color);
            transition: var(--transition);
        }

        .dashboard-menu li a:hover,
        .dashboard-menu li.active a {
            background-color: rgba(1, 24, 216, 0.05);
            color: var(--primary-color);
        }

        .dashboard-menu li a:hover i,
        .dashboard-menu li.active a i {
            color: var(--primary-color);
        }

        .dashboard-menu li.active a {
            font-weight: 700;
        }

        /* Dashboard Content */
        .dashboard-content {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 1.5rem;
        }

        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border-color);
        }

        .dashboard-title {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--text-color);
            margin: 0;
        }

        .dashboard-subtitle {
            color: var(--text-light-color);
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }

        /* Dashboard Cards */
        .stats-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 1.25rem;
            margin-bottom: 2rem;
        }

        .stats-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            box-shadow: var(--box-shadow);
            border: 1px solid var(--border-color);
            transition: var(--transition);
        }

        .stats-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .stats-card__icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: white;
        }

        .stats-card__icon.orders {
            background: linear-gradient(135deg, var(--primary-color), #3a4bff);
        }

        .stats-card__icon.wishlist {
            background: linear-gradient(135deg, #ff4d4d, #ff6b6b);
        }

        .stats-card__icon.points {
            background: linear-gradient(135deg, #4CAF50, #66BB6A);
        }

        .stats-card__icon.wallet {
            background: linear-gradient(135deg, #FF9800, #FFA726);
        }

        .stats-card__title {
            font-size: 0.9rem;
            color: var(--text-light-color);
            margin-bottom: 0.5rem;
        }

        .stats-card__value {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--text-color);
            margin: 0;
        }

        /* Recent Orders */
        .orders-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1.5rem;
        }

        .orders-table th {
            text-align: left;
            padding: 0.75rem 1rem;
            background-color: var(--light-gray-color);
            font-weight: 700;
            font-size: 0.85rem;
            color: var(--text-color);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .orders-table td {
            padding: 1rem;
            border-bottom: 1px solid var(--border-color);
            font-size: 0.9rem;
            vertical-align: middle;
        }

        .order-id {
            font-weight: 600;
            color: var(--primary-color);
        }

        .order-date {
            color: var(--text-light-color);
            font-size: 0.85rem;
        }

        .order-status {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .status-pending {
            background-color: #FFF3E0;
            color: #E65100;
        }

        .status-processing {
            background-color: #E3F2FD;
            color: #1565C0;
        }

        .status-shipped {
            background-color: #E8F5E9;
            color: #2E7D32;
        }

        .status-delivered {
            background-color: #E0F7FA;
            color: #00838F;
        }

        .status-cancelled {
            background-color: #FFEBEE;
            color: #C62828;
        }

        .order-action {
            color: var(--primary-color);
            font-weight: 600;
            font-size: 0.85rem;
            text-decoration: none;
            transition: var(--transition);
        }

        .order-action:hover {
            color: var(--secondary-color);
            text-decoration: underline;
        }

        /* Address Cards */
        .address-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.25rem;
            margin-bottom: 1.5rem;
        }

        .address-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            box-shadow: var(--box-shadow);
            border: 1px solid var(--border-color);
            transition: var(--transition);
            position: relative;
        }

        .address-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .address-card__title {
            font-size: 1rem;
            font-weight: 700;
            color: var(--text-color);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }

        .address-card__title .badge {
            margin-left: 0.75rem;
            background: var(--primary-color);
            color: white;
            font-size: 0.7rem;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
        }

        .address-card__details p {
            margin: 0.5rem 0;
            color: var(--text-color);
            font-size: 0.9rem;
        }

        .address-card__details p strong {
            font-weight: 600;
        }

        .address-card__actions {
            display: flex;
            gap: 0.75rem;
            margin-top: 1.25rem;
        }

        .address-btn {
            flex: 1;
            padding: 0.5rem;
            border-radius: var(--border-radius);
            font-size: 0.8rem;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            transition: var(--transition);
            border: 1px solid var(--border-color);
        }

        .address-btn.edit {
            background-color: white;
            color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .address-btn.edit:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .address-btn.delete {
            background-color: white;
            color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .address-btn.delete:hover {
            background-color: var(--secondary-color);
            color: white;
        }

        .address-btn.default {
            background-color: var(--primary-color);
            color: white;
        }

        .address-btn.default:hover {
            background-color: #0018a8;
        }

        /* Wishlist Items */
        .wishlist-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 1.25rem;
            margin-bottom: 1.5rem;
        }

        .wishlist-item {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            border: 1px solid var(--border-color);
            transition: var(--transition);
            position: relative;
        }

        .wishlist-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .wishlist-item__image {
            height: 180px;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #f8f8f8;
            position: relative;
        }

        .wishlist-item__actions {
            position: absolute;
            top: 0.75rem;
            right: 0.75rem;
            opacity: 0;
            transform: translateY(8px);
            transition: var(--transition);
            z-index: 3;
        }

        .wishlist-item:hover .wishlist-item__actions {
            opacity: 1;
            transform: translateY(0);
        }

        .wishlist-item__actions li {
            margin-bottom: 0.4rem;
            list-style: none;
        }

        .wishlist-item__actions li a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 1px 8px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
            color: var(--text-light-color);
            font-size: 0.9rem;
        }

        .wishlist-item__actions li a:hover {
            background: var(--primary-color);
            color: white;
            transform: scale(1.05);
        }

        .wishlist-item__content {
            padding: 1rem;
        }

        .wishlist-item__title {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-color);
            margin-bottom: 0.5rem;
            transition: var(--transition);
            line-height: 1.35;
        }

        .wishlist-item:hover .wishlist-item__title {
            color: var(--primary-color);
        }

        .wishlist-item__price {
            font-size: 1rem;
            font-weight: 700;
            color: var(--text-color);
            margin: 0;
        }

        .wishlist-item__old-price {
            text-decoration: line-through;
            color: #b7b7b7;
            font-size: 0.8rem;
            margin-right: 0.4rem;
        }

        .wishlist-item__rating {
            color: #f7941d;
            font-size: 0.75rem;
            margin-bottom: 0.75rem;
        }

        .wishlist-item__actions-row {
            display: flex;
            gap: 0.75rem;
            margin-top: 0.75rem;
        }

        .wishlist-add-to-cart {
            flex-grow: 1;
            padding: 0.5rem;
            background: white;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
            border-radius: var(--border-radius);
            font-size: 0.8rem;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            transition: var(--transition);
        }

        .wishlist-add-to-cart:hover {
            background: var(--primary-color);
            color: white;
        }

        /* Form Styles */
        .dashboard-form {
            max-width: 600px;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            font-size: 0.9rem;
            color: var(--text-color);
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(1, 24, 216, 0.1);
            outline: none;
        }

        .form-select {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            font-size: 0.9rem;
            transition: var(--transition);
            background-color: white;
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
        }

        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(1, 24, 216, 0.1);
            outline: none;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: var(--border-radius);
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: var(--transition);
            border: none;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: #0018a8;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(1, 24, 216, 0.2);
        }

        .btn-outline {
            background-color: white;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
        }

        .btn-outline:hover {
            background-color: rgba(1, 24, 216, 0.05);
            transform: translateY(-2px);
        }

        .password-strength {
            margin-top: 0.5rem;
            height: 6px;
            background: #eee;
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 1rem;
        }

        .password-strength-bar {
            height: 100%;
            width: 0;
            background: #ddd;
            transition: width 0.3s ease;
        }

        .password-hints {
            margin-top: 1rem;
            padding: 1rem;
            background: rgba(1, 24, 216, 0.03);
            border-radius: var(--border-radius);
            border-left: 4px solid var(--primary-color);
            font-size: 0.85rem;
        }

        .password-hints ul {
            margin: 0;
            padding-left: 1.25rem;
        }

        .password-hints li {
            margin-bottom: 0.5rem;
            color: var(--text-light-color);
        }

        .password-hints li i {
            margin-right: 0.5rem;
            color: var(--primary-color);
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 3rem 1rem;
            background-color: #fff;
            border-radius: var(--border-radius);
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
            margin: 1rem 0;
        }

        .empty-state img {
            max-width: 180px;
            margin-bottom: 1.5rem;
            opacity: 0.5;
        }

        .empty-state h4 {
            font-size: 1.1rem;
            color: var(--text-color);
            margin-bottom: 0.75rem;
        }

        .empty-state p {
            color: var(--text-light-color);
            margin-bottom: 1.25rem;
            max-width: 350px;
            margin-left: auto;
            margin-right: auto;
            font-size: 0.9rem;
        }

        .empty-state .btn {
            background-color: var(--primary-color);
            color: white;
            text-decoration: none;
        }

        .empty-state .btn:hover {
            background-color: var(--secondary-color);
        }

        /* Sembunyikan semua tab-content kecuali yang aktif */
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* Responsive adjustments */
        @media (max-width: 991px) {
            .dashboard-container {
                grid-template-columns: 1fr;
            }

            .dashboard-sidebar {
                position: static;
                margin-bottom: 1.5rem;
                max-height: none;
            }

            .stats-cards {
                grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            }

            .wishlist-grid {
                grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            }

            .address-cards {
                grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            }
        }

        @media (max-width: 767px) {
            .dashboard-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .stats-cards {
                grid-template-columns: 1fr 1fr;
            }

            .orders-table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }

            .wishlist-grid {
                grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            }

            .address-cards {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .stats-cards {
                grid-template-columns: 1fr;
            }

            .wishlist-grid {
                grid-template-columns: 1fr 1fr;
            }

            .wishlist-item__image {
                height: 140px;
            }

            .address-card__actions {
                flex-direction: column;
            }

            .address-btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Header (Sama seperti shop2.html) -->
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
                <div class="action-item cart-icon">
                    <a href="cart" style="color: inherit; text-decoration: none;">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="cart-count-badge">3</span>
                    </a>
                </div>
                <div class="action-item profile-icon" id="profileIconContainer">
                    <div class="profile-icon-wrapper">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="profile-dropdown" id="profileDropdownMenu">
                        {{-- Gunakan direktif @if Blade untuk mengecek session --}}
        @if (session()->has('user_email'))

            {{-- JIKA TRUE (PENGGUNA SUDAH LOGIN), tampilkan menu lengkap --}}
            <ul>
                <li><a href="/user-profile"><i class="fas fa-user-circle" style="margin-right: 8px;"></i>My Account</a></li>
                <li><a href="#"><i class="fas fa-history" style="margin-right: 8px;"></i>Order History</a></li>
                <li><a href="#"><i class="fas fa-cog" style="margin-right: 8px;"></i>Settings</a></li>
                <li><hr></li>
                <li><a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt" style="margin-right: 8px;"></i>Logout</a></li>
            </ul>

        @else

            {{-- JIKA FALSE (PENGGUNA ADALAH TAMU), tampilkan menu login saja --}}
            <ul>
                <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt" style="margin-right: 8px;"></i>Login</a></li>
            </ul>

        @endif
                    </div>
                </div>
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Open menu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation (Sama seperti shop2.html) -->
    <div class="mobile-nav" id="mobileNav">
        <button class="mobile-nav-close" id="mobileNavClose" aria-label="Close menu">&times;</button>
        <form class="header-search mobile-search" action="/search" method="GET" style="margin: 20px 0; width: 100%;">
            <input type="search" name="q" placeholder="Search products..." aria-label="Search">
            <button type="submit" aria-label="Submit search"><i class="fas fa-search"></i></button>
        </form>
        <ul>
            <li><a href="/">Home</a></li>
            <li class="active"><a href="shop2">Shop</a></li>
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

    <!-- Breadcrumb -->
    <section class="breadcrumb-shop"
        style="background-color: var(--light-gray-color); padding: 25px 0; border-bottom: 1px solid var(--border-color);">
        <div class="container">
            <div class="breadcrumb-text" style="text-align: left;">
                <div class="breadcrumb-links" style="font-size: 0.9rem;">
                    <a href="/" style="color: var(--text-light-color);">Home</a>
                    <span style="margin: 0 8px; color: var(--text-light-color);">/</span>
                    <span style="color: var(--text-color); font-weight: 500;">My Account</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard Section -->
    <section class="dashboard">
        <div class="container">
            <div class="dashboard-container">
                <!-- Sidebar -->
                <aside class="dashboard-sidebar">
                    @foreach ($userData as $user )
                        
                    
                    <div class="user-profile">
                        <div class="user-avatar">
                            <img src="img/users/pp.jpg" alt="User Profile">
                        </div>
                        <h3 class="user-name">{{ $user['nama'] }}</h3>
                        <p class="user-email">{{  $user['email']}}</p>
                    </div>
                    <ul class="dashboard-menu">
                        <li class="active">
                            <a href="#dashboard">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#orders">
                                <i class="fas fa-shopping-bag"></i>
                                <span>Orders</span>
                            </a>
                        </li>
                        <li>
                            <a href="#wishlist">
                                <i class="fas fa-heart"></i>
                                <span>Wishlist</span>
                            </a>
                        </li>
                        <li>
                            <a href="#addresses">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Addresses</span>
                            </a>
                        </li>
                        <li>
                            <a href="#profile">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#password">
                                <i class="fas fa-lock"></i>
                                <span>Password</span>
                            </a>
                        </li>
                        <li>
                            <a href="#logout">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </aside>

                <!-- Main Content -->
                <main class="dashboard-content">
                    <!-- Dashboard Tab -->
                    <div id="dashboard" class="tab-content active">
                        <div class="dashboard-header">
                            <div>
                                <h2 class="dashboard-title">Dashboard</h2>
                                <p class="dashboard-subtitle">Welcome back, Ahmad! Here's what's happening with your
                                    account.</p>
                            </div>
                            <a href="shop2" class="btn btn-primary">Continue Shopping</a>
                        </div>

                        <!-- Stats Cards -->
                        <div class="stats-cards">
                            <div class="stats-card">
                                <div class="stats-card__icon orders">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                                <p class="stats-card__title">Total Orders</p>
                                <h3 class="stats-card__value">12</h3>
                            </div>
                            <div class="stats-card">
                                <div class="stats-card__icon wishlist">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <p class="stats-card__title">Wishlist Items</p>
                                <h3 class="stats-card__value">5</h3>
                            </div>
                            <div class="stats-card">
                                <div class="stats-card__icon wallet">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <p class="stats-card__title">Wallet Balance</p>
                                <h3 class="stats-card__value">Rp250.000</h3>
                            </div>
                        </div>

                        <!-- Recent Orders -->
                        <h3 style="margin-bottom: 1.5rem;">Recent Orders</h3>
                        <div class="table-responsive">
                            <table class="orders-table">
                                <thead>
                                    <tr>
                                        <th>Order #</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="order-id">#ORD-2023-1234</span>
                                        </td>
                                        <td>
                                            <span class="order-date">May 15, 2023</span>
                                        </td>
                                        <td>
                                            <span class="order-status status-delivered">Delivered</span>
                                        </td>
                                        <td>Rp318.000</td>
                                        <td>
                                            <a href="#" class="order-action">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="order-id">#ORD-2023-1189</span>
                                        </td>
                                        <td>
                                            <span class="order-date">April 28, 2023</span>
                                        </td>
                                        <td>
                                            <span class="order-status status-shipped">Shipped</span>
                                        </td>
                                        <td>Rp138.000</td>
                                        <td>
                                            <a href="#" class="order-action">Track</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="#orders" class="btn btn-outline" style="margin-top: 1rem;">View All Orders</a>
                    </div>

                    <!-- Orders Tab -->
                    <div id="orders" class="tab-content">
                        <div class="dashboard-header">
                            <div>
                                <h2 class="dashboard-title">Order History</h2>
                                <p class="dashboard-subtitle">View and manage your past orders</p>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="orders-table">
                                <thead>
                                    <tr>
                                        <th>Order #</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="order-id">#ORD-2023-1234</span>
                                        </td>
                                        <td>
                                            <span class="order-date">May 15, 2023</span>
                                        </td>
                                        <td>
                                            <span class="order-status status-delivered">Delivered</span>
                                        </td>
                                        <td>Rp318.000</td>
                                        <td>
                                            <a href="#" class="order-action">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="order-id">#ORD-2023-1189</span>
                                        </td>
                                        <td>
                                            <span class="order-date">April 28, 2023</span>
                                        </td>
                                        <td>
                                            <span class="order-status status-shipped">Shipped</span>
                                        </td>
                                        <td>Rp138.000</td>
                                        <td>
                                            <a href="#" class="order-action">Track</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="order-id">#ORD-2023-1056</span>
                                        </td>
                                        <td>
                                            <span class="order-date">March 12, 2023</span>
                                        </td>
                                        <td>
                                            <span class="order-status status-cancelled">Cancelled</span>
                                        </td>
                                        <td>Rp275.000</td>
                                        <td>
                                            <a href="#" class="order-action">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="order-id">#ORD-2023-0987</span>
                                        </td>
                                        <td>
                                            <span class="order-date">February 5, 2023</span>
                                        </td>
                                        <td>
                                            <span class="order-status status-delivered">Delivered</span>
                                        </td>
                                        <td>Rp420.000</td>
                                        <td>
                                            <a href="#" class="order-action">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="order-id">#ORD-2023-0876</span>
                                        </td>
                                        <td>
                                            <span class="order-date">January 18, 2023</span>
                                        </td>
                                        <td>
                                            <span class="order-status status-delivered">Delivered</span>
                                        </td>
                                        <td>Rp195.000</td>
                                        <td>
                                            <a href="#" class="order-action">View</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="pagination" style="margin-top: 2rem; display: flex; justify-content: center;">
                            <a href="#" class="page-item active">1</a>
                            <a href="#" class="page-item">2</a>
                            <a href="#" class="page-item">3</a>
                            <a href="#" class="page-item">Next <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <!-- Wishlist Tab -->
                    <div id="wishlist" class="tab-content">
                        <div class="dashboard-header">
                            <div>
                                <h2 class="dashboard-title">My Wishlist</h2>
                                <p class="dashboard-subtitle">Your saved items</p>
                            </div>
                            <button class="btn btn-outline">Share Wishlist</button>
                        </div>

                        <div class="wishlist-grid">
                            <!-- Wishlist Item 1 -->
                            <div class="wishlist-item">
                                <div class="wishlist-item__image" style="background-image: url('img/product/FIX/boxy fit tee/CREATIVITY/CREATIVITY - BROWN - FRONT.png');">
                                    <ul class="wishlist-item__actions">
                                        <li>
                                            <a href="#" title="Remove"><i class="fas fa-trash"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Quick View"><i class="fas fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wishlist-item__content">
                                    <div class="wishlist-item__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <h3 class="wishlist-item__title">
                                        <a href="product-detail">Boxy Fit Tee [CREATIVITY]</a>
                                    </h3>
                                    <p class="wishlist-item__price">
                                        <span class="wishlist-item__old-price">Rp199.000</span>
                                        Rp149.000
                                    </p>
                                    <div class="wishlist-item__actions-row">
                                        <a href="#" class="wishlist-add-to-cart">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Wishlist Item 2 -->
                            <div class="wishlist-item">
                                <div class="wishlist-item__image" style="background-image: url('img/product/FIX/crewneck/HUMANS/HUMANS - LIGHT GREY - FRONT.png');">
                                    <ul class="wishlist-item__actions">
                                        <li>
                                            <a href="#" title="Remove"><i class="fas fa-trash"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Quick View"><i class="fas fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wishlist-item__content">
                                    <div class="wishlist-item__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <h3 class="wishlist-item__title">
                                        <a href="product-detail">Crewneck [HUMANS]</a>
                                    </h3>
                                    <p class="wishlist-item__price">
                                        Rp249.000
                                    </p>
                                    <div class="wishlist-item__actions-row">
                                        <a href="#" class="wishlist-add-to-cart">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Wishlist Item 3 -->
                            <div class="wishlist-item">
                                <div class="wishlist-item__image" style="background-image: url('img/product/FIX/boxy fit tee/STD/DARIMATA - BLACK&RED - FRONT.png');">
                                    <ul class="wishlist-item__actions">
                                        <li>
                                            <a href="#" title="Remove"><i class="fas fa-trash"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Quick View"><i class="fas fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wishlist-item__content">
                                    <div class="wishlist-item__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h3 class="wishlist-item__title">
                                        <a href="product-detail">Boxy Fit Tee [STD]</a>
                                    </h3>
                                    <p class="wishlist-item__price">
                                        <span class="wishlist-item__old-price">Rp199.000</span>
                                        Rp149.000
                                    </p>
                                    <div class="wishlist-item__actions-row">
                                        <a href="#" class="wishlist-add-to-cart">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Wishlist Item 4 -->
                            <div class="wishlist-item">
                                <div class="wishlist-item__image" style="background-image: url('img/product/FIX/hoodie/WORKAHOLIC/WORKAHOLIC - WHITE - FRONT.png');">
                                    <ul class="wishlist-item__actions">
                                        <li>
                                            <a href="#" title="Remove"><i class="fas fa-trash"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Quick View"><i class="fas fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wishlist-item__content">
                                    <div class="wishlist-item__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <h3 class="wishlist-item__title">
                                        <a href="product-detail">Hoodie [WORKAHOLIC]</a>
                                    </h3>
                                    <p class="wishlist-item__price">
                                        Rp399.000
                                    </p>
                                    <div class="wishlist-item__actions-row">
                                        <a href="#" class="wishlist-add-to-cart">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Wishlist Item 5 -->
                            <div class="wishlist-item">
                                <div class="wishlist-item__image" style="background-image: url('img/product/FIX/hoodie/DRMTSTD/DRMTSTD - BLACK RED - FRONT.png');">
                                    <ul class="wishlist-item__actions">
                                        <li>
                                            <a href="#" title="Remove"><i class="fas fa-trash"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" title="Quick View"><i class="fas fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wishlist-item__content">
                                    <div class="wishlist-item__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <h3 class="wishlist-item__title">
                                        <a href="product-detail">Hoodie [DRMTSTD]</a>
                                    </h3>
                                    <p class="wishlist-item__price">
                                        Rp399.000
                                    </p>
                                    <div class="wishlist-item__actions-row">
                                        <a href="#" class="wishlist-add-to-cart">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Addresses Tab -->
                    <div id="addresses" class="tab-content">
                        <div class="dashboard-header">
                            <div>
                                <h2 class="dashboard-title">My Addresses</h2>
                                <p class="dashboard-subtitle">Manage your shipping addresses</p>
                            </div>
                            <button class="btn btn-primary" id="addNewAddressBtn">Add New Address</button>
                        </div>

                        <div class="address-cards">
                            <!-- Address Card 1 (Default) -->
                            <div class="address-card">
                                <h3 class="address-card__title">
                                    Home Address
                                    <span class="badge">Default</span>
                                </h3>
                                <div class="address-card__details">
                                    <p><strong>Ahmad Rizky</strong></p>
                                    <p>Jl. Merdeka No. 123</p>
                                    <p>RT 05/RW 02, Kel. Menteng</p>
                                    <p>Kec. Jakarta Pusat</p>
                                    <p>DKI Jakarta, 10310</p>
                                    <p>Indonesia</p>
                                    <p><strong>Phone:</strong> +62 812-3456-7890</p>
                                </div>
                                <div class="address-card__actions">
                                    <a href="#" class="address-btn edit">Edit</a>
                                    <a href="#" class="address-btn delete">Delete</a>
                                </div>
                            </div>

                            <!-- Address Card 2 -->
                            <div class="address-card">
                                <h3 class="address-card__title">
                                    Office Address
                                </h3>
                                <div class="address-card__details">
                                    <p><strong>Ahmad Rizky</strong></p>
                                    <p>Gedung Perkantoran Sudirman Plaza</p>
                                    <p>Jl. Jend. Sudirman Kav. 76-78</p>
                                    <p>Lt. 15, Suite 1502</p>
                                    <p>Jakarta Selatan, 12910</p>
                                    <p>Indonesia</p>
                                    <p><strong>Phone:</strong> +62 812-3456-7890</p>
                                </div>
                                <div class="address-card__actions">
                                    <a href="#" class="address-btn edit">Edit</a>
                                    <a href="#" class="address-btn delete">Delete</a>
                                    <a href="#" class="address-btn default">Set as Default</a>
                                </div>
                            </div>
                        </div>

                        <!-- Add Address Form (Hidden by default) -->
                        <div class="dashboard-form" id="addAddressForm" style="display: none;">
                            <h3 style="margin-bottom: 1.5rem;">Add New Address</h3>
                            <form>
                                <div class="form-group">
                                    <label class="form-label" for="addressTitle">Address Title</label>
                                    <input type="text" class="form-control" id="addressTitle"
                                        placeholder="e.g. Home, Office">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="fullName">Full Name</label>
                                    <input type="text" class="form-control" id="fullName" placeholder="Your full name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <input type="tel" class="form-control" id="phoneNumber"
                                        placeholder="+62 812-3456-7890">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="addressLine1">Address Line 1</label>
                                    <input type="text" class="form-control" id="addressLine1"
                                        placeholder="Street address, P.O. box, company name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="addressLine2">Address Line 2 (Optional)</label>
                                    <input type="text" class="form-control" id="addressLine2"
                                        placeholder="Apartment, suite, unit, building, floor, etc.">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="city">City</label>
                                    <input type="text" class="form-control" id="city" placeholder="City">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="province">Province</label>
                                    <select class="form-select" id="province">
                                        <option value="">Select Province</option>
                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                        <option value="Jawa Timur">Jawa Timur</option>
                                        <option value="Banten">Banten</option>
                                        <option value="Bali">Bali</option>
                                        <!-- More provinces can be added -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="postalCode">Postal Code</label>
                                    <input type="text" class="form-control" id="postalCode" placeholder="Postal code">
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="setAsDefault">
                                        <label class="form-check-label" for="setAsDefault">Set as default
                                            address</label>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-top: 1.5rem;">
                                    <button type="submit" class="btn btn-primary">Save Address</button>
                                    <button type="button" class="btn btn-outline" id="cancelAddAddress"
                                        style="margin-left: 0.75rem;">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Profile Tab -->
                    <div id="profile" class="tab-content">
                        <div class="dashboard-header">
                            <div>
                                <h2 class="dashboard-title">Profile Information</h2>
                                <p class="dashboard-subtitle">Update your account's profile information</p>
                            </div>
                        </div>

                        <div class="dashboard-form">
                            <form>
                                <div class="form-group">
                                    <label class="form-label" for="profileAvatar">Profile Photo</label>
                                    <div style="display: flex; align-items: center; gap: 1.5rem;">
                                        <div class="user-avatar" style="width: 80px; height: 80px;">
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                                alt="Current Profile" id="currentAvatar">
                                        </div>
                                        <div>
                                            <input type="file" class="form-control" id="profileAvatar" accept="image/*"
                                                style="padding: 0.375rem; height: auto;">
                                            <small class="text-muted"
                                                style="display: block; margin-top: 0.5rem; font-size: 0.8rem; color: var(--text-light-color);">
                                                JPG, GIF or PNG. Max size of 2MB
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="fullName">Full Name</label>
                                    <input type="text" class="form-control" id="fullName" value="Ahmad Rizky">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" value="ahmad.rizky@example.com"
                                        disabled>
                                    <small class="text-muted"
                                        style="display: block; margin-top: 0.5rem; font-size: 0.8rem; color: var(--text-light-color);">
                                        To change your email, please contact customer support
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <input type="tel" class="form-control" id="phoneNumber" value="+62 812-3456-7890">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="birthDate">Date of Birth</label>
                                    <input type="date" class="form-control" id="birthDate" value="1990-05-15">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Gender</label>
                                    <div style="display: flex; gap: 1rem;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="male"
                                                value="male" checked>
                                            <label class="form-check-label" for="male">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="female"
                                                value="female">
                                            <label class="form-check-label" for="female">
                                                Female
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="other"
                                                value="other">
                                            <label class="form-check-label" for="other">
                                                Other
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-top: 1.5rem;">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Password Tab -->
                    <div id="password" class="tab-content">
                        <div class="dashboard-header">
                            <div>
                                <h2 class="dashboard-title">Update Password</h2>
                                <p class="dashboard-subtitle">Ensure your account is using a long, random password to
                                    stay secure.</p>
                            </div>
                        </div>

                        <div class="dashboard-form">
                            <form>
                                <div class="form-group">
                                    <label class="form-label" for="currentPassword">Current Password</label>
                                    <input type="password" class="form-control" id="currentPassword">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="newPassword">New Password</label>
                                    <input type="password" class="form-control" id="newPassword">
                                    <div class="password-strength">
                                        <div class="password-strength-bar" id="passwordStrengthBar"></div>
                                    </div>
                                    <div class="password-hints">
                                        <ul>
                                            <li><i class="fas fa-check-circle"></i> Minimum 8 characters</li>
                                            <li><i class="fas fa-check-circle"></i> At least one uppercase letter</li>
                                            <li><i class="fas fa-check-circle"></i> At least one number</li>
                                            <li><i class="fas fa-check-circle"></i> At least one special character</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="confirmPassword">Confirm New Password</label>
                                    <input type="password" class="form-control" id="confirmPassword">
                                </div>
                                <div class="form-group" style="margin-top: 1.5rem;">
                                    <button type="submit" class="btn btn-primary">Update Password</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Logout Tab -->
                    <div id="logout" class="tab-content">
                        <div class="empty-state">
                            <img src="img/logout.svg" alt="Logout illustration">
                            <h4>Ready to leave?</h4>
                            <p>You can always log back in later if you need to check your orders, wishlist, or update
                                your profile.</p>
                            <button class="btn" style="background-color: var(--secondary-color);">Logout</button>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>

    <!-- Footer (Sama seperti /.html) -->
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
        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileNav = document.getElementById('mobileNav');
        const mobileNavOverlay = document.getElementById('mobileNavOverlay');
        const mobileNavClose = document.getElementById('mobileNavClose');

        mobileMenuToggle.addEventListener('click', () => {
            mobileNav.classList.add('active');
            mobileNavOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        mobileNavClose.addEventListener('click', () => {
            mobileNav.classList.remove('active');
            mobileNavOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });

        mobileNavOverlay.addEventListener('click', () => {
            mobileNav.classList.remove('active');
            mobileNavOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });

        // Profile Dropdown
        const profileIconContainer = document.getElementById('profileIconContainer');
        const profileDropdownMenu = document.getElementById('profileDropdownMenu');

        profileIconContainer.addEventListener('click', (e) => {
            e.stopPropagation();
            profileDropdownMenu.classList.toggle('show');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!profileIconContainer.contains(e.target)) {
                profileDropdownMenu.classList.remove('show');
            }
        });

        // Back to Top Button
        const backToTop = document.getElementById('backToTop');
        if (backToTop) {
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 300) {
                    backToTop.classList.add('show');
                } else {
                    backToTop.classList.remove('show');
                }
            });

            backToTop.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }

        // Tab Switching Functionality
        document.querySelectorAll('.dashboard-menu li a').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();

                // Get target tab ID from href
                const targetTabId = this.getAttribute('href').substring(1);

                // Hide all tab contents
                document.querySelectorAll('.tab-content').forEach(tab => {
                    tab.classList.remove('active');
                });

                // Show target tab content (only if exists)
                const targetTab = document.getElementById(targetTabId);
                if (targetTab) {
                    targetTab.classList.add('active');
                }

                // Update active state in menu
                document.querySelectorAll('.dashboard-menu li').forEach(item => {
                    item.classList.remove('active');
                });

                this.parentElement.classList.add('active');
            });
        });

        // Ensure only one tab-content is active on load
        document.addEventListener('DOMContentLoaded', function () {
            // Hide all tab-content except the first .active
            let firstActive = document.querySelector('.tab-content.active');
            document.querySelectorAll('.tab-content').forEach(tab => {
                if (tab !== firstActive) tab.classList.remove('active');
            });
            if (!firstActive) {
                // If no .active, show the first tab
                let firstTab = document.querySelector('.tab-content');
                if (firstTab) firstTab.classList.add('active');
            }
        });

        // Address Form Toggle
        const addNewAddressBtn = document.getElementById('addNewAddressBtn');
        const cancelAddAddress = document.getElementById('cancelAddAddress');
        const addAddressForm = document.getElementById('addAddressForm');

        if (addNewAddressBtn && cancelAddAddress && addAddressForm) {
            addNewAddressBtn.addEventListener('click', () => {
                addAddressForm.style.display = 'block';
                window.scrollTo({
                    top: addAddressForm.offsetTop - 20,
                    behavior: 'smooth'
                });
            });

            cancelAddAddress.addEventListener('click', () => {
                addAddressForm.style.display = 'none';
            });
        }

        // Password Strength Indicator
        const newPasswordInput = document.getElementById('newPassword');
        const passwordStrengthBar = document.getElementById('passwordStrengthBar');

        if (newPasswordInput && passwordStrengthBar) {
            newPasswordInput.addEventListener('input', function () {
                const password = this.value;
                let strength = 0;

                // Check length
                if (password.length >= 8) strength += 25;

                // Check for uppercase letters
                if (/[A-Z]/.test(password)) strength += 25;

                // Check for numbers
                if (/[0-9]/.test(password)) strength += 25;

                // Check for special characters
                if (/[^A-Za-z0-9]/.test(password)) strength += 25;

                // Update strength bar
                passwordStrengthBar.style.width = strength + '%';

                // Update color based on strength
                if (strength < 50) {
                    passwordStrengthBar.style.backgroundColor = '#e53935'; // Red
                } else if (strength < 75) {
                    passwordStrengthBar.style.backgroundColor = '#fb8c00'; // Orange
                } else {
                    passwordStrengthBar.style.backgroundColor = '#43a047'; // Green
                }
            });
        }
    </script>
</body>

</html>