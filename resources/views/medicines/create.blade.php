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
<div class="container" style="max-width: 700px; margin: 40px auto;">
    <div class="card" style="padding: 36px 32px; border-radius: 16px; box-shadow: 0 2px 16px rgba(78,84,200,0.07); background: #fff;">
        <h1 class="section-title" style="font-size: 2rem; font-weight: 700; color: #4e54c8; margin-bottom: 28px;">Add New Medicine</h1>
        <form action="{{ route('medicines.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="margin-bottom: 22px;">
                <label for="name" style="font-weight: 600;">Medicine Name*</label>
                <input type="text" name="name" id="name" class="form-control" required style="width:100%; padding: 10px; border-radius: 6px; border: 1px solid #ddd;">
            </div>
            <div class="form-group" style="margin-bottom: 22px;">
                <label for="description" style="font-weight: 600;">Description*</label>
                <textarea name="description" id="description" class="form-control" rows="3" required style="width:100%; padding: 10px; border-radius: 6px; border: 1px solid #ddd;"></textarea>
            </div>
            <div class="form-row" style="display: flex; gap: 20px;">
                <div class="form-group" style="flex:1;">
                    <label for="price" style="font-weight: 600;">Price (₹)*</label>
                    <input type="number" name="price" id="price" class="form-control" step="0.01" min="0" required style="width:100%; padding: 10px; border-radius: 6px; border: 1px solid #ddd;">
                </div>
                <div class="form-group" style="flex:1;">
                    <label for="quantity" style="font-weight: 600;">Stock*</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" min="0" required style="width:100%; padding: 10px; border-radius: 6px; border: 1px solid #ddd;">
                </div>
            </div>
            <div class="form-group" style="margin: 22px 0;">
                <label for="image" style="font-weight: 600;">Product Image*</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*" style="width:100%;">
                <small class="text-muted">Optional: You can add an image later</small>
            </div>
            <div class="form-actions" style="display: flex; justify-content: flex-end; gap: 12px; margin-top: 30px;">
                <a href="{{ route('medicines.index') }}" class="btn btn-outline" style="padding: 10px 22px;">Cancel</a>
                <button type="submit" class="btn btn-primary" style="padding: 10px 22px;">Add Medicine</button>
            </div>
        </form>
    </div>
</div>
@endsection
