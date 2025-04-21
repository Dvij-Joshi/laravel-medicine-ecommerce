<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use Illuminate\Support\Facades\Storage;

class MedicineController extends Controller
{
    public function index()
    {
        $medicines = Medicine::all();
        return view('medicines.index', compact('medicines'));
    }

    public function create()
    {
        return view('medicines.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('medicines', 'public');
            $validated['image'] = $path;
        }

        Medicine::create($validated);

        return redirect()->route('medicines.index')->with('success', 'Medicine added successfully!');
    }

    public function show(Medicine $medicine)
    {
        return view('medicines.show', compact('medicine'));
    }

    public function edit(Medicine $medicine)
    {
        return view('medicines.edit', compact('medicine'));
    }

    public function update(Request $request, Medicine $medicine)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($medicine->image) {
                Storage::disk('public')->delete($medicine->image);
            }
            $path = $request->file('image')->store('medicines', 'public');
            $validated['image'] = $path;
        }

        $medicine->update($validated);

        return redirect()->route('medicines.index')->with('success', 'Medicine updated successfully!');
    }

    public function destroy(Medicine $medicine)
    {
        if ($medicine->image) {
            Storage::disk('public')->delete($medicine->image);
        }
        $medicine->delete();
        return redirect()->route('medicines.index')->with('success', 'Medicine deleted successfully!');
    }
} 