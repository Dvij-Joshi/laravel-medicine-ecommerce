<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Get all cart items for the user
        $cartItems = Cart::where('user_id', auth()->id())->get();
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        // Create an order (minimal example, expand as needed)
        $order = Order::create([
            'user_id' => auth()->id(),
            // Add more fields as needed
        ]);

        // Update medicine quantities based on cart
        foreach ($cartItems as $item) {
            $medicine = $item->medicine;
            if ($medicine && $medicine->quantity >= $item->quantity) {
                $medicine->quantity -= $item->quantity;
                $medicine->save();
            }
        }

        // Optionally: Attach items to order (not implemented in this stub)

        // Clear the cart
        Cart::where('user_id', auth()->id())->delete();

        return redirect()->route('cart.index')->with('success', 'Order placed!');
    }

    public function show(Order $order)
    {
        // Ensure the user can only view their own orders
        if ($order->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }
        return view('orders.show', compact('order'));
    }
}
