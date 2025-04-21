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
<section class="products-section">
    <div class="container">
        <div class="products-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px;">
            <h1 class="section-title" style="margin: 0; font-size: 2.2rem; font-weight: 700; color: #4e54c8;">All Medicines</h1>
            <a href="{{ route('medicines.create') }}" class="btn btn-primary" style="padding: 12px 28px; font-size: 1rem; border-radius: 6px;">+ Add Medicine</a>
        </div>
        <div class="products-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 32px;">
            @forelse($medicines as $medicine)
            <div class="product-card" style="background: #fff; border-radius: 14px; box-shadow: 0 2px 12px rgba(78,84,200,0.05); padding: 24px; display: flex; flex-direction: column; align-items: center; transition: box-shadow 0.2s;">
                <div class="product-image" style="width: 120px; height: 120px; background: #f8f9fa; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 18px; overflow: hidden;">
                    <img src="{{ $medicine->image ? asset('storage/' . $medicine->image) : asset('images/placeholder.png') }}" alt="{{ $medicine->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="product-info" style="text-align: center;">
                    <h4 style="margin: 0 0 8px 0; font-size: 1.15rem; font-weight: 600; color: #333;">{{ $medicine->name }}</h4>
                    <p style="color: #666; font-size: 0.95rem; margin-bottom: 8px; min-height: 38px;">{{ Str::limit($medicine->description, 60) }}</p>
                    <div style="margin-bottom: 8px;">
                        <span class="product-price" style="color: #43cea2; font-weight: 700; font-size: 1.1rem;">₹{{ number_format($medicine->price, 2) }}</span>
                    </div>
                    <span class="product-qty" style="color: #999; font-size: 0.9rem;">Stock: {{ $medicine->quantity }}</span>
                </div>
                <div class="product-actions" style="margin-top: 18px; width: 100%;">
                    <form action="{{ route('cart.add', $medicine) }}" method="POST" style="display: flex; gap: 10px; justify-content: center; align-items: center;">
                        @csrf
                        <input type="number" name="quantity" value="1" min="1" max="{{ $medicine->quantity }}" style="width: 60px; padding: 6px 8px; border: 1px solid #eee; border-radius: 5px;">
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                </div>
            </div>
            @empty
            <div style="padding: 40px; text-align: center; color: #999; width:100%;">No medicines found.</div>
            @endforelse
        </div>
    </div>
</section>
@endsection
