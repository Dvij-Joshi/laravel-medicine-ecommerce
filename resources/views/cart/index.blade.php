@extends('layouts.app')

@section('content')
<section class="cart-section">
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success" style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
        @endif
        
        @if (session('error'))
        <div class="alert alert-danger" style="background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
            {{ session('error') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger" style="background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
            <ul style="margin-bottom:0;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        <h1 class="section-title" style="margin-bottom: 30px;">Shopping Cart</h1>
        <div class="cart-container" style="display: flex; flex-wrap: wrap; gap: 40px; align-items: flex-start;">
            <div class="cart-items" style="flex: 2; min-width: 320px;">
                <div class="cart-header" style="display: grid; grid-template-columns: 2fr 1fr 1fr 1fr 1fr; background: #f8f9fa; border-radius: 8px 8px 0 0; padding: 18px 20px; color: #666; font-weight: 500;">
                    <div>Product</div>
                    <div>Price</div>
                    <div>Quantity</div>
                    <div>Subtotal</div>
                    <div></div>
                </div>
                @forelse($cartItems as $item)
                <div class="cart-row" style="display: grid; grid-template-columns: 2fr 1fr 1fr 1fr 1fr; align-items: center; background: #fff; border-bottom: 1px solid #eee; padding: 18px 20px;">
                    <div style="display: flex; align-items: center; gap: 16px;">
                        <img src="{{ $item->medicine->image ? asset('storage/' . $item->medicine->image) : asset('images/placeholder.png') }}" alt="{{ $item->medicine->name }}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;">
                        <div>
                            <div style="font-weight:600; color:#333;">{{ $item->medicine->name }}</div>
                            <div style="font-size: 13px; color: #999;">{{ Str::limit($item->medicine->description, 40) }}</div>
                        </div>
                    </div>
                    <div style="color:#4A90E2; font-weight:500;">₹{{ number_format($item->medicine->price, 2) }}</div>
                    <div>
                        <form action="{{ route('cart.update', $item->id) }}" method="POST" style="display: flex; align-items: center; gap: 8px;">
                            @csrf
                            @method('PUT')
                            <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" max="{{ $item->medicine->quantity }}" style="width: 60px; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
                            <button type="submit" class="btn btn-outline" style="padding: 8px 12px; background: #f8f9fa; color: #4A90E2; border: 1px solid #4A90E2; border-radius: 4px; cursor: pointer;">Update</button>
                        </form>
                    </div>
                    <div style="font-weight:600;">₹{{ number_format($item->medicine->price * $item->quantity, 2) }}</div>
                    <div>
                        <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="padding: 8px 12px; background: #dc3545; color: white; border: none; border-radius: 4px; cursor: pointer;">Remove</button>
                        </form>
                    </div>
                </div>
                @empty
                <div style="padding: 40px; text-align: center; color: #999; background: white; border-radius: 0 0 8px 8px;">
                    <i class="fas fa-shopping-cart" style="font-size: 2rem; color: #ddd; margin-bottom: 15px;"></i>
                    <p>Your cart is empty.</p>
                    <a href="{{ route('medicines.index') }}" class="btn btn-primary" style="display: inline-block; margin-top: 15px; padding: 10px 20px; background: #4A90E2; color: white; text-decoration: none; border-radius: 4px;">Shop Medicines</a>
                </div>
                @endforelse
            </div>
            <div class="cart-summary card" style="flex: 1; min-width: 280px; background: #f8f9fa; border-radius: 10px; padding: 32px 24px; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
                <h2 style="font-size: 1.2rem; color: #333; margin-bottom: 24px; font-weight:700;">Cart Summary</h2>
                <div class="summary-row" style="display: flex; justify-content: space-between; margin-bottom: 12px; padding-bottom: 12px; border-bottom: 1px solid #eee;">
                    <span>Subtotal</span>
                    <span>₹{{ number_format($cartItems->sum(function($item) { return $item->medicine->price * $item->quantity; }), 2) }}</span>
                </div>
                <div class="summary-row" style="display: flex; justify-content: space-between; margin-bottom: 12px; padding-bottom: 12px; border-bottom: 1px solid #eee;">
                    <span>Items</span>
                    <span>{{ $cartItems->sum('quantity') }}</span>
                </div>
                <div class="summary-row" style="display: flex; justify-content: space-between; margin-bottom: 24px; padding-bottom: 12px; border-bottom: 1px solid #eee; font-weight: bold;">
                    <span>Total</span>
                    <span>₹{{ number_format($cartItems->sum(function($item) { return $item->medicine->price * $item->quantity; }), 2) }}</span>
                </div>
                <form action="{{ route('orders.store') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary" style="width: 100%; padding: 12px; background: #4A90E2; color: white; border: none; border-radius: 4px; font-weight: 600; cursor: pointer; {{ $cartItems->isEmpty() ? 'opacity: 0.5; pointer-events: none;' : '' }}">Checkout</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
