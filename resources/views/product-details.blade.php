<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DariMata Studio - Detail Produk">
    <meta name="keywords" content="DariMata, Fashion, E-commerce, Detail Produk, Minimalist">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Produk - DariMata Studio</title>

    <!-- Google Font: Nunito Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Lightbox/Gallery CSS (Contoh: basicLightbox) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/basiclightbox@5.0.4/dist/basicLightbox.min.css">
    <link rel="stylesheet" href="css/style.css">


    <style>
        /* Product Details Page Styles */
        .product-details-section {
            padding: 40px 0;
            background-color: var(--background-color);
            /* Putih untuk konten utama */
        }

        .product-details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            /* Dua kolom: gambar dan info */
            gap: 30px;
        }

        /* Update Product Gallery */
        .product-gallery {
            position: relative;
        }

        .main-product-image {
            border-radius: var(--border-radius);
            overflow: hidden;
            margin-bottom: 20px;
            transition: var(--transition);
            background-color: #f9f9f9;
        }

        .main-product-image:hover {
            box-shadow: var(--box-shadow);
        }

        .main-product-image img {
            width: 100%;
            height: auto;
            aspect-ratio: 1 / 1;
            object-fit: contain;
            /* Ubah ke contain untuk tampilan lebih baik */
            transition: transform 0.3s ease;
            cursor: zoom-in;
        }

        .main-product-image:hover img {
            transform: scale(1.02);
        }

        .product-thumbnails {
            display: flex;
            gap: 12px;
            padding-bottom: 8px;
            /* Untuk scrollbar */
            scrollbar-width: thin;
            scrollbar-color: var(--border-color) transparent;
        }

        .product-thumbnails::-webkit-scrollbar {
            height: 4px;
        }

        .product-thumbnails::-webkit-scrollbar-thumb {
            background-color: var(--border-color);
            border-radius: 2px;
        }

        .thumbnail-item {
            width: 80px;
            height: 80px;
            min-width: 80px;
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            overflow: hidden;
            cursor: pointer;
            transition: var(--transition);
            background-color: #f9f9f9;
        }

        .thumbnail-item img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            transition: var(--transition);
        }

        .thumbnail-item.active,
        .thumbnail-item:hover {
            border-color: var(--primary-color);
            transform: translateY(-2px);
        }

        /* Update Product Info */
        .product-info {
            padding: 0 0 0 20px;
        }

        .product-title-detail {
            font-size: 2rem;
            font-weight: 800;
            /* Lebih tebal */
            margin-bottom: 12px;
            color: var(--text-color);
            line-height: 1.2;
        }

        .product-rating-detail {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
            font-size: 0.95rem;
            color: lawngreen;
        }

        .product-rating-detail i {
            margin-right: 3px;
            font-size: 1.1rem;
        }

        .product-rating-detail span {
            margin-left: 8px;
            color: var(--text-light-color);
            font-weight: 500;
        }

        .product-price-detail {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .product-price-detail .old-price-detail {
            font-size: 1.2rem;
            color: var(--text-light-color);
            text-decoration: line-through;
            margin-left: 12px;
            font-weight: 500;
        }

        .product-short-description {
            font-size: 1rem;
            color: var(--text-light-color);
            margin-bottom: 24px;
            line-height: 1.7;
            padding-bottom: 16px;
            border-bottom: 1px solid var(--border-color);
        }

        /* Update Product Options */
        .option-group {
            margin-bottom: 24px;
        }

        .option-label {
            display: block;
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 0.95rem;
            color: var(--text-color);
        }

        .size-options,
        .color-options-detail {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .size-option {
            padding: 8px 18px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: var(--transition);
            background-color: var(--background-color);
            font-weight: 500;
        }

        .size-option:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
        }

        .size-option.active {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        .color-option-detail {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 2px solid transparent;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
        }

        .color-option-detail::after {
            content: '';
            position: absolute;
            top: -4px;
            left: -4px;
            right: -4px;
            bottom: -4px;
            border-radius: 50%;
            border: 1px solid transparent;
            transition: var(--transition);
        }

        .color-option-detail:hover::after,
        .color-option-detail.active::after {
            border-color: var(--primary-color);
        }

        .color-option-detail.active {
            transform: scale(1.1);
        }

        /* Update Quantity  */
        .quantity-selector {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .quantity-input-group {
            display: flex;
            align-items: center;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            margin-left: 10px;
            overflow: hidden;
        }

        .quantity-input-group button {
            background-color: var(--light-gray-color);
            border: none;
            color: var(--text-color);
            padding: 10px 15px;
            cursor: pointer;
            font-size: 1rem;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quantity-input-group button:hover {
            background-color: #e9ecef;
            color: var(--primary-color);
        }

        .quantity-input-group input[type="number"] {
            width: 50px;
            text-align: center;
            border: none;
            padding: 10px 0;
            font-size: 1rem;
            font-weight: 600;
            border-left: 1px solid var(--border-color);
            border-right: 1px solid var(--border-color);
        }

        /* Update Product Actions */
        .product-actions-detail {
            display: flex;
            gap: 14px;
            margin-bottom: 25px;
            align-items: center;
            justify-content: flex-start;
        }

        .product-actions-detail .btn-cart-icon {
            background: #fff;
            border: 1.5px solid var(--primary-color);
            color: var(--primary-color);
            border-radius: 50%;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            transition: background 0.2s, color 0.2s, border 0.2s, box-shadow 0.2s;
            box-shadow: 0 1px 8px rgba(1, 24, 216, 0.08);
            padding: 0;
        }

        .product-actions-detail .btn-cart-icon:hover,
        .product-actions-detail .btn-cart-icon:focus {
            background: var(--primary-color);
            color: #fff;
            border-color: var(--primary-color);
            box-shadow: 0 2px 12px rgba(1, 24, 216, 0.15);
        }

        .product-actions-detail .btn-checkout-long {
            flex: 1 1 auto;
            background: var(--primary-color);
            color: #fff;
            border: none;
            border-radius: 24px;
            padding: 14px 0;
            font-weight: 700;
            text-align: center;
            font-size: 1rem;
            text-decoration: none;
            transition: background 0.2s, color 0.2s, border 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 120px;
            max-width: 100%;
            box-shadow: 0 1px 8px rgba(1, 24, 216, 0.08);
            letter-spacing: 0.5px;
        }

        .product-actions-detail .btn-checkout-long:hover,
        .product-actions-detail .btn-checkout-long:focus {
            background: #fff;
            color: var(--primary-color);
            border: 1.5px solid var(--primary-color);
        }

        .product-actions-detail .btn-wishlist-circle {
            background: #fff;
            border: 1.5px solid var(--primary-color);
            color: var(--primary-color);
            border-radius: 50%;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            transition: background 0.2s, color 0.2s, border 0.2s, box-shadow 0.2s;
            box-shadow: 0 1px 8px rgba(1, 24, 216, 0.08);
            padding: 0;
        }

        .product-actions-detail .btn-wishlist-circle:hover,
        .product-actions-detail .btn-wishlist-circle:focus {
            background: var(--primary-color);
            color: #fff;
            border-color: var(--primary-color);
            box-shadow: 0 2px 12px rgba(1, 24, 216, 0.15);
        }

        @media (max-width: 767px) {
            .product-actions-detail {
                flex-direction: column;
                gap: 10px;
                align-items: stretch;
            }

            .product-actions-detail .btn-checkout-long {
                width: 100%;
                border-radius: 14px;
                min-width: unset;
            }

            .product-actions-detail .btn-cart-icon,
            .product-actions-detail .btn-wishlist-circle {
                width: 44px;
                height: 44px;
                margin: 0 auto;
            }
        }

        @media (max-width: 480px) {
            .product-actions-detail .btn-checkout-long {
                font-size: 0.95rem;
                padding: 12px 0;
            }

            .product-actions-detail .btn-cart-icon,
            .product-actions-detail .btn-wishlist-circle {
                width: 38px;
                height: 38px;
                font-size: 1.1rem;
            }
        }

        /* Update Product Tabs */
        .product-tabs {
            margin-top: 50px;
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            background-color: var(--background-color);
            overflow: hidden;
        }

        .nav-tabs {
            border-bottom: 1px solid var(--border-color);
            display: flex;
            background-color: var(--light-gray-color);
        }

        .nav-tabs .nav-link {
            border: none;
            border-bottom: 3px solid transparent;
            padding: 16px 24px;
            font-weight: 600;
            color: var(--text-light-color);
            transition: var(--transition);
            font-size: 0.95rem;
            position: relative;
        }

        .nav-tabs .nav-link:hover {
            color: var(--text-color);
            background-color: rgba(255, 255, 255, 0.7);
        }

        .nav-tabs .nav-link.active {
            color: var(--primary-color);
            border-bottom-color: var(--primary-color);
            background-color: var(--background-color);
        }

        .tab-content {
            padding: 30px;
        }

        .tab-pane h5 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--text-color);
        }

        .tab-pane p {
            font-size: 1rem;
            line-height: 1.8;
            margin-bottom: 20px;
            color: var(--text-light-color);
        }

        .tab-pane ul {
            list-style: none;
            padding-left: 0;
            margin-bottom: 20px;
        }

        .tab-pane ul li {
            margin-bottom: 10px;
            position: relative;
            padding-left: 24px;
            color: var(--text-light-color);
            line-height: 1.6;
        }

        .tab-pane ul li::before {
            content: '';
            position: absolute;
            left: 8px;
            top: 10px;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background-color: var(--primary-color);
        }

        .tab-pane table {
            width: 100%;
            border-collapse: collapse;
        }

        .tab-pane table th,
        .tab-pane table td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid var(--border-color);
        }

        .tab-pane table th {
            font-weight: 600;
            color: var(--text-color);
            width: 30%;
        }

        /* Update Related Products */
        .related-products-section {
            padding: 60px 0;
            background-color: var(--light-gray-color);
        }

        .related-products-section h3 {
            font-size: 1.8rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 40px;
            color: var(--text-color);
            position: relative;
            padding-bottom: 15px;
        }

        .related-products-section h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--primary-color);
        }

        .related-products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 25px;
        }

        .product-card {
            background-color: var(--background-color);
            border-radius: var(--border-radius);
            overflow: hidden;
            transition: var(--transition);
            box-shadow: var(--box-shadow);
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .product-image {
            height: 220px;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #f9f9f9;
            position: relative;
            overflow: hidden;
        }

        .product-content {
            padding: 18px;
        }

        .product-title {
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--text-color);
        }

        .product-title a {
            color: inherit;
            transition: var(--transition);
        }

        .product-title a:hover {
            color: var(--primary-color);
        }

        .product-price {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary-color);
        }


        /* Responsive Updates */
        @media (max-width: 991px) {
            .product-details-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .product-info {
                padding: 0;
            }

            .product-title-detail {
                font-size: 1.8rem;
            }

            .product-price-detail {
                font-size: 1.6rem;
            }

            .related-products-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 767px) {
            .product-title-detail {
                font-size: 1.6rem;
            }

            .product-price-detail {
                font-size: 1.4rem;
            }

            .thumbnail-item {
                width: 70px;
                height: 70px;
            }

            .product-actions-detail {
                flex-direction: column;
            }

            .product-actions-detail .btn,
            .product-actions-detail .btn-checkout-detail,
            .product-actions-detail .btn-wishlist-circle {
                width: 100%;
                border-radius: 12px;
            }

            .product-actions-detail .btn-wishlist-circle {
                max-width: 52px;
                margin: 0 auto;
                border-radius: 50%;
            }

            .related-products-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .tab-content {
                padding: 20px;
            }

            .nav-tabs .nav-link {
                padding: 12px 15px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            .product-title-detail {
                font-size: 1.4rem;
            }

            .thumbnail-item {
                width: 60px;
                height: 60px;
            }

            .size-option {
                padding: 8px 12px;
            }

            .related-products-grid {
                grid-template-columns: 1fr;
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
                    <li class="active"><a href="shop2">Shop</a></li> <!-- Link 'Shop' aktif -->
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
                        <span class="cart-count-badge">3</span> <!-- Contoh -->
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
                    <span id="breadcrumbProductName">Product Name</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details Section -->
    <section class="product-details-section">
        <div class="container">
            <div class="product-details-grid">
                <div class="product-gallery">
                    <div class="main-product-image">
                        <img src="img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - BLACK - FRONT.png"
                            alt="Product Main Image" id="mainProductImg">
                    </div>
                    <div class="product-thumbnails">
                        <div class="thumbnail-item active">
                            <img src="img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - BLACK - FRONT.png"
                                alt="Thumbnail 1">
                        </div>
                        <div class="thumbnail-item">
                            <img src="img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - BLACK - BACK.png"
                                alt="Thumbnail 2">
                        </div>
                        <div class="thumbnail-item">
                            <img src="img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - WHITE - FRONT.png"
                                alt="Thumbnail 3">
                        </div>
                    </div>
                </div>

                <div class="product-info">
                    <h1 class="product-title-detail" id="productName">Boxy Fit Tee [WORKAHOLIC]</h1>
                    <div class="product-rating-detail" id="productRating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>(4 Reviews)</span>
                    </div>
                    <div class="product-price-detail" id="productPrice">
                        Rp199.000
                    </div>
                    <p class="product-short-description" id="productShortDescription">
                        Kaos Boxy Fit dengan desain "WORKAHOLIC" yang nyaman dan stylish untuk kegiatan sehari-hari.
                        Terbuat dari bahan katun berkualitas tinggi.
                    </p>

                    <div class="product-options">
                        <div class="option-group">
                            <label class="option-label" for="colorOptions">Color:</label>
                            <div class="color-options-detail" id="colorOptions">
                                <span class="color-option-detail active" style="background-color: #000000;"
                                    data-color="Black" title="Black"></span>
                                <span class="color-option-detail"
                                    style="background-color: #ffffff; border: 1px solid #ccc;" data-color="White"
                                    title="White"></span>
                                <span class="color-option-detail" style="background-color: #003b87;" data-color="Blue"
                                    title="Blue"></span>
                            </div>
                        </div>
                        <div class="option-group">
                            <label class="option-label" for="sizeOptions">Size:</label>
                            <div class="size-options" id="sizeOptions">
                                <span class="size-option">S</span>
                                <span class="size-option active">M</span>
                                <span class="size-option">L</span>
                                <span class="size-option">XL</span>
                            </div>
                        </div>
                    </div>

                    <div class="quantity-selector">
                        <label class="option-label" for="quantity">Quantity:</label>
                        <div class="quantity-input-group">
                            <button type="button" class="quantity-minus" aria-label="Decrease quantity">-</button>
                            <input type="number" id="quantity" name="quantity" value="1" min="1"
                                aria-label="Product quantity">
                            <button type="button" class="quantity-plus" aria-label="Increase quantity">+</button>
                        </div>
                    </div>

                    <div class="product-actions-detail">
                        <button type="button" class="btn btn-cart-icon" aria-label="Add to cart">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                        <a href="checkout" class="btn btn-checkout-long">
                            Checkout
                        </a>
                        <button type="button" class="btn btn-wishlist-circle" aria-label="Add to wishlist">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>

                    <div class="product-meta">
                        <span>SKU: <strong id="productSKU">DM-TEE-WK001</strong></span>
                        <span>Category: <a href="shop2?category=boxy-fit-tee" id="productCategoryLink">Boxy Fit
                                Tee</a></span>
                    </div>
                </div>
            </div>

            <div class="product-tabs">
                <ul class="nav nav-tabs" id="productTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                            data-bs-target="#description" type="button" role="tab" aria-controls="description"
                            aria-selected="true">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="specification-tab" data-bs-toggle="tab"
                            data-bs-target="#specification" type="button" role="tab" aria-controls="specification"
                            aria-selected="false">Specification</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                            type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews (4)</button>
                    </li>
                </ul>
                <div class="tab-content" id="productTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel"
                        aria-labelledby="description-tab">
                        <h5>Product Description</h5>
                        <p id="fullProductDescription">
                            Rasakan kenyamanan maksimal dengan Boxy Fit Tee [WORKAHOLIC] kami. Dibuat dari 100% katun
                            premium yang lembut di kulit dan breathable, kaos ini dirancang untuk menemani aktivitas
                            Anda sepanjang hari. Potongan boxy fit memberikan tampilan modern dan kasual, cocok
                            dipadukan dengan berbagai bawahan. Sablon berkualitas tinggi dengan desain "WORKAHOLIC" yang
                            unik menambah sentuhan personal pada gaya Anda.
                        </p>
                        <p>Fitur Utama:</p>
                        <ul>
                            <li>Bahan: 100% Katun Premium Combed 24s</li>
                            <li>Potongan: Boxy Fit (oversized, bahu turun)</li>
                            <li>Sablon: Plastisol Ink, tahan lama dan tidak mudah pecah</li>
                            <li>Jahitan: Rapi dan kuat</li>
                            <li>Cocok untuk: Pria & Wanita (Unisex)</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                        <h5>Product Specification</h5>
                        <table class="table table-sm table-bordered" style="font-size: 0.9rem;">
                            <tbody>
                                <tr>
                                    <th scope="row" style="width: 30%;">Material</th>
                                    <td>100% Premium Cotton Combed 24s</td>
                                </tr>
                                <tr>
                                    <th scope="row">Fit Type</th>
                                    <td>Boxy Fit / Oversized</td>
                                </tr>
                                <tr>
                                    <th scope="row">Available Sizes</th>
                                    <td>S, M, L, XL</td>
                                </tr>
                                <tr>
                                    <th scope="row">Print Type</th>
                                    <td>Plastisol Ink Screen Printing</td>
                                </tr>
                                <tr>
                                    <th scope="row">Care Instructions</th>
                                    <td>Machine wash cold, tumble dry low. Do not bleach. Iron on reverse.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <h5>Customer Reviews</h5>
                        <p>Belum ada review untuk produk ini. Jadilah yang pertama memberikan review!</p>
                        <!-- Tempat untuk menampilkan review dan form review -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products Section -->
    <section class="related-products-section">
        <div class="container">
            <h3>You Might Also Like</h3>
            <div class="related-products-grid">
                <!-- Contoh Related Product Card (gunakan struktur .product-card dari shop2.html) -->
                <div class="product-card mix hoodie" data-price="399000">
                    <div class="product-image set-bg" data-setbg="img/product/FIX/hoodie/MATA/MATA - BLACK - FRONT.png">
                    </div>
                    <div class="product-content">
                        <h6 class="product-title"><a href="#">Hoodie [MATA]</a></h6>
                        <h5 class="product-price">Rp399.000</h5>
                    </div>
                </div>
                <div class="product-card mix unfinished-crewneck" data-price="249000">
                    <div class="product-image set-bg"
                        data-setbg="img/product/FIX/crewneck/minimalism/no bg/UNFINISHED CREWNECK BACK.png"></div>
                    <div class="product-content">
                        <h6 class="product-title"><a href="#">Crewneck [MINIMALISM]</a></h6>
                        <h5 class="product-price">Rp249.000</h5>
                    </div>
                </div>
                <!-- Tambahkan produk terkait lainnya -->
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

    <script src="https://cdn.jsdelivr.net/npm/basiclightbox@5.0.4/dist/basicLightbox.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // JavaScript untuk Header (Disalin dari shop2.html)
            const profileIconContainer = document.getElementById('profileIconContainer');
            const profileDropdownMenu = document.getElementById('profileDropdownMenu');

            if (profileIconContainer && profileDropdownMenu) {
                profileIconContainer.addEventListener('click', function (event) {
                    event.stopPropagation();
                    profileDropdownMenu.classList.toggle('active');
                });
                document.addEventListener('click', function (event) {
                    if (profileIconContainer && !profileIconContainer.contains(event.target) && profileDropdownMenu && !profileDropdownMenu.contains(event.target)) {
                        profileDropdownMenu.classList.remove('active');
                    }
                });
            }

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

            const currentYearSpan = document.getElementById('currentYear');
            if (currentYearSpan) {
                currentYearSpan.textContent = new Date().getFullYear();
            }

            const searchForms = document.querySelectorAll('.header-search');
            searchForms.forEach(form => {
                form.addEventListener('submit', function (event) {
                    event.preventDefault();
                    const query = form.querySelector('input[type="search"]').value;
                    if (query.trim() !== '') {
                        window.location.href = 'shop2?search=' + encodeURIComponent(query);
                    }
                });
            });

            // Product Details Page Specific JavaScript
            const mainProductImg = document.getElementById('mainProductImg');
            const thumbnails = document.querySelectorAll('.thumbnail-item img');
            const colorOptions = document.querySelectorAll('.color-option-detail');
            const sizeOptions = document.querySelectorAll('.size-option');
            const quantityInput = document.getElementById('quantity');
            const quantityMinus = document.querySelector('.quantity-minus');
            const quantityPlus = document.querySelector('.quantity-plus');

            // Thumbnail click to change main image
            thumbnails.forEach(thumb => {
                thumb.addEventListener('click', function () {
                    if (mainProductImg) mainProductImg.src = this.src;
                    thumbnails.forEach(t => t.parentElement.classList.remove('active'));
                    this.parentElement.classList.add('active');
                });
            });

            // Main image click for lightbox (using basicLightbox)
            if (mainProductImg && typeof basicLightbox !== 'undefined') {
                mainProductImg.addEventListener('click', () => {
                    basicLightbox.create(`
                        <img src="${mainProductImg.src}" style="max-width: 90vw; max-height: 90vh;">
                    `).show();
                });
            }


            // Color option selection
            colorOptions.forEach(option => {
                option.addEventListener('click', function () {
                    colorOptions.forEach(o => o.classList.remove('active'));
                    this.classList.add('active');
                    console.log('Selected color:', this.dataset.color);
                    // Anda bisa menambahkan logika untuk mengubah gambar utama berdasarkan warna di sini
                });
            });

            // Size option selection
            sizeOptions.forEach(option => {
                option.addEventListener('click', function () {
                    sizeOptions.forEach(o => o.classList.remove('active'));
                    this.classList.add('active');
                    console.log('Selected size:', this.textContent);
                });
            });

            // Quantity selector
            if (quantityMinus && quantityPlus && quantityInput) {
                quantityMinus.addEventListener('click', function () {
                    let currentValue = parseInt(quantityInput.value);
                    if (currentValue > 1) {
                        quantityInput.value = currentValue - 1;
                    }
                });
                quantityPlus.addEventListener('click', function () {
                    let currentValue = parseInt(quantityInput.value);
                    quantityInput.value = currentValue + 1;
                });
            }

            // Add to Cart button
            const addToCartDetailBtn = document.querySelector('.add-to-cart-detail-btn');
            if (addToCartDetailBtn) {
                addToCartDetailBtn.addEventListener('click', function () {
                    const selectedColorEl = document.querySelector('.color-option-detail.active');
                    const selectedSizeEl = document.querySelector('.size-option.active');
                    const quantity = quantityInput ? quantityInput.value : 1;
                    const productName = document.getElementById('productName') ? document.getElementById('productName').textContent : 'Product';

                    let message = `${productName} (Qty: ${quantity}`;
                    if (selectedColorEl) message += `, Color: ${selectedColorEl.dataset.color}`;
                    if (selectedSizeEl) message += `, Size: ${selectedSizeEl.textContent}`;
                    message += `) added to cart!`;
                    alert(message);
                    // Implementasi logika add to cart di sini
                });
            }

            // Function untuk load product data
            function loadProductDetails(productId) {
                console.log('Loading details for product ID:', productId);
                // Contoh data statis, ganti dengan fetch API atau data dinamis
                const products = {
                    "workaholic-tee": {
                        name: "Boxy Fit Tee [WORKAHOLIC]",
                        price: "Rp199.000",
                        oldPrice: null,
                        ratingHTML: '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span>(4 Reviews)</span>',
                        shortDescription: "Kaos Boxy Fit dengan desain \"WORKAHOLIC\" yang nyaman dan stylish untuk kegiatan sehari-hari. Terbuat dari bahan katun berkualitas tinggi.",
                        fullDescription: "Rasakan kenyamanan maksimal dengan Boxy Fit Tee [WORKAHOLIC] kami. Dibuat dari 100% katun premium yang lembut di kulit dan breathable, kaos ini dirancang untuk menemani aktivitas Anda sepanjang hari. Potongan boxy fit memberikan tampilan modern dan kasual, cocok dipadukan dengan berbagai bawahan. Sablon berkualitas tinggi dengan desain \"WORKAHOLIC\" yang unik menambah sentuhan personal pada gaya Anda.<br><br>Fitur Utama:<ul><li>Bahan: 100% Katun Premium Combed 24s</li><li>Potongan: Boxy Fit (oversized, bahu turun)</li><li>Sablon: Plastisol Ink, tahan lama dan tidak mudah pecah</li><li>Jahitan: Rapi dan kuat</li><li>Cocok untuk: Pria & Wanita (Unisex)</li></ul>",
                        specification: { "Material": "100% Premium Cotton Combed 24s", "Fit Type": "Boxy Fit / Oversized", "Available Sizes": "S, M, L, XL", "Print Type": "Plastisol Ink Screen Printing", "Care Instructions": "Machine wash cold, tumble dry low. Do not bleach. Iron on reverse." },
                        images: [
                            "img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - BLACK - FRONT.png",
                            "img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - BLACK - BACK.png",
                            "img/product/FIX/boxy fit tee/WORKAHOLIC/WORKAHOLIC - WHITE - FRONT.png"
                        ],
                        colors: [{ name: "Black", code: "#000000" }, { name: "White", code: "#ffffff", border: "#ccc" }, { name: "Blue", code: "#003b87" }],
                        sizes: ["S", "M", "L", "XL"],
                        sku: "DM-TEE-WK001",
                        category: { name: "Boxy Fit Tee", link: "shop2?category=boxy-fit-tee" }
                    },
                    "mata-hoodie": {
                        name: "Hoodie [MATA]",
                        price: "Rp399.000",
                        oldPrice: "Rp450.000",
                        ratingHTML: '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><span>(12 Reviews)</span>',
                        shortDescription: "Hoodie eksklusif dengan desain [MATA] yang ikonik. Hangat, nyaman, dan penuh gaya.",
                        fullDescription: "Hoodie [MATA] adalah pilihan sempurna untuk Anda yang mencari kenyamanan dan gaya. Terbuat dari bahan fleece tebal yang lembut, hoodie ini akan menjaga Anda tetap hangat di cuaca dingin. Desain [MATA] yang unik dicetak dengan teknik DTF berkualitas tinggi, menghasilkan detail yang tajam dan warna yang cerah. Dilengkapi dengan kantong kanguru dan tali hoodie yang dapat disesuaikan.<br><br>Fitur Utama:<ul><li>Bahan: Cotton Fleece Tebal</li><li>Desain: Print DTF Berkualitas Tinggi</li><li>Fitur: Kantong Kanguru, Tali Hoodie</li><li>Cocok untuk: Sehari-hari, Aktivitas Outdoor Ringan</li></ul>",
                        specification: { "Material": "Cotton Fleece", "Print Type": "DTF (Direct to Film)", "Features": "Kangaroo Pocket, Adjustable Hood", "Available Sizes": "M, L, XL, XXL" },
                        images: [
                            "img/product/FIX/hoodie/MATA/MATA - BLACK - FRONT.png",
                            "img/product/FIX/hoodie/MATA/MATA - BLACK - BACK.png",
                            "img/product/FIX/hoodie/MATA/MATA - WHITE - FRONT.png"
                        ],
                        colors: [{ name: "Black", code: "#000000" }, { name: "White", code: "#ffffff", border: "#ccc" }],
                        sizes: ["M", "L", "XL", "XXL"],
                        sku: "DM-HD-MATA01",
                        category: { name: "Hoodie", link: "shop2?category=hoodie" }
                    }
                    // Tambahkan data produk lain di sini
                };

                const productData = products[productId];

                if (productData) {
                    document.getElementById('breadcrumbProductName').textContent = productData.name;
                    if (mainProductImg) mainProductImg.src = productData.images[0];
                    if (mainProductImg) mainProductImg.alt = productData.name;

                    const thumbnailsContainer = document.querySelector('.product-thumbnails');
                    if (thumbnailsContainer) {
                        thumbnailsContainer.innerHTML = ''; // Clear existing
                        productData.images.forEach((imgSrc, index) => {
                            const thumbItem = document.createElement('div');
                            thumbItem.className = `thumbnail-item ${index === 0 ? 'active' : ''}`;
                            const thumbImg = document.createElement('img');
                            thumbImg.src = imgSrc;
                            thumbImg.alt = `Thumbnail ${index + 1}`;
                            thumbImg.addEventListener('click', function () {
                                if (mainProductImg) mainProductImg.src = this.src;
                                document.querySelectorAll('.thumbnail-item').forEach(t => t.classList.remove('active'));
                                this.parentElement.classList.add('active');
                            });
                            thumbItem.appendChild(thumbImg);
                            thumbnailsContainer.appendChild(thumbItem);
                        });
                    }

                    document.getElementById('productName').textContent = productData.name;
                    document.getElementById('productRating').innerHTML = productData.ratingHTML;
                    let priceHTML = productData.price;
                    if (productData.oldPrice) {
                        priceHTML += ` <span class="old-price-detail">${productData.oldPrice}</span>`;
                    }
                    document.getElementById('productPrice').innerHTML = priceHTML;
                    document.getElementById('productShortDescription').textContent = productData.shortDescription;
                    document.getElementById('fullProductDescription').innerHTML = productData.fullDescription; // Use innerHTML if description contains HTML
                    document.getElementById('productSKU').textContent = productData.sku;
                    const categoryLink = document.getElementById('productCategoryLink');
                    categoryLink.textContent = productData.category.name;
                    categoryLink.href = productData.category.link;

                    const colorOptionsContainer = document.getElementById('colorOptions');
                    if (colorOptionsContainer && productData.colors) {
                        colorOptionsContainer.innerHTML = '';
                        productData.colors.forEach((color, index) => {
                            const colorSpan = document.createElement('span');
                            colorSpan.className = `color-option-detail ${index === 0 ? 'active' : ''}`;
                            colorSpan.style.backgroundColor = color.code;
                            if (color.border) colorSpan.style.borderColor = color.border;
                            colorSpan.dataset.color = color.name;
                            colorSpan.title = color.name;
                            colorSpan.addEventListener('click', function () {
                                colorOptionsContainer.querySelectorAll('.color-option-detail').forEach(o => o.classList.remove('active'));
                                this.classList.add('active');
                            });
                            colorOptionsContainer.appendChild(colorSpan);
                        });
                    }

                    const sizeOptionsContainer = document.getElementById('sizeOptions');
                    if (sizeOptionsContainer && productData.sizes) {
                        sizeOptionsContainer.innerHTML = '';
                        productData.sizes.forEach((size, index) => {
                            const sizeSpan = document.createElement('span');
                            sizeSpan.className = `size-option ${index === 0 ? 'active' : ''}`;
                            sizeSpan.textContent = size;
                            sizeSpan.addEventListener('click', function () {
                                sizeOptionsContainer.querySelectorAll('.size-option').forEach(o => o.classList.remove('active'));
                                this.classList.add('active');
                            });
                            sizeOptionsContainer.appendChild(sizeSpan);
                        });
                    }

                    const specTableBody = document.querySelector('#specification table tbody');
                    if (specTableBody && productData.specification) {
                        specTableBody.innerHTML = '';
                        for (const key in productData.specification) {
                            const row = specTableBody.insertRow();
                            const cell1 = row.insertCell();
                            const cell2 = row.insertCell();
                            cell1.outerHTML = `<th scope="row" style="width: 30%;">${key}</th>`;
                            cell2.textContent = productData.specification[key];
                        }
                    }

                } else {
                    console.error('Product data not found for ID:', productId);
                    // Tampilkan pesan error atau redirect
                    document.querySelector('.product-details-grid').innerHTML = '<p style="grid-column: 1 / -1; text-align: center; padding: 40px;">Product not found.</p>';
                }
            }

            // Ambil product ID dari URL (misalnya, product-details.html?product=workaholic-tee)
            const urlParams = new URLSearchParams(window.location.search);
            const productIdFromUrl = urlParams.get('product');

            if (productIdFromUrl) {
                loadProductDetails(productIdFromUrl);
            } else {
                // Jika tidak ada ID produk, muat produk default atau tampilkan error
                console.warn('No product ID found in URL. Loading default or showing error.');
                loadProductDetails("workaholic-tee"); // Muat produk default sebagai contoh
            }


            // Set background untuk related products
            document.querySelectorAll('.related-products-grid .set-bg').forEach(function (element) {
                const bg = element.getAttribute('data-setbg');
                if (bg) {
                    element.style.backgroundImage = `url('${bg}')`;
                }
            });


            if (mainProductImg && typeof basicLightbox !== 'undefined') {
                mainProductImg.addEventListener('click', () => {
                    const instance = basicLightbox.create(`
            <div style="padding: 20px; display: flex; justify-content: center; align-items: center; height: 100%;">
                <img src="${mainProductImg.src}" style="max-width: 90%; max-height: 90%; object-fit: contain;">
            </div>
        `, {
                        onShow: () => {
                            document.body.style.overflow = 'hidden';
                        },
                        onClose: () => {
                            document.body.style.overflow = '';
                        }
                    });
                    instance.show();
                });
            }


            thumbnails.forEach(thumb => {
                thumb.addEventListener('click', function (e) {
                    e.preventDefault();
                    if (mainProductImg) {
                        mainProductImg.src = this.src;
                        mainProductImg.alt = this.alt;

                        mainProductImg.style.opacity = '0.5';
                        setTimeout(() => {
                            mainProductImg.style.opacity = '1';
                        }, 150);
                    }


                    document.querySelectorAll('.thumbnail-item').forEach(item => {
                        item.classList.remove('active');
                    });
                    this.parentElement.classList.add('active');

                    this.parentElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'nearest',
                        inline: 'center'
                    });
                });
            });


            colorOptions.forEach(option => {
                option.addEventListener('click', function () {
                    colorOptions.forEach(o => o.classList.remove('active'));
                    this.classList.add('active');


                    const colorName = this.dataset.color.toLowerCase();
                    const newImageSrc = mainProductImg.src.replace(/(BLACK|WHITE|BLUE)/i, colorName.toUpperCase())
                    fetch(newImageSrc, { method: 'HEAD' })
                        .then(res => {
                            if (res.ok) {
                                mainProductImg.src = newImageSrc;
                                mainProductImg.style.opacity = '0.5';
                                setTimeout(() => {
                                    mainProductImg.style.opacity = '1';
                                }, 150);
                            }
                        })
                        .catch(() => {
                            console.log('Image not found for selected color');
                        });
                });
            });

            if (addToCartDetailBtn) {
                addToCartDetailBtn.addEventListener('click', function () {

                    this.classList.add('btn-pulse');


                    setTimeout(() => {
                        this.classList.remove('btn-pulse');
                    }, 300);

                });
            }

        });
    </script>
</body>

</html>