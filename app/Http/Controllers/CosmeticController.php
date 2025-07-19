<?php

namespace App\Http\Controllers;

use App\Models\Cosmetic;
use Illuminate\Http\Request;
use App\Models\Category;

class CosmeticController extends Controller
{
    public function create()
    {
        $categories = Category::orderBy('sort_order', 'asc')->get();
        return view('cosmetics.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'expiration_date' => 'nullable|date',
        ]);

        Cosmetic::create($validated);

        return redirect()->route('cosmetics.create')->with('success', 'コスメを登録しました');
    }

    public function index()
    {
        $cosmetics = Cosmetic::all();
        return view('cosmetics.index', compact('cosmetics'));
    }
}
