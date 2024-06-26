<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function index()
    {
        $industries = Industry::all();
        return view('industries.index', compact('industries'));
    }

    public function create()
    {
        return view('industries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:yes,no',
        ]);

        $industry = new Industry();
        $industry->name = $request->name;
        $industry->status = $request->status;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $industry->image = $imagePath;
        }

        $industry->save();

        return redirect()->route('industries.index')->with('success', 'Industry created successfully.');
    }

    public function show(Industry $industry)
    {
        return view('industries.show', compact('industry'));
    }

    public function edit(Industry $industry)
    {
        return view('industries.edit', compact('industry'));
    }

    public function update(Request $request, Industry $industry)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:yes,no',
        ]);

        $industry->name = $request->name;
        $industry->status = $request->status;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $industry->image = $imagePath;
        }

        $industry->save();

        return redirect()->route('industries.index')->with('success', 'Industry updated successfully.');
    }

    public function destroy(Industry $industry)
    {
        $industry->delete();
        return redirect()->route('industries.index')->with('success', 'Industry deleted successfully.');
    }
}
