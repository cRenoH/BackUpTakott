<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>DariMata Studio - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <link rel="icon" href="img/favicon.png" type="image/png">

    <style>
        /* Login Section */
        .login {
            padding: 80px 0;
            background: var(--light-gray-color);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .login__container {
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }

        .login__wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 160px);
        }

        .login__card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            display: flex;
            max-width: 1000px;
            width: 100%;
            transition: all 0.4s ease;
            position: relative;
        }

        .login__card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
        }

        .login__illustration {
            flex: 1;
            background: linear-gradient(135deg, rgba(1, 24, 216, 0.03), rgba(229, 54, 55, 0.03));
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px;
            position: relative;
            overflow: hidden;
        }

        .login__illustration::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(1, 24, 216, 0.08), rgba(229, 54, 55, 0.08));
        }

        .login__illustration::after {
            content: '';
            position: absolute;
            bottom: -80px;
            left: -30px;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(1, 24, 216, 0.05), rgba(229, 54, 55, 0.05));
        }

        .login__illustration img {
            max-width: 100%;
            height: auto;
            position: relative;
            z-index: 1;
            animation: float 6s ease-in-out infinite;
        }

        .login__content {
            flex: 1;
            padding: 60px;
            position: relative;
        }

        .login__header {
            margin-bottom: 40px;
            text-align: center;
        }

        .login__logo {
            margin-bottom: 20px;
        }

        .login__logo img {
            height: 50px;
        }

        .login__title {
            font-size: 28px;
            font-weight: 800;
            color: var(--text-color);
            margin-bottom: 15px;
            position: relative;
        }

        .login__title::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 4px;
        }

        .login__subtitle {
            color: var(--text-light-color);
            font-size: 16px;
            margin-top: 25px;
        }

        .login__form .form-floating {
            margin-bottom: 20px;
            position: relative;
        }

        .login__form .form-floating label {
            color: var(--text-light-color);
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .login__form .form-control {
            height: 56px;
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 0 20px;
            font-size: 15px;
            color: var(--text-color);
            transition: all 0.3s ease;
            box-shadow: none;
        }

        .login__form .form-floating,
        .login__form .form-control {
            width: 100%;
            max-width: 100%;
            min-width: 320px;
        }

        @media (max-width: 575.98px) {

            .login__form .form-floating,
            .login__form .form-control {
                min-width: 0;
            }
        }

        .login__form .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(1, 24, 216, 0.1);
        }

        .login__form .form-control:focus~label {
            color: var(--primary-color);
            transform: translateY(-10px) scale(0.85);
        }

        .login__form .form-control:not(:placeholder-shown)~label {
            transform: translateY(-10px) scale(0.85);
        }

        .input-group-text {
            background: transparent;
            border-right: none;
        }

        .input-group .form-control {
            border-left: none;
        }

        .input-group .form-control:focus {
            border-left: 1px solid var(--primary-color);
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 35%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--text-light-color);
            z-index: 5;
            transition: all 0.3s ease;
        }

        .password-toggle:hover {
            color: var(--primary-color);
        }

        .login__options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }

        .remember-me {
            display: flex;
            align-items: center;
        }

        .remember-me input {
            margin-right: 8px;
            accent-color: var(--primary-color);
        }

        .forgot-password {
            color: var(--primary-color);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
        }

        .forgot-password::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: all 0.3s ease;
        }

        .forgot-password:hover::after {
            width: 100%;
        }

        .login__btn {
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            font-weight: 700;
            letter-spacing: 0.5px;
            box-shadow: 0 5px 15px rgba(1, 24, 216, 0.2);
            transition: all 0.3s ease;
            border: none;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            margin-bottom: 25px;
        }

        .login__btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(1, 24, 216, 0.3);
        }

        .login__btn:active {
            transform: translateY(0);
        }

        .login__divider {
            position: relative;
            margin: 25px 0;
            text-align: center;
            color: var(--text-light-color);
        }

        .login__divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 1px;
            background: var(--border-color);
            z-index: 1;
        }

        .login__divider span {
            background: #fff;
            padding: 0 15px;
            position: relative;
            z-index: 2;
        }

        .social-login {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .social-login__btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .social-login__btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
        }

        .social-login__btn.google {
            background: #DB4437;
        }

        .social-login__btn.facebook {
            background: #4267B2;
        }

        .social-login__btn.apple {
            background: #000000;
        }

        .login__footer {
            text-align: center;
            margin-top: 30px;
        }

        .login__footer a {
            color: var(--primary-color);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
        }

        .login__footer a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: all 0.3s ease;
        }

        .login__footer a:hover::after {
            width: 100%;
        }

        /* Animation */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login__content {
            animation: fadeIn 0.6s ease;
        }

        /* Signup Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            overflow-y: auto;
            animation: fadeIn 0.3s ease;
        }

        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            max-width: 600px;
            width: 90%;
            position: relative;
            animation: slideDown 0.4s ease;
        }

        .close-modal {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
            color: #999;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .close-modal:hover {
            color: #333;
            transform: rotate(90deg);
        }

        .modal-title {
            font-size: 28px;
            font-weight: 800;
            color: var(--text-color);
            margin-bottom: 15px;
            text-align: center;
            position: relative;
        }

        .modal-title::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 4px;
        }

        .modal-subtitle {
            color: var(--text-light-color);
            font-size: 16px;
            margin: 25px 0 30px;
            text-align: center;
        }

        .signup-form .form-floating {
            margin-bottom: 20px;
            position: relative;
        }

        .signup-form .form-control {
            height: 56px;
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 0 20px;
            font-size: 15px;
            color: var(--text-color);
            transition: all 0.3s ease;
        }

        .signup-form .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(1, 24, 216, 0.1);
        }

        /* Agar form signup sama panjang dengan login */
        .signup-form .form-floating,
        .signup-form .form-control {
            width: 100%;
            max-width: 100%;
            min-width: 320px;
        }

        @media (max-width: 575.98px) {

            .signup-form .form-floating,
            .signup-form .form-control {
                min-width: 0;
            }
        }

        .signup-btn {
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            font-weight: 700;
            letter-spacing: 0.5px;
            box-shadow: 0 5px 15px rgba(1, 24, 216, 0.2);
            transition: all 0.3s ease;
            border: none;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            margin-top: 10px;
        }

        .signup-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(1, 24, 216, 0.3);
        }

        .signup-footer {
            text-align: center;
            margin-top: 25px;
            color: var(--text-light-color);
        }

        .signup-footer a {
            color: var(--primary-color);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .signup-footer a:hover {
            text-decoration: underline;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 991.98px) {
            .login__card {
                flex-direction: column;
                max-width: 600px;
            }

            .login__illustration {
                padding: 40px;
            }

            .login__illustration img {
                max-height: 250px;
            }

            .login__content {
                padding: 40px;
            }

            .modal-content {
                padding: 30px;
            }
        }

        @media (max-width: 767.98px) {
            .login {
                padding: 40px 0;
            }

            .login__title {
                font-size: 24px;
            }

            .login__content {
                padding: 30px;
            }

            .login__illustration {
                display: none;
            }

            .modal-content {
                margin: 20% auto;
                padding: 25px;
            }

            .modal-title {
                font-size: 24px;
            }
        }

        @media (max-width: 575.98px) {
            .login__content {
                padding: 25px;
            }

            .login__title {
                font-size: 22px;
            }

            .login__options {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .login__form .form-control {
                height: 50px;
                padding: 0 15px;
            }

            .modal-content {
                width: 95%;
                padding: 20px;
            }

            .modal-title {
                font-size: 22px;
            }
        }
    </style>
</head>

<body>
    <!-- Login Section -->
    <section class="login">
        <div class="container login__container">
            <div class="login__wrapper">
                <div class="login__card">
                    <div class="login__illustration">
                        <img src="img/logo.png" alt="Login Illustration">
                    </div>
                    <div class="login__content">
                        <div class="login__header">
                            <div class="login__logo">
                                <img src="img/logo2.png" alt="DariMata Studio">
                            </div>
                            <h1 class="login__title">Welcome Back</h1>
                            <p class="login__subtitle">Sign in to access your account and continue your shopping
                                experience</p>
                        </div>

                        <form class="login__form" id="loginForm">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="loginEmail" placeholder="Email Address"
                                    required>
                                <label for="loginEmail"></label>
                                <div class="invalid-feedback">Please enter a valid email address</div>
                            </div>

                            <div class="form-floating">
                                <input type="password" class="form-control" id="loginPassword" placeholder="Password"
                                    required>
                                <label for="loginPassword"></label>
                                <i class="far fa-eye-slash password-toggle" id="togglePassword"></i>
                                <div class="invalid-feedback">Please enter your password</div>
                            </div>

                            <div class="login__options">
                                <div class="remember-me">
                                    <input type="checkbox" id="rememberMe">
                                    <label for="rememberMe">Remember me</label>
                                </div>
                                <a href="#" class="forgot-password">Forgot password?</a>
                            </div>

                            <button type="submit" class="btn login__btn"><a href="./user-profile"><span
                                        class="login-btn-text " style="color: #fff;">Sign
                                        In</span>
                                    <span class="login-btn-loading" style="display: none;">
                                        <i class="fas fa-spinner fa-spin"></i> Signing In...
                                    </span></a>

                            </button>

                            <div class="login__divider">
                                <span>or continue with</span>
                            </div>

                            <div class="social-login">
                                <a href="#" class="social-login__btn google" aria-label="Sign in with Google">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="#" class="social-login__btn facebook" aria-label="Sign in with Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>

                            <div class="login__footer">
                                Don't have an account? <a href="#" id="openSignupModal">Sign up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Signup Modal -->
    <div class="modal" id="signupModal">
        <div class="modal-content">
            <span class="close-modal" id="closeSignupModal">&times;</span>
            <h2 class="modal-title">Create Account</h2>
            <p class="modal-subtitle">Join us to start your fashion journey</p>

            <form class="signup-form" id="signupForm">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                            <div class="invalid-feedback">Please enter your first name</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                            <div class="invalid-feedback">Please enter your last name</div>
                        </div>
                    </div>
                </div>

                <div class="form-floating">
                    <input type="email" class="form-control" id="signupEmail" placeholder="Email Address" required>
                    <div class="invalid-feedback">Please enter a valid email address</div>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="signupPassword" placeholder="Password" required>
                    <i class="far fa-eye-slash password-toggle" id="toggleSignupPassword"></i>
                    <div class="invalid-feedback">Password must be at least 8 characters</div>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password"
                        required>
                    <i class="far fa-eye-slash password-toggle" id="toggleConfirmPassword"></i>
                    <div class="invalid-feedback">Passwords must match</div>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                    <label class="form-check-label" for="agreeTerms">
                        I agree to the <a href="#" style="color: var(--primary-color);">Terms of Service</a> and <a
                            href="#" style="color: var(--primary-color);">Privacy Policy</a>
                    </label>
                    <div class="invalid-feedback">You must agree to the terms</div>
                </div>

                <button type="submit" class="btn signup-btn">
                    <span class="signup-btn-text">Create Account</span>
                    <span class="signup-btn-loading" style="display: none;">
                        <i class="fas fa-spinner fa-spin"></i> Creating Account...
                    </span>
                </button>

                <div class="signup-footer">
                    Already have an account? <a href="#" id="switchToLogin">Sign in</a>
                </div>
            </form>
        </div>
    </div>


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
                        <li><a href="shop2.html?category=new-arrivals">New Arrivals</a></li>
                        <li><a href="shop2.html?category=clothing">Clothing</a></li>
                        <li><a href="shop2.html?category=accessories">Accessories</a></li>
                        <li><a href="shop2.html?category=sale">Sale</a></li>
                    </ul>
                </div>
                <div class="footer-widget">
                    <h5>Customer Service</h5>
                    <ul>
                        <li><a href="contact.html">Contact Us</a></li>
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

    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Header JavaScript
            const profileIconContainer = document.getElementById('profileIconContainerLogin');
            const profileDropdownMenu = document.getElementById('profileDropdownMenuLogin');
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

            const mobileMenuToggle = document.getElementById('mobileMenuToggleLogin');
            const mobileNav = document.getElementById('mobileNavLogin');
            const mobileNavClose = document.getElementById('mobileNavCloseLogin');
            const mobileNavOverlay = document.getElementById('mobileNavOverlayLogin');
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

            // Update current year in footer
            const currentYear = document.getElementById('currentYear');
            if (currentYear) {
                currentYear.textContent = new Date().getFullYear();
            }
            const currentYearFooter = document.getElementById('currentYearFooter');
            if (currentYearFooter) {
                currentYearFooter.textContent = new Date().getFullYear();
            }

            // Cart count
            const headerCartCountLoginEl = document.getElementById('headerCartCountLogin');
            if (headerCartCountLoginEl) {
                const storedCart = localStorage.getItem('shoppingCart');
                let totalItems = 0;
                if (storedCart) {
                    try {
                        const shoppingCartData = JSON.parse(storedCart);
                        shoppingCartData.forEach(item => {
                            totalItems += (Number(item.quantity) || 0);
                        });
                    } catch (e) { console.error("Error parsing cart for header count:", e); }
                }
                headerCartCountLoginEl.textContent = totalItems;
            }

            // Password toggle for login form
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('loginPassword');
            if (togglePassword && passwordInput) {
                togglePassword.addEventListener('click', function () {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    this.classList.toggle('fa-eye');
                    this.classList.toggle('fa-eye-slash');
                });
            }

            // Password toggle for signup form
            const toggleSignupPassword = document.getElementById('toggleSignupPassword');
            const signupPasswordInput = document.getElementById('signupPassword');
            const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
            const confirmPasswordInput = document.getElementById('confirmPassword');

            if (toggleSignupPassword && signupPasswordInput) {
                toggleSignupPassword.addEventListener('click', function () {
                    const type = signupPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    signupPasswordInput.setAttribute('type', type);
                    this.classList.toggle('fa-eye');
                    this.classList.toggle('fa-eye-slash');
                });
            }

            if (toggleConfirmPassword && confirmPasswordInput) {
                toggleConfirmPassword.addEventListener('click', function () {
                    const type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    confirmPasswordInput.setAttribute('type', type);
                    this.classList.toggle('fa-eye');
                    this.classList.toggle('fa-eye-slash');
                });
            }

            // Modal functionality
            const signupModal = document.getElementById('signupModal');
            const openSignupModal = document.getElementById('openSignupModal');
            const closeSignupModal = document.getElementById('closeSignupModal');
            const switchToLogin = document.getElementById('switchToLogin');

            if (openSignupModal && signupModal) {
                openSignupModal.addEventListener('click', function (e) {
                    e.preventDefault();
                    signupModal.style.display = 'block';
                    document.body.style.overflow = 'hidden';
                });
            }

            if (closeSignupModal && signupModal) {
                closeSignupModal.addEventListener('click', function () {
                    signupModal.style.display = 'none';
                    document.body.style.overflow = '';
                });
            }

            if (switchToLogin && signupModal) {
                switchToLogin.addEventListener('click', function (e) {
                    e.preventDefault();
                    signupModal.style.display = 'none';
                    document.body.style.overflow = '';
                    // Scroll to login form
                    const loginForm = document.getElementById('loginForm');
                    if (loginForm) loginForm.scrollIntoView({ behavior: 'smooth' });
                });
            }

            // Close modal when clicking outside modal-content
            if (signupModal) {
                signupModal.addEventListener('click', function (event) {
                    if (event.target === signupModal) {
                        signupModal.style.display = 'none';
                        document.body.style.overflow = '';
                    }
                });
            }

            // Form validation and submission for login form
            const loginForm = document.getElementById('loginForm');
            if (loginForm) {
                loginForm.addEventListener('submit', function (e) {
                    e.preventDefault();

                    // Get form elements
                    const email = document.getElementById('loginEmail');
                    const password = document.getElementById('loginPassword');
                    let isValid = true;

                    // Validate email
                    if (!email.value || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
                        email.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        email.classList.remove('is-invalid');
                    }

                    // Validate password
                    if (!password.value || password.value.length < 6) {
                        password.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        password.classList.remove('is-invalid');
                    }

                    if (!isValid) {
                        return;
                    }

                    // Show loading spinner
                    const btnText = loginForm.querySelector('.login-btn-text');
                    const btnLoading = loginForm.querySelector('.login-btn-loading');
                    if (btnText && btnLoading) {
                        btnText.style.display = 'none';
                        btnLoading.style.display = 'inline-block';
                    }

                    // Simulasi proses login (ganti dengan AJAX/fetch sesuai backend Anda)
                    setTimeout(function () {
                        // Sembunyikan loading spinner
                        if (btnText && btnLoading) {
                            btnText.style.display = 'inline-block';
                            btnLoading.style.display = 'none';
                        }

                        // Cek admin login
                        if (
                            email.value.trim().toLowerCase() === "admindarimata404@gmail.com" &&
                            password.value === "HanyaDiaYangSelaluMenemaniKu404"
                        ) {
                            window.location.href = "admin.html";
                        } else {
                            // Redirect ke user-profile.html jika login sukses (bukan admin)
                            window.location.href = 'user-profile';
                        }
                    }, 1200);
                });
            }

            // Form validation and submission for signup form
            const signupForm = document.getElementById('signupForm');
            if (signupForm) {
                signupForm.addEventListener('submit', function (e) {
                    e.preventDefault();

                    // Get form elements
                    const firstName = document.getElementById('firstName');
                    const lastName = document.getElementById('lastName');
                    const email = document.getElementById('signupEmail');
                    const password = document.getElementById('signupPassword');
                    const confirmPassword = document.getElementById('confirmPassword');
                    const agreeTerms = document.getElementById('agreeTerms');
                    let isValid = true;

                    // Validate first name
                    if (!firstName.value.trim()) {
                        firstName.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        firstName.classList.remove('is-invalid');
                    }

                    // Validate last name
                    if (!lastName.value.trim()) {
                        lastName.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        lastName.classList.remove('is-invalid');
                    }

                    // Validate email
                    if (!email.value || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
                        email.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        email.classList.remove('is-invalid');
                    }

                    // Validate password
                    if (!password.value || password.value.length < 8) {
                        password.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        password.classList.remove('is-invalid');
                    }

                    // Validate confirm password
                    if (!confirmPassword.value || confirmPassword.value !== password.value) {
                        confirmPassword.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        confirmPassword.classList.remove('is-invalid');
                    }

                    // Validate agree terms
                    if (!agreeTerms.checked) {
                        agreeTerms.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        agreeTerms.classList.remove('is-invalid');
                    }

                    if (!isValid) {
                        return;
                    }

                    // Show loading spinner
                    const btnText = signupForm.querySelector('.signup-btn-text');
                    const btnLoading = signupForm.querySelector('.signup-btn-loading');
                    if (btnText && btnLoading) {
                        btnText.style.display = 'none';
                        btnLoading.style.display = 'inline-block';
                    }

                    // Simulasi proses signup (ganti dengan AJAX/fetch sesuai backend Anda)
                    setTimeout(function () {
                        // Sembunyikan loading spinner
                        if (btnText && btnLoading) {
                            btnText.style.display = 'inline-block';
                            btnLoading.style.display = 'none';
                        }

                        // Tutup modal dan reset form
                        signupModal.style.display = 'none';
                        document.body.style.overflow = '';
                        signupForm.reset();

                        // Optional: tampilkan notifikasi sukses
                        alert('Account created successfully! Please sign in.');
                    }, 1400);
                });
            }
        });
    </script>
</body>

</html>