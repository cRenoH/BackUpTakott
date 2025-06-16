<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DariMata Studio - Wishlist Anda">
    <meta name="keywords" content="DariMata, Fashion, E-commerce, Wishlist, Daftar Keinginan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wishlist - DariMata Studio</title>

    <!-- Google Font: Nunito Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">



    <style>
        /* Wishlist Page Styles */
        .wishlist-section {
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

        .wishlist-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .wishlist-item {
            background-color: var(--background-color);
            border-radius: 8px;
            box-shadow: var(--box-shadow);
            overflow: hidden;
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }

        .wishlist-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        .wishlist-item-image {
            height: 280px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .wishlist-item-remove {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            color: var(--secondary-color);
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            font-size: 0.9rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .wishlist-item-remove:hover {
            background-color: var(--secondary-color);
            color: white;
        }

        .wishlist-item-content {
            padding: 15px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .wishlist-item-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-color);
            margin-bottom: 8px;
            line-height: 1.4;
        }

        .wishlist-item-title a {
            color: inherit;
        }

        .wishlist-item-title a:hover {
            color: var(--primary-color);
        }

        .wishlist-item-price {
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 15px;
            margin-top: auto;
            /* Dorong harga dan tombol ke bawah */
        }

        .wishlist-item-actions .btn {
            width: 100%;
            font-size: 0.85rem;
            padding: 10px 15px;
        }

        .empty-wishlist-message {
            text-align: center;
            padding: 40px 20px;
            background-color: var(--background-color);
            border-radius: 8px;
            box-shadow: var(--box-shadow);
        }

        .empty-wishlist-message i {
            font-size: 3rem;
            color: var(--text-light-color);
            margin-bottom: 20px;
        }

        .empty-wishlist-message h4 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .empty-wishlist-message p {
            color: var(--text-light-color);
            margin-bottom: 20px;
        }

        /* Responsive Wishlist */
        @media (max-width: 767px) {
            .wishlist-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }

            .wishlist-item-image {
                height: 220px;
            }
        }

        @media (max-width: 575px) {
            .wishlist-grid {
                grid-template-columns: 1fr;
                /* Satu kolom di mobile kecil */
            }

            .wishlist-item-image {
                height: 250px;
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
                <div class="action-item wishlist-icon active"> <!-- Tambahkan class active di sini -->
                    <a href="wishlist" style="color: inherit; text-decoration: none;">
                        <i class="fas fa-heart"></i>
                    </a>
                </div>
                <div class="action-item cart-icon">
                    <a href="cart" style="color: inherit; text-decoration: none;">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="cart-count-badge" id="headerCartCountWishlist">0</span>
                        <!-- ID unik untuk wishlist page -->
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
                    <span style="color: var(--text-color); font-weight: 500;">Wishlist</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Wishlist Section -->
    <section class="wishlist-section">
        <div class="container">
            <div class="section-title">
                <h2>Your Wishlist</h2>
            </div>

            <div id="wishlistGridContent" class="wishlist-grid">
                <!-- Konten wishlist akan di-generate oleh JavaScript -->
                <!-- Contoh jika wishlist kosong: -->
                <div class="empty-wishlist-message" style="grid-column: 1 / -1;">
                    <i class="far fa-heart"></i>
                    <h4>Your wishlist is empty.</h4>
                    <p>Add some of your favorite products to your wishlist!</p>
                    <a href="shop2" class="btn btn-primary">Explore Products</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (Sama seperti landing.html) -->
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

            // Wishlist Page Specific JavaScript
            const wishlistGridContentEl = document.getElementById('wishlistGridContent');
            const headerCartCountWishlistEl = document.getElementById('headerCartCountWishlist'); // Pastikan ID ini unik jika ada cart count lain
            let wishlistItems = [];
            let shoppingCartForWishlist = []; // Untuk sinkronisasi dengan keranjang

            // Fungsi untuk format mata uang
            function formatCurrency(amount) {
                return 'Rp' + parseInt(amount).toLocaleString('id-ID');
            }

            // Fungsi untuk memuat dan menampilkan wishlist
            function renderWishlist() {
                try {
                    wishlistItems = JSON.parse(localStorage.getItem('wishlist')) || [];
                    shoppingCartForWishlist = JSON.parse(localStorage.getItem('shoppingCart')) || []; // Muat keranjang juga
                } catch (e) {
                    console.error("Error parsing wishlist/cart from localStorage:", e);
                    wishlistItems = [];
                    shoppingCartForWishlist = [];
                }

                if (!wishlistGridContentEl) return;

                if (wishlistItems.length === 0) {
                    wishlistGridContentEl.innerHTML = `
                        <div class="empty-wishlist-message" style="grid-column: 1 / -1;">
                            <i class="far fa-heart"></i>
                            <h4>Your wishlist is empty.</h4>
                            <p>Add some of your favorite products to your wishlist!</p>
                            <a href="shop2" class="btn btn-primary">Explore Products</a>
                        </div>
                    `;
                    updateHeaderCartCountOnWishlist();
                    return;
                }

                let wishlistHTML = '';
                wishlistItems.forEach((item, index) => {
                    wishlistHTML += `
                        <div class="wishlist-item" data-id="${item.id}">
                            <div class="wishlist-item-image" style="background-image: url('${item.image || 'img/placeholder.png'}');">
                                <button class="wishlist-item-remove" data-index="${index}" aria-label="Remove from wishlist"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="wishlist-item-content">
                                <h5 class="wishlist-item-title"><a href="product-details?product=${item.id}">${item.name}</a></h5>
                                <p class="wishlist-item-price">${formatCurrency(item.price)}</p>
                                <div class="wishlist-item-actions">
                                    <button class="btn btn-primary add-to-cart-from-wishlist-btn" data-index="${index}">
                                        <i class="fas fa-cart-plus" style="margin-right: 8px;"></i>Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                });
                wishlistGridContentEl.innerHTML = wishlistHTML;
                attachWishlistEventListeners();
                updateHeaderCartCountOnWishlist();
            }

            // Fungsi untuk update jumlah item di header (dari keranjang)
            function updateHeaderCartCountOnWishlist() {
                let totalItems = 0;
                shoppingCartForWishlist.forEach(item => totalItems += item.quantity);
                if (headerCartCountWishlistEl) headerCartCountWishlistEl.textContent = totalItems;
            }

            // Fungsi untuk menyimpan wishlist ke localStorage
            function saveWishlist() {
                localStorage.setItem('wishlist', JSON.stringify(wishlistItems));
                renderWishlist();
            }

            // Fungsi untuk menyimpan keranjang ke localStorage (dari wishlist)
            function saveCartFromWishlist() {
                localStorage.setItem('shoppingCart', JSON.stringify(shoppingCartForWishlist));
                updateHeaderCartCountOnWishlist(); // Update count di header
            }

            // Event listener untuk tombol di wishlist
            function attachWishlistEventListeners() {
                document.querySelectorAll('.wishlist-item-remove').forEach(button => {
                    button.addEventListener('click', function () {
                        if (confirm('Are you sure you want to remove this item from your wishlist?')) {
                            const index = parseInt(this.dataset.index);
                            wishlistItems.splice(index, 1);
                            saveWishlist();
                        }
                    });
                });

                document.querySelectorAll('.add-to-cart-from-wishlist-btn').forEach(button => {
                    button.addEventListener('click', function () {
                        const index = parseInt(this.dataset.index);
                        const itemToAdd = wishlistItems[index];

                        if (itemToAdd) {
                            // Cek apakah item sudah ada di keranjang
                            const existingCartItemIndex = shoppingCartForWishlist.findIndex(cartItem => cartItem.id === itemToAdd.id);
                            if (existingCartItemIndex > -1) {
                                shoppingCartForWishlist[existingCartItemIndex].quantity++;
                            } else {
                                shoppingCartForWishlist.push({ ...itemToAdd, quantity: 1 });
                            }
                            saveCartFromWishlist();
                            alert(`"${itemToAdd.name}" added to cart!`);
                            // Opsional: Hapus dari wishlist setelah ditambahkan ke keranjang
                            // wishlistItems.splice(index, 1);
                            // saveWishlist();
                        }
                    });
                });
            }

            // Muat wishlist saat halaman dimuat
            renderWishlist();
        });
    </script>
</body>

</html>