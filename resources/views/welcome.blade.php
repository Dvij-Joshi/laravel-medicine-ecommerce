@extends('layouts.app')

@section('content')
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Your Trusted Online Pharmacy</h1>
                <p>Quality medicines delivered to your doorstep with care and precision</p>
                <div class="hero-buttons">
                    <a href="{{ url('/medicines') }}" class="btn hero-btn">Browse Medicines</a>
                    <a href="{{ url('/prescriptions') }}" class="btn hero-btn-alt">Upload Prescription</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('medishop.png') }}" alt="MediShop logo">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <i class="fas fa-pills"></i>
                    <h3>Wide Range of Medicines</h3>
                    <p>Access to a comprehensive selection of prescription and over-the-counter medications.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-truck"></i>
                    <h3>Fast Delivery</h3>
                    <p>Quick and reliable delivery service to ensure you receive your medicines on time.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-user-md"></i>
                    <h3>Expert Consultation</h3>
                    <p>Professional pharmacists available to answer your medical queries.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>100% Genuine Products</h3>
                    <p>All medicines are sourced from authorized distributors and manufacturers.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="how-it-works" style="background: #fff; border-radius: 14px; box-shadow: 0 2px 12px rgba(78,84,200,0.05); margin: 40px auto; max-width: 1100px; padding: 48px 32px 32px 32px;">
        <h2 class="section-title" style="text-align:center; font-size:2rem; font-weight:700; color:#4e54c8; margin-bottom:40px;">How It Works</h2>
        <div class="steps-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 32px;">
            <div class="step-card" style="background:#f8f9fa; border-radius:10px; padding:28px 18px; text-align:center; box-shadow:0 2px 8px rgba(78,84,200,0.04);">
                <span class="step-number" style="display:inline-block; background:#4e54c8; color:#fff; font-weight:700; font-size:1.3rem; width:36px; height:36px; border-radius:50%; line-height:36px; margin-bottom:12px;">1</span>
                <h4 class="step-title" style="font-size:1.1rem; font-weight:600; margin-bottom:6px;">Search Medicines</h4>
                <p class="step-desc" style="color:#666; font-size:0.97rem;">Browse through our extensive catalog of medicines and healthcare products.</p>
            </div>
            <div class="step-card" style="background:#f8f9fa; border-radius:10px; padding:28px 18px; text-align:center; box-shadow:0 2px 8px rgba(78,84,200,0.04);">
                <span class="step-number" style="display:inline-block; background:#4e54c8; color:#fff; font-weight:700; font-size:1.3rem; width:36px; height:36px; border-radius:50%; line-height:36px; margin-bottom:12px;">2</span>
                <h4 class="step-title" style="font-size:1.1rem; font-weight:600; margin-bottom:6px;">Upload Prescription</h4>
                <p class="step-desc" style="color:#666; font-size:0.97rem;">Upload your prescription securely for prescription medications.</p>
            </div>
            <div class="step-card" style="background:#f8f9fa; border-radius:10px; padding:28px 18px; text-align:center; box-shadow:0 2px 8px rgba(78,84,200,0.04);">
                <span class="step-number" style="display:inline-block; background:#4e54c8; color:#fff; font-weight:700; font-size:1.3rem; width:36px; height:36px; border-radius:50%; line-height:36px; margin-bottom:12px;">3</span>
                <h4 class="step-title" style="font-size:1.1rem; font-weight:600; margin-bottom:6px;">Place Order</h4>
                <p class="step-desc" style="color:#666; font-size:0.97rem;">Add items to cart and proceed with our secure checkout process.</p>
            </div>
            <div class="step-card" style="background:#f8f9fa; border-radius:10px; padding:28px 18px; text-align:center; box-shadow:0 2px 8px rgba(78,84,200,0.04);">
                <span class="step-number" style="display:inline-block; background:#4e54c8; color:#fff; font-weight:700; font-size:1.3rem; width:36px; height:36px; border-radius:50%; line-height:36px; margin-bottom:12px;">4</span>
                <h4 class="step-title" style="font-size:1.1rem; font-weight:600; margin-bottom:6px;">Get Delivery</h4>
                <p class="step-desc" style="color:#666; font-size:0.97rem;">Receive your medicines at your doorstep with our fast delivery service.</p>
            </div>
        </div>
    </section>

    <section class="categories">
        <div class="container">
            <h2>Popular Categories</h2>
            <div class="categories-grid">
                <a href="{{ url('/medicines/prescription') }}" class="category-card">
                    <i class="fas fa-prescription-bottle-alt"></i>
                    <h3>Prescription Drugs</h3>
                </a>
                <a href="{{ url('/medicines/otc') }}" class="category-card">
                    <i class="fas fa-pills"></i>
                    <h3>Over The Counter</h3>
                </a>
                <a href="{{ url('/medicines/vitamins') }}" class="category-card">
                    <i class="fas fa-apple-alt"></i>
                    <h3>Vitamins & Supplements</h3>
                </a>
                <a href="{{ url('/medicines/personal-care') }}" class="category-card">
                    <i class="fas fa-pump-medical"></i>
                    <h3>Personal Care</h3>
                </a>
            </div>
        </div>
    </section>

    <section class="trending-section">
        <div class="container">
            <h2 class="section-title">Trending Products</h2>
            <div class="products-grid">
                <!-- Product cards will be dynamically loaded from the database -->
            </div>
        </div>
    </section>

    <!-- Chatbot Widget -->
    <button id="open-chatbot" style="position:fixed;bottom:32px;right:32px;z-index:2000;background:#4e54c8;color:#fff;border:none;border-radius:50%;width:60px;height:60px;box-shadow:0 2px 8px rgba(0,0,0,0.18);font-size:2rem;cursor:pointer;">
        <i class="fas fa-robot"></i>
    </button>
    <div id="chatbot-box" style="display:none;position:fixed;bottom:100px;right:32px;width:340px;max-width:95vw;background:#fff;border-radius:16px;box-shadow:0 2px 18px rgba(78,84,200,0.16);z-index:2001;overflow:hidden;">
        <div style="background:#4e54c8;color:#fff;padding:16px 20px;display:flex;align-items:center;justify-content:space-between;">
            <span style="font-weight:700;font-size:1.1rem;"><i class="fas fa-robot"></i> MediBot</span>
            <button id="close-chatbot" style="background:transparent;border:none;color:#fff;font-size:1.3rem;cursor:pointer;">&times;</button>
        </div>
        <div id="chatbot-body" style="padding:18px;max-height:260px;overflow-y:auto;font-size:1rem;"></div>
        <div style="padding:12px 18px;border-top:1px solid #eee;display:flex;gap:8px;">
            <input id="chatbot-input" type="text" placeholder="Type your medicine question..." style="flex:1;padding:7px 12px;border-radius:6px;border:1px solid #ddd;">
            <button id="send-chatbot" style="background:#4e54c8;color:#fff;border:none;border-radius:6px;padding:7px 18px;font-weight:600;cursor:pointer;">Send</button>
        </div>
        <div style="padding:10px 18px 14px 18px;font-size:0.92rem;background:#f8f9fa;">
            <strong>Try asking:</strong>
            <ul style="padding-left:18px;margin:10px 0 0 0;">
                <li>What is paracetamol used for?</li>
                <li>Can I buy antibiotics without a prescription?</li>
                <li>How should I store my medicines?</li>
                <li>What should I do if I miss a dose?</li>
                <li>Can I take two medicines together?</li>
            </ul>
        </div>
    </div>
    <script src="{{ asset('js/chatbot.js') }}"></script>
    <!-- End Chatbot Widget -->
@endsection
