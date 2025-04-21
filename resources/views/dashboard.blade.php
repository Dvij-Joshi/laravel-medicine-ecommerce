@extends('layouts.app')

@section('content')
<div class="container dashboard-wrapper" style="max-width: 1200px; margin: 0 auto; padding: 40px 20px;">
    <!-- Welcome Section -->
    <div class="dashboard-welcome" style="margin-bottom: 40px; display: flex; justify-content: space-between; align-items: center;">
        <div>
            <h1 class="dashboard-title" style="font-size: 2rem; color: #333; margin-bottom: 10px; font-weight:700;">Welcome back, {{ Auth::user()->first_name }}!</h1>
            <p style="color: #666;">Manage your medicines and prescriptions here.</p>
        </div>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-primary" style="background: #4A90E2; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-weight: 500; cursor: pointer;">Logout</button>
        </form>
    </div>

    <!-- Quick Actions -->
    <div class="dashboard-actions" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); gap: 30px; margin-bottom: 40px;">
        <div class="card dashboard-action-card">
            <div class="card-body" style="display: flex; align-items: center; gap: 15px;">
                <i class="fas fa-shopping-cart" style="font-size: 2rem; color: #4A90E2;"></i>
                <div>
                    <h3 style="margin:0; font-size: 1.1rem; font-weight:600;">My Cart</h3>
                    <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">View and manage your cart items</p>
                </div>
            </div>
            <a href="/cart" class="btn btn-outline" style="margin-top:12px;">View Cart</a>
        </div>
        <div class="card dashboard-action-card">
            <div class="card-body" style="display: flex; align-items: center; gap: 15px;">
                <i class="fas fa-box" style="font-size: 2rem; color: #4A90E2;"></i>
                <div>
                    <h3 style="margin:0; font-size: 1.1rem; font-weight:600;">Active Orders</h3>
                    <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Track your orders</p>
                </div>
            </div>
            <a href="/orders" class="btn btn-outline" style="margin-top:12px;">View Orders</a>
        </div>
        <div class="card dashboard-action-card">
            <div class="card-body" style="display: flex; align-items: center; gap: 15px;">
                <i class="fas fa-file-medical" style="font-size: 2rem; color: #4A90E2;"></i>
                <div>
                    <h3 style="margin:0; font-size: 1.1rem; font-weight:600;">Upload Prescription</h3>
                    <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Quick order with prescription</p>
                </div>
            </div>
            <a href="/prescriptions" class="btn btn-outline" style="margin-top:12px;">Upload</a>
        </div>
        <div class="card dashboard-action-card">
            <div class="card-body" style="display: flex; align-items: center; gap: 15px;">
                <i class="fas fa-user" style="font-size: 2rem; color: #4A90E2;"></i>
                <div>
                    <h3 style="margin:0; font-size: 1.1rem; font-weight:600;">Profile</h3>
                    <p style="color: #666; margin: 5px 0 0 0; font-size: 14px;">Manage your profile</p>
                </div>
            </div>
            <a href="/profile" class="btn btn-outline" style="margin-top:12px;">Profile</a>
        </div>
    </div>

    <!-- Recent Orders -->
    <div class="card" style="margin-bottom: 40px;">
        <div class="card-header" style="display: flex; justify-content: space-between; align-items: center; background: #f8f9fa; padding: 20px 25px; border-bottom: 1px solid #eee; border-radius: 10px 10px 0 0;">
            <h2 style="font-size: 1.3rem; color: #333; margin: 0; font-weight:700;">Recent Orders</h2>
            <a href="/orders" style="color: #4A90E2; text-decoration: none; font-size: 14px;">View All Orders</a>
        </div>
        <div style="overflow-x: auto;">
            <table class="table" style="width: 100%; border-collapse: collapse; background: #fff;">
                <thead>
                    <tr style="border-bottom: 2px solid #eee;">
                        <th style="text-align: left; padding: 12px; color: #666; font-weight: 500; font-size: 14px;">Order ID</th>
                        <th style="text-align: left; padding: 12px; color: #666; font-weight: 500; font-size: 14px;">Date</th>
                        <th style="text-align: left; padding: 12px; color: #666; font-weight: 500; font-size: 14px;">Items</th>
                        <th style="text-align: left; padding: 12px; color: #666; font-weight: 500; font-size: 14px;">Total</th>
                        <th style="text-align: left; padding: 12px; color: #666; font-weight: 500; font-size: 14px;">Status</th>
                        <th style="text-align: left; padding: 12px; color: #666; font-weight: 500; font-size: 14px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($orders as $order)
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 12px; font-size: 14px;">#ORD-{{ $order->id }}</td>
                        <td style="padding: 12px; color: #666; font-size: 14px;">{{ $order->created_at->format('M d, Y') }}</td>
                        <td style="padding: 12px; color: #666; font-size: 14px;">{{ $order->items_summary }}</td>
                        <td style="padding: 12px; font-size: 14px;">₹{{ number_format($order->total, 2) }}</td>
                        <td style="padding: 12px;">
                            <span style="background: #E8F5E9; color: #2E7D32; padding: 5px 10px; border-radius: 15px; font-size: 12px;">{{ ucfirst($order->status) }}</span>
                        </td>
                        <td style="padding: 12px;">
                            <a href="{{ route('orders.show', $order->id) }}" style="color: #4A90E2; text-decoration: none; font-size: 14px;">View Details</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="padding: 20px; text-align: center; color: #999;">No recent orders found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
