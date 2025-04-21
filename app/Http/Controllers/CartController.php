<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Medicine;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', auth()->id())->with('medicine')->get();
        return view('cart.index', compact('cartItems'));
    }

    public function store(Request $request, Medicine $medicine)
    {
        // Defensive: Ensure user is logged in
        if (!auth()->check()) {
            return redirect()->route('login')->withErrors(['You must be logged in to add to cart.']);
        }
        
        // Defensive: Super verbose debugging
        \Log::info('CART ADD ATTEMPT', [
            'user_id' => auth()->id(),
            'medicine_id' => $medicine->id,
            'quantity' => $request->quantity,
            'medicine_exists' => !!$medicine,
            'medicine_quantity' => $medicine->quantity
        ]);
        
        // Defensive: Ensure $medicine is valid
        if (!$medicine || !is_numeric($medicine->quantity)) {
            return back()->withErrors(['quantity' => 'Medicine stock is invalid or medicine not found.']);
        }

        $request->validate([
            'quantity' => 'required|integer|min:1|max:' . $medicine->quantity,
        ]);

        // Direct database insert to bypass model binding issues
        try {
            $cartItem = Cart::where('user_id', auth()->id())
                ->where('medicine_id', $medicine->id)
                ->first();

            if ($cartItem) {
                $cartItem->update([
                    'quantity' => $cartItem->quantity + $request->quantity,
                ]);
                \Log::info('CART UPDATED', ['cart_id' => $cartItem->id]);
            } else {
                $newCart = Cart::create([
                    'user_id' => auth()->id(),
                    'medicine_id' => $medicine->id,
                    'quantity' => $request->quantity,
                ]);
                \Log::info('CART CREATED', ['cart_id' => $newCart->id ?? 'unknown']);
            }
            
            return redirect()->route('cart.index')->with('success', 'Item added to cart!');
        } catch (\Exception $e) {
            \Log::error('CART ADD ERROR', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return back()->withErrors(['cart_error' => 'Could not add to cart: ' . $e->getMessage()]);
        }
    }

    /**
     * Add item to cart using the direct route
     */
    public function addToCart(Request $request, Medicine $medicine)
    {
        // Defensive: Ensure user is logged in
        if (!auth()->check()) {
            return redirect()->route('login')->withErrors(['You must be logged in to add to cart.']);
        }
        
        // Log the request data
        \Log::info('DIRECT CART ADD ATTEMPT', [
            'user_id' => auth()->id(),
            'medicine_id' => $medicine->id,
            'medicine_exists' => !!$medicine,
            'quantity' => $request->quantity
        ]);
        
        // Validate the request
        $request->validate([
            'quantity' => 'required|integer|min:1|max:' . $medicine->quantity,
        ]);

        try {
            // Find existing cart item
            $cartItem = Cart::where('user_id', auth()->id())
                ->where('medicine_id', $medicine->id)
                ->first();

            if ($cartItem) {
                // Update existing cart item
                $cartItem->update([
                    'quantity' => $cartItem->quantity + $request->quantity,
                ]);
                \Log::info('CART UPDATED', ['cart_id' => $cartItem->id]);
            } else {
                // Create new cart item
                $cartItem = Cart::create([
                    'user_id' => auth()->id(),
                    'medicine_id' => $medicine->id,
                    'quantity' => $request->quantity,
                ]);
                \Log::info('CART CREATED', ['cart_id' => $cartItem->id ?? 'unknown']);
            }
            
            return redirect()->route('cart.index')->with('success', 'Item added to cart!');
        } catch (\Exception $e) {
            \Log::error('CART ADD ERROR', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return back()->withErrors(['cart_error' => 'Could not add to cart: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, Cart $cart)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1|max:' . $cart->medicine->quantity,
        ]);

        $cart->update([
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('cart.index')->with('success', 'Cart updated!');
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('cart.index')->with('success', 'Item removed from cart!');
    }
} 