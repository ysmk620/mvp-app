<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CosmeticController extends Controller
{
    public function create()
    {
        return view('cosmetics.create');
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
}
