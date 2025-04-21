<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\OrderController;

// Public routes
Route::get('/', function () {
    return view('welcome');
});

// Auth routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected routes
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        $orders = \App\Models\Order::where('user_id', auth()->id())->latest()->take(5)->get();
        return view('dashboard', compact('orders'));
    })->name('dashboard');

    // Medicines
    Route::resource('medicines', MedicineController::class);

    // Cart
    Route::resource('cart', CartController::class)->except(['create', 'edit', 'show']);
    // Direct route for adding to cart
    Route::post('cart/add/{medicine}', [CartController::class, 'addToCart'])->name('cart.add');

    // Orders
    Route::resource('orders', OrderController::class)->only(['store', 'show']);

    // Chatbot
    Route::get('/chatbot', [ChatbotController::class, 'index'])->name('chatbot.index');
    Route::post('/chatbot/respond', [ChatbotController::class, 'respond'])->name('chatbot.respond');
});
