<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'MediShop') }}</title>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f8f9fa;
            line-height: 1.6;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header styles */
        .header {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-top {
            background: #4A90E2;
            padding: 12px 0;
            color: white;
        }

        .header-top-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header-contact {
            display: flex;
            gap: 20px;
            font-size: 14px;
        }

        .header-contact a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .header-main {
            padding: 20px 0;
            background: white;
        }

        .header-main-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #2c3e50;
            font-size: 28px;
            font-weight: bold;
        }

        .logo i {
            margin-right: 10px;
            color: #4A90E2;
            font-size: 32px;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .header-actions .btn {
            padding: 10px 20px;
            font-weight: 500;
        }

        /* Navigation */
        .nav-main {
            background: white;
            border-top: 1px solid #eee;
            padding: 0;
        }

        .nav-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .nav-main ul {
            display: flex;
            gap: 40px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-main li {
            position: relative;
        }

        .nav-main a {
            text-decoration: none;
            color: #2c3e50;
            font-weight: 500;
            font-size: 15px;
            padding: 20px 0;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: color 0.3s;
        }

        .nav-main a:hover {
            color: #4A90E2;
        }

        .nav-main a i {
            font-size: 16px;
        }

        .nav-main li.active a {
            color: #4A90E2;
        }

        .nav-main li.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: #4A90E2;
        }

        /* Main Content */
        main {
            flex: 1;
        }

        /* Footer Styles */
        .footer {
            background: #34495e;
            color: white;
            margin-top: auto;
        }

        .footer-main {
            padding: 48px 0 24px 0;
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1200px;
            margin: 0 auto;
            gap: 40px;
        }

        .footer-about {
            flex: 1 1 220px;
            min-width: 220px;
            max-width: 320px;
            color: #ecf0f1;
        }

        .footer-about h3 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .footer-about p {
            font-size: 1rem;
            line-height: 1.7;
        }

        .footer-links {
            flex: 1 1 160px;
            min-width: 160px;
            color: #ecf0f1;
        }

        .footer-links h4 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 14px;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #bdc3c7;
            text-decoration: none;
        }

        .footer-contact {
            list-style: none;
            padding: 0;
            font-size: 1rem;
        }

        .footer-contact li {
            margin-bottom: 10px;
        }

        .footer-bottom {
            background: #2c3e50;
            padding: 12px 0;
        }

        .footer-bottom-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            color: #bdc3c7;
            font-size: 0.98rem;
        }

        .footer-social {
            display: flex;
            gap: 18px;
        }

        .footer-social a {
            color: #bdc3c7;
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            .header-contact {
                display: none;
            }

            .nav-main ul {
                gap: 20px;
            }

            .footer-content {
                gap: 20px;
            }

            .footer-bottom-content {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
    <style>
        .hero-buttons .btn.hero-btn {
            background: linear-gradient(90deg, #4e54c8 0%, #43cea2 100%);
            border: none;
            color: #fff;
            box-shadow: 0 2px 8px rgba(78,84,200,0.12);
            font-weight: 600;
            letter-spacing: 0.5px;
            padding: 0.8rem 2rem;
            border-radius: 8px;
            font-size: 1.07rem;
            transition: background 0.2s, box-shadow 0.2s;
        }
        .hero-buttons .btn.hero-btn:hover {
            background: linear-gradient(90deg, #43cea2 0%, #4e54c8 100%);
            box-shadow: 0 4px 16px rgba(78,84,200,0.13);
        }
        .hero-buttons .btn.hero-btn-alt {
            color: #4e54c8;
            border: 2px solid #4e54c8;
            background: #fff;
            font-weight: 600;
            letter-spacing: 0.5px;
            padding: 0.8rem 2rem;
            border-radius: 8px;
            font-size: 1.07rem;
            margin-left: 10px;
            transition: background 0.2s, color 0.2s;
        }
        .hero-buttons .btn.hero-btn-alt:hover {
            background: #4e54c8;
            color: #fff;
        }
        .features-section {
            background: linear-gradient(135deg, #eaf0fb 0%, #f8f9fa 100%);
            padding: 60px 0 40px 0;
            margin: 0 auto 0 auto;
            border-radius: 0 0 18px 18px;
            box-shadow: 0 2px 16px rgba(78,84,200,0.07);
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 32px;
            max-width: 1100px;
            margin: 0 auto;
        }
        .feature-card {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 2px 12px rgba(78,84,200,0.05);
            padding: 28px 22px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: box-shadow 0.2s;
            text-align: center;
        }
        .feature-card i {
            font-size: 2.2rem;
            color: #4e54c8;
            margin-bottom: 12px;
        }
        .feature-card h3 {
            margin: 0 0 8px 0;
            font-size: 1.15rem;
            font-weight: 600;
            color: #333;
        }
        .feature-card p {
            color: #666;
            font-size: 0.97rem;
            margin-bottom: 0;
            min-height: 38px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-top">
            <div class="header-top-content">
                <div class="header-contact">
                    <a href="tel:+1234567890"><i class="fas fa-phone"></i> +1 (234) 567-890</a>
                    <a href="mailto:support@medishop.com"><i class="fas fa-envelope"></i> support@medishop.com</a>
                </div>
                <div class="header-social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="header-main">
            <div class="header-main-content">
                <a href="/" class="logo">
                    <i class="fas fa-pills"></i>
                    <span>MediShop</span>
                </a>

                @auth
                @if (Request::is('dashboard') || Request::is('medicines*') || Request::is('cart*') || Request::is('orders*') || Request::is('prescriptions*') || Request::is('profile*'))
                <div class="header-actions">
                    <a href="/cart" class="btn btn-outline">
                        <i class="fas fa-shopping-cart"></i>
                        Cart
                        <span class="cart-count">{{ \App\Models\Cart::where('user_id', auth()->id())->sum('quantity') }}</span>
                    </a>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline; margin-left: 10px;">
                        @csrf
                        <button type="submit" class="btn">Logout</button>
                    </form>
                </div>
                @endif
                @else
                <div class="header-actions">
                    <a href="{{ route('login') }}" class="btn btn-outline">Login</a>
                    <a href="{{ route('register') }}" class="btn">Register</a>
                </div>
                @endauth
            </div>
        </div>

        @auth
        <nav class="nav-main">
            <div class="nav-content">
                <ul>
                    <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Dashboard</a>
                    </li>
                    <li class="{{ Request::is('medicines*') ? 'active' : '' }}">
                        <a href="/medicines"><i class="fas fa-pills"></i> Medicines</a>
                    </li>
                    <li class="{{ Request::is('orders*') ? 'active' : '' }}">
                        <a href="/orders"><i class="fas fa-box"></i> My Orders</a>
                    </li>
                    <li class="{{ Request::is('prescriptions*') ? 'active' : '' }}">
                        <a href="/prescriptions"><i class="fas fa-file-medical"></i> Prescriptions</a>
                    </li>
                    <li class="{{ Request::is('profile*') ? 'active' : '' }}">
                        <a href="/profile"><i class="fas fa-user"></i> Profile</a>
                    </li>
                </ul>
            </div>
        </nav>
        @endauth
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-main" style="background: #34495e; padding: 48px 0 24px 0;">
            <div class="footer-content" style="display: flex; flex-wrap: wrap; justify-content: center; max-width: 1200px; margin: 0 auto; gap: 40px;">
                <div class="footer-about" style="flex: 1 1 220px; min-width: 220px; max-width: 320px; color: #ecf0f1;">
                    <h3 style="font-size: 1.4rem; font-weight: 700; margin-bottom: 18px;"><i class="fas fa-pills"></i> MediShop</h3>
                    <p style="font-size: 1rem; line-height: 1.7;">Your trusted online pharmacy providing quality medicines and healthcare products. We ensure safe and reliable delivery of medications right to your doorstep.</p>
                </div>

                <div class="footer-links" style="flex: 1 1 160px; min-width: 160px; color: #ecf0f1;">
                    <h4 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 14px;">Quick Links</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="/" style="color: #bdc3c7; text-decoration: none;"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="/medicines" style="color: #bdc3c7; text-decoration: none;"><i class="fas fa-chevron-right"></i> Medicines</a></li>
                        <li><a href="/about" style="color: #bdc3c7; text-decoration: none;"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="/contact" style="color: #bdc3c7; text-decoration: none;"><i class="fas fa-chevron-right"></i> Contact</a></li>
                    </ul>
                </div>

                <div class="footer-links" style="flex: 1 1 180px; min-width: 180px; color: #ecf0f1;">
                    <h4 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 14px;">Our Services</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="/prescriptions" style="color: #bdc3c7; text-decoration: none;"><i class="fas fa-chevron-right"></i> Upload Prescription</a></li>
                        <li><a href="/orders" style="color: #bdc3c7; text-decoration: none;"><i class="fas fa-chevron-right"></i> Order Tracking</a></li>
                        <li><a href="/shipping" style="color: #bdc3c7; text-decoration: none;"><i class="fas fa-chevron-right"></i> Shipping Info</a></li>
                        <li><a href="/faq" style="color: #bdc3c7; text-decoration: none;"><i class="fas fa-chevron-right"></i> FAQs</a></li>
                    </ul>
                </div>

                <div class="footer-links" style="flex: 1 1 220px; min-width: 220px; color: #ecf0f1;">
                    <h4 style="font-size: 1.1rem; font-weight: 600; margin-bottom: 14px;">Contact Info</h4>
                    <ul class="footer-contact" style="list-style: none; padding: 0; font-size: 1rem;">
                        <li style="margin-bottom: 10px;"><i class="fas fa-map-marker-alt"></i> 123 Health Street, Medical District</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-phone"></i> +1 (234) 567-890</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-envelope"></i> support@medishop.com</li>
                        <li><i class="fas fa-clock"></i> Mon - Sat: 9:00 AM - 9:00 PM</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom" style="background: #2c3e50; padding: 12px 0;">
            <div class="footer-bottom-content" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; max-width: 1200px; margin: 0 auto; padding: 0 20px; color: #bdc3c7; font-size: 0.98rem;">
                <div>  {{ date('Y') }} MediShop. All rights reserved.</div>
                <div class="footer-social" style="display: flex; gap: 18px;">
                    <a href="#" style="color: #bdc3c7; font-size: 1.2rem;"><i class="fab fa-facebook"></i></a>
                    <a href="#" style="color: #bdc3c7; font-size: 1.2rem;"><i class="fab fa-twitter"></i></a>
                    <a href="#" style="color: #bdc3c7; font-size: 1.2rem;"><i class="fab fa-instagram"></i></a>
                    <a href="#" style="color: #bdc3c7; font-size: 1.2rem;"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>

    @if(session('success'))
    <script>
        toastr.success('{{ session('success') }}');
    </script>
    @endif

    @if(session('error'))
    <script>
        toastr.error('{{ session('error') }}');
    </script>
    @endif
</body>
</html>